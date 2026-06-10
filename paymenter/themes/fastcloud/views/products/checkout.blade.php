{{-- ═══ CHECKOUT / CONFIGURE ══════════════════════════════════════════════ --}}
@php
use Illuminate\Support\Js;

// ── Валюта ───────────────────────────────────────────────────────────────────
$_currency      = session('currency', config('settings.default_currency'));
$_currencyModel = \App\Models\Currency::find($_currency);
$_symbol        = $_currencyModel?->suffix ?? ($_currencyModel?->prefix ?? $_currency);
$_symbolAfter   = !empty($_currencyModel?->suffix);

// ── Настройки продукта (CPU/RAM/NVMe) ────────────────────────────────────────
$_settings = $product->settings->pluck('value', 'key');
$_specs = collect([
    $_settings['cpu']     ?? null ? ($_settings['cpu'] . ' vCPU')     : null,
    $_settings['ram']     ?? null ? ($_settings['ram'] . ' GB RAM')   : null,
    $_settings['nvme']    ?? null ? ($_settings['nvme'] . ' GB NVMe') : null,
    $_settings['traffic'] ?? null ? ($_settings['traffic'] . ' трафик') : null,
])->filter()->implode(' · ');

// ── Данные планов для Alpine ──────────────────────────────────────────────────
$_monthlyPlan = $product->availablePlans()
    ->where('billing_period', 1)->where('billing_unit', 'month')->first();
$_monthlyPrice = (float)($_monthlyPlan?->price()->price ?? 0);

$_planMap = [];
foreach ($product->availablePlans() as $_ap) {
    $_price   = (float)($_ap->price()->price ?? 0);
    $_months  = (int)$_ap->billing_period;
    $_perMonth = $_months > 0 ? $_price / $_months : $_price;
    $_disc    = ($_monthlyPrice > 0 && $_perMonth < $_monthlyPrice)
        ? (int)round((1 - $_perMonth / $_monthlyPrice) * 100)
        : 0;
    $_planMap[(string)$_ap->id] = [
        'price'     => $_price,
        'period'    => $_months,
        'name'      => $_ap->name,
        'perMonth'  => $_perMonth,
        'discount'  => $_disc,
        'formatted' => (string)$_ap->price(),
    ];
}

// ── Данные аддонов ────────────────────────────────────────────────────────────
$_checkboxOpts = $product->configOptions->where('type', 'checkbox');
$_addonMap  = [];
$_addonMeta = [];
foreach ($_checkboxOpts as $_opt) {
    $_child = $_opt->children->first();
    if (!$_child) continue;
    $_byPeriod = [];
    foreach ($_child->plans as $_p) {
        $_price = $_p->prices->where('currency_code', $_currency)->first()?->price ?? 0;
        $_byPeriod[(string)(int)$_p->billing_period] = (float)$_price;
    }
    $_addonMap[(string)$_opt->id]  = $_byPeriod;
    $_addonMeta[(string)$_opt->id] = [
        'name' => $_opt->name,
        'desc' => $_opt->description ?? '',
    ];
}

// ── Начальные чекбоксы ────────────────────────────────────────────────────────
$_addonInit = [];
foreach ($_checkboxOpts as $_opt) {
    $_addonInit[(string)$_opt->id] = (bool)($configOptions[$_opt->id] ?? false);
}

// ── Остальные опции (ОС, текст и т.д.) ───────────────────────────────────────
$_selectOpts = $product->configOptions->whereNotIn('type', ['checkbox']);

// ── Метка периода: ищем hostname-поле ────────────────────────────────────────
$_hostnameOpt = $product->configOptions->where('type', 'text')->first();
$_hostnameId  = $_hostnameOpt ? (string)$_hostnameOpt->id : null;

// ── Категория = локация ───────────────────────────────────────────────────────
$_categoryName = $category->name;
$_categoryUrl  = route('category.show', ['category' => $category->slug]);
@endphp

<div x-data="{
  plans:       {{ Js::from($_planMap) }},
  addonPrices: {{ Js::from($_addonMap) }},
  addonMeta:   {{ Js::from($_addonMeta) }},
  selPlan:     '{{ $plan->id }}',
  addons:      {{ Js::from($_addonInit) }},
  symbol:      {{ Js::from($_symbol) }},
  symAfter:    {{ Js::from($_symbolAfter) }},
  hostname:    {{ Js::from($configOptions[$_hostnameOpt?->id] ?? '') }},
  categoryName: {{ Js::from($_categoryName) }},

  get curPlan()   { return this.plans[this.selPlan] || null; },
  get curPeriod() { return this.curPlan ? String(this.curPlan.period) : '1'; },

  get perMonth() {
    if (!this.curPlan) return 0;
    let pm = this.curPlan.perMonth;
    for (let [id, checked] of Object.entries(this.addons)) {
      if (checked && this.addonPrices[id] && this.addonPrices[id][this.curPeriod])
        pm += this.addonPrices[id][this.curPeriod];
    }
    return pm;
  },

  get displayTotal() {
    if (!this.curPlan) return 0;
    return this.perMonth * (this.curPlan.period || 1);
  },

  get periodNote() {
    if (!this.curPlan) return '';
    let m = this.curPlan.period;
    return m === 1 ? 'оплата за 1 месяц' : 'за ' + m + ' мес. вперёд';
  },

  get summaryLines() {
    if (!this.curPlan) return [];
    let lines = [];
    if (this.hostname.trim()) lines.push({ l: 'Имя — ' + this.hostname.trim(), r: '' });
    lines.push({ l: 'Тариф ' + this.curPlan.name, r: this.fmt(this.curPlan.perMonth) + '/мес' });
    lines.push({ l: 'Локация — ' + this.categoryName, r: '' });
    let m = this.curPlan.period;
    let disc = this.curPlan.discount;
    lines.push({ l: 'Период — ' + m + ' ' + (m===1?'мес':(m<5?'мес':'мес')) + (disc>0?' (−'+disc+'%)':''), r: '' });
    for (let [id, checked] of Object.entries(this.addons)) {
      if (checked && this.addonMeta[id] && this.addonPrices[id]) {
        let v = this.addonPrices[id][this.curPeriod];
        lines.push({ l: this.addonMeta[id].name, r: v ? '+' + this.fmt(v) + '/мес' : '' });
      }
    }
    return lines;
  },

  fmt(n) {
    let s = Math.round(n).toLocaleString('ru-RU');
    return this.symAfter ? s + ' ' + this.symbol : this.symbol + ' ' + s;
  },

  addonPrice(id) {
    let p = this.addonPrices[String(id)];
    if (!p) return '';
    let v = p[this.curPeriod];
    return v ? '+' + this.fmt(v) + '<small>/мес</small>' : '';
  }
}">

<div class="fc-mkt-wrap" style="padding-top: 90px;">

  {{-- Хлебные крошки --}}
  <div class="fc-cfg-breadcrumb">
    <a href="{{ route('pricing') }}" wire:navigate>тарифы</a>
    <span class="fc-cfg-breadcrumb-sep">/</span>
    <span style="color:var(--fc-text2)">настройка сервера</span>
  </div>

  <div class="fc-cfg-layout">

    {{-- ══ ЛЕВАЯ КОЛОНКА ══════════════════════════════════════════════════ --}}
    <div>

      {{-- Plan head --}}
      <div class="fc-cfg-head">
        <div>
          <div class="fc-cfg-plan-name">{{ $product->name }}</div>
          @if($_specs)
          <div class="fc-cfg-plan-specs">{{ $_specs }}</div>
          @endif
        </div>
        <a href="{{ $_categoryUrl }}" wire:navigate class="fc-btn-ghost fc-btn-sm" style="flex-shrink:0;">
          ← Сменить тариф
        </a>
      </div>

      {{-- ── Название сервера ──────────────────────────────────────────── --}}
      @if($_hostnameOpt)
      <section class="fc-cfg-section">
        <div class="fc-cfg-section-head">
          <h2 class="fc-cfg-section-title">Название сервера</h2>
          <span class="fc-cfg-section-hint">для отображения в панели</span>
        </div>
        <div class="fc-cfg-field">
          <input class="fc-cfg-inp @error('configOptions.' . $_hostnameOpt->id) fc-cfg-inp-error @enderror"
                 type="text"
                 wire:model="configOptions.{{ $_hostnameOpt->id }}"
                 x-model="hostname"
                 placeholder="{{ $_hostnameOpt->description ?? 'например, web-prod-01' }}"
                 maxlength="48" autocomplete="off">
          @error('configOptions.' . $_hostnameOpt->id)
            <p class="fc-cfg-field-error">Укажите название сервера</p>
          @enderror
        </div>
      </section>
      @endif

      {{-- ── Локация (read-only) ───────────────────────────────────────── --}}
      <section class="fc-cfg-section">
        <div class="fc-cfg-section-head">
          <h2 class="fc-cfg-section-title">Локация</h2>
        </div>
        <div class="fc-cfg-loc">
          <div class="fc-cfg-loc-info">
            <span class="fc-cfg-loc-pin">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </span>
            <div>
              <div class="fc-cfg-loc-name">{{ $_categoryName }}</div>
              <div class="fc-cfg-loc-sub">выбрано на предыдущем шаге</div>
            </div>
          </div>
          <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-ghost fc-btn-sm">Сменить локацию</a>
        </div>
      </section>

      {{-- ── Период оплаты ─────────────────────────────────────────────── --}}
      @if ($product->availablePlans()->count() > 1)
      <section class="fc-cfg-section">
        <div class="fc-cfg-section-head">
          <h2 class="fc-cfg-section-title">Период оплаты</h2>
          <span class="fc-cfg-section-hint">Чем длиннее — тем дешевле</span>
        </div>
        <div class="fc-cfg-period-grid">
          @foreach ($product->availablePlans() as $availablePlan)
          @php $_pm = $_planMap[(string)$availablePlan->id]; @endphp
          <label style="cursor:pointer;display:block;position:relative;">
            {{-- wire:model deferred — синхронизируется только при checkout, не вызывает перерисовку --}}
            <input type="radio"
                   wire:model="plan_id"
                   value="{{ $availablePlan->id }}"
                   @change="selPlan = '{{ $availablePlan->id }}'"
                   style="position:absolute;opacity:0;width:0;height:0;pointer-events:none;">
            <div class="fc-cfg-period-tile"
                 :class="{ 'on': selPlan == '{{ $availablePlan->id }}' }">
              @if($_pm['discount'] > 0)
              <span class="fc-cfg-period-badge">−{{ $_pm['discount'] }}%</span>
              @endif
              <span class="fc-cfg-period-len">{{ $availablePlan->billing_period }}&thinsp;{{ $availablePlan->billing_period == 1 ? 'месяц' : ($availablePlan->billing_period < 5 ? 'месяца' : 'месяцев') }}</span>
              <span class="fc-cfg-period-price">
                @php $_fmtPm = $_symbolAfter ? round($_pm['perMonth']) . ' ' . $_symbol : $_symbol . ' ' . round($_pm['perMonth']); @endphp
                {{ $_fmtPm }}<small>/мес</small>
              </span>
            </div>
          </label>
          @endforeach
        </div>
      </section>
      @endif

      {{-- ── ОС и прочие опции ─────────────────────────────────────────── --}}
      @foreach ($_selectOpts->whereNotIn('id', $_hostnameOpt ? [$_hostnameOpt->id] : []) as $configOption)
      @php
          $showPriceTag = $configOption->children->filter(
              fn($v) => !$v->price(billing_period: $plan->billing_period, billing_unit: $plan->billing_unit)->is_free
          )->count() > 0;
      @endphp
      <section class="fc-cfg-section">
        <div class="fc-cfg-section-head">
          <h2 class="fc-cfg-section-title">{{ $configOption->name }}</h2>
        </div>

        @if ($configOption->type === 'select')
          <div class="fc-cfg-field">
            <span class="fc-cfg-field-label">Операционная система</span>
            <select wire:model="configOptions.{{ $configOption->id }}" class="fc-cfg-select">
              @foreach ($configOption->children as $child)
              <option value="{{ $child->id }}">
                {{ $child->name }}
                @if($showPriceTag && $child->price(billing_period: $plan->billing_period, billing_unit: $plan->billing_unit)->available)
                  · +{{ $child->price(billing_period: $plan->billing_period, billing_unit: $plan->billing_unit) }}
                @endif
              </option>
              @endforeach
            </select>
            @if($configOption->description)
            <p style="font-size:12px;color:var(--fc-text3);margin-top:4px;">{{ $configOption->description }}</p>
            @endif
          </div>

        @elseif ($configOption->type === 'radio')
          <div style="display:flex;flex-direction:column;gap:8px;">
          @foreach ($configOption->children as $child)
            <label class="fc-cfg-addon-row"
                   :class="{ 'on': $wire.configOptions['{{ $configOption->id }}'] == {{ $child->id }} }">
              <input type="radio" wire:model.live="configOptions.{{ $configOption->id }}"
                     value="{{ $child->id }}" style="display:none;">
              <div class="fc-cfg-addon-cb">
                <svg class="fc-cfg-addon-cb-icon" width="10" height="10" viewBox="0 0 12 12" fill="none">
                  <path d="M2 6l3 3 5-5" stroke="#0a0c13" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="fc-cfg-addon-info">
                <div class="fc-cfg-addon-name">{{ $child->name }}</div>
              </div>
            </label>
          @endforeach
          </div>

        @elseif (in_array($configOption->type, ['text', 'number']))
          <div class="fc-cfg-field">
            <input type="{{ $configOption->type }}"
                   wire:model="configOptions.{{ $configOption->id }}"
                   placeholder="{{ $configOption->description ?? '' }}"
                   class="fc-cfg-inp" autocomplete="off">
            @error('configOptions.' . $configOption->id)
              <p style="font-size:12px;color:var(--fc-red);margin-top:4px;">{{ $message }}</p>
            @enderror
          </div>
        @endif
      </section>
      @endforeach

      {{-- ── Дополнительные услуги ─────────────────────────────────────── --}}
      @if($_checkboxOpts->isNotEmpty())
      <section class="fc-cfg-section">
        <div class="fc-cfg-section-head">
          <h2 class="fc-cfg-section-title">Дополнительные услуги</h2>
        </div>
        <div class="fc-cfg-addon-list">
          @foreach ($_checkboxOpts as $configOption)
          <label class="fc-cfg-addon-row" for="addon_{{ $configOption->id }}"
                 :class="{ 'on': addons['{{ $configOption->id }}'] }">
            <div class="fc-cfg-addon-cb">
              <svg class="fc-cfg-addon-cb-icon" width="10" height="10" viewBox="0 0 12 12" fill="none">
                <path d="M2 6l3 3 5-5" stroke="#0a0c13" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="fc-cfg-addon-info">
              <div class="fc-cfg-addon-name">{{ $configOption->name }}</div>
              @if($configOption->description)
              <div class="fc-cfg-addon-desc">{{ $configOption->description }}</div>
              @endif
            </div>
            <span class="fc-cfg-addon-price" x-html="addonPrice({{ $configOption->id }})"></span>
            <input type="checkbox" id="addon_{{ $configOption->id }}"
                   wire:model="configOptions.{{ $configOption->id }}"
                   @change="addons['{{ $configOption->id }}'] = $event.target.checked"
                   style="position:absolute;opacity:0;width:0;height:0;">
          </label>
          @endforeach
        </div>
      </section>
      @endif

      {{-- ── Extension checkout config ──────────────────────────────────── --}}
      @foreach ($this->getCheckoutConfig() as $configOption)
      @php $configOption = (object) $configOption; @endphp
      <section class="fc-cfg-section">
        <x-form.configoption :config="$configOption" :name="'checkoutConfig.' . $configOption->name">
          @if ($configOption->type == 'select')
            @foreach ($configOption->options as $val => $lbl)
            <option value="{{ $val }}">{{ $lbl }}</option>
            @endforeach
          @elseif($configOption->type == 'radio')
            @foreach ($configOption->options as $val => $lbl)
            <div class="flex items-center gap-2">
              <input type="radio" id="{{ $val }}" name="{{ $configOption->name }}"
                  wire:model.live="checkoutConfig.{{ $configOption->name }}" value="{{ $val }}" />
              <label for="{{ $val }}">{{ $lbl }}</label>
            </div>
            @endforeach
          @endif
        </x-form.configoption>
      </section>
      @endforeach

    </div>{{-- /left --}}

    {{-- ══ SUMMARY ════════════════════════════════════════════════════════ --}}
    <div class="fc-cfg-summary-col">
      <div class="fc-cfg-summary">
        <h2 class="fc-cfg-summary-title">Ваш сервер</h2>

        {{-- Dynamic lines --}}
        <div class="fc-cfg-summary-lines">
          <template x-for="line in summaryLines" :key="line.l">
            <div class="fc-cfg-summary-line">
              <span x-text="line.l"></span>
              <span x-text="line.r"></span>
            </div>
          </template>
        </div>

        <div class="fc-cfg-summary-div"></div>

        {{-- Per month --}}
        <div class="fc-cfg-summary-permonth">
          <span>Цена в месяц</span>
          <span x-text="fmt(perMonth)"></span>
        </div>

        {{-- Total --}}
        <div class="fc-cfg-summary-total">
          <span>К оплате сегодня</span>
          <span x-text="fmt(displayTotal)">{{ $total }}</span>
        </div>
        <div class="fc-cfg-summary-period" x-text="periodNote"></div>

        @if ($total->total_tax > 0)
        <div style="margin-top:10px;font-size:12px;color:var(--fc-text3);display:flex;justify-content:space-between;">
          <span>{{ \App\Classes\Settings::tax()->name }} ({{ \App\Classes\Settings::tax()->rate }}%)</span>
          <span>{{ $total->formatted->total_tax }}</span>
        </div>
        @endif

        @if (($product->stock > 0 || !$product->stock) && $product->price()->available)
        <button wire:click="checkout" wire:loading.attr="disabled" class="fc-cfg-checkout-btn">
          <span wire:loading wire:target="checkout">...</span>
          <span wire:loading.remove wire:target="checkout">{{ $cartProductKey ? 'Сохранить изменения →' : 'Добавить в корзину →' }}</span>
        </button>
        @if($_hostnameOpt)
        @error('configOptions.' . $_hostnameOpt->id)
        <p class="fc-cfg-field-error" style="text-align:center;margin-top:8px;">Укажите название сервера</p>
        @enderror
        @endif
        @endif

        <div class="fc-cfg-summary-trust">Активация ~55&nbsp;секунд после оплаты</div>
      </div>
    </div>{{-- /summary --}}

  </div>{{-- /fc-cfg-layout --}}
</div>{{-- /fc-mkt-wrap --}}
</div>{{-- /fc-page --}}
<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
