<div class="fc-mkt-wrap" style="padding-top: 90px; padding-bottom: 120px;">

  {{-- Breadcrumb --}}
  <nav class="fc-cfg-breadcrumb" aria-label="breadcrumb">
    <a href="{{ route('pricing') }}" wire:navigate>тарифы</a>
    <span class="fc-cfg-breadcrumb-sep">/</span>
    <span style="color: var(--fc-text2)">корзина</span>
  </nav>

  {{-- Hero --}}
  <div class="fc-mkt-hero" style="padding: 0 0 40px;">
    <div>
      <h1 class="fc-mkt-hero-title">Ваш <em>заказ.</em></h1>
    </div>
    <p class="fc-mkt-hero-sub">Проверьте конфигурацию серверов перед оформлением. Активация каждого — около 55&nbsp;секунд после оплаты.</p>
  </div>

  {{-- Layout --}}
  <div class="fc-cfg-layout">

    {{-- LEFT: cart items --}}
    <div class="fc-cart-col">

      @forelse(\App\Classes\Cart::items() as $item)
      @php
        $_catMeta = [];
        try {
          if ($item->product->category && $item->product->category->description) {
            $_catMeta = json_decode($item->product->category->description, true) ?? [];
          }
        } catch (\Exception $_e) {}
        $_locationTag = (!empty($_catMeta['flag']) && !empty($_catMeta['city']))
          ? ($_catMeta['flag'] . ' ' . $_catMeta['city'])
          : null;
        $_hostname = collect($item->config_options)
          ->first(fn($o) => in_array($o['option_type'] ?? '', ['text', 'number']) && !empty($o['value_name']));
        $_hostname = $_hostname ? $_hostname['value_name'] : null;
        $_osTags = collect($item->config_options)
          ->filter(fn($o) => ($o['option_type'] ?? '') === 'select' && !empty($o['value_name']))
          ->pluck('value_name');
        $_addonTags = collect($item->config_options)
          ->filter(fn($o) => ($o['option_type'] ?? '') === 'checkbox' && ($o['value_name'] ?? '') === 'Yes')
          ->pluck('option_name');
      @endphp

      <div class="fc-cart-item">
        <div class="fc-cart-item-head">
          <div>
            <div class="fc-cart-item-plan">{{ $item->product->name }}</div>
            <h3 class="fc-cart-item-name">{{ $_hostname ?? $item->product->name }}</h3>
          </div>
          <div class="fc-cart-item-price-col">
            @if($item->plan->name ?? null)
            <div class="fc-cart-item-period">{{ $item->plan->name }}</div>
            @endif
            <div class="fc-cart-item-price">{{ $item->price->format($item->price->total * $item->quantity) }}</div>
          </div>
        </div>

        @if($item->product->description)
        <div class="fc-cart-item-specs">{{ $item->product->description }}</div>
        @endif

        <div class="fc-cart-item-tags">
          @if(!empty($_catMeta['city']) && $item->product->category)
          <span class="fc-cart-tag" style="display:inline-flex;align-items:center;gap:5px;">
            <span style="width:6px;height:6px;border-radius:50%;background:var(--fc-lime);box-shadow:0 0 6px var(--fc-lime);flex-shrink:0;animation:fc-blink 1.6s infinite;"></span>
            {{ $_catMeta['city'] }}, {{ $item->product->category->name }}
          </span>
          @endif
          @foreach($_osTags as $_os)<span class="fc-cart-tag">{{ $_os }}</span>@endforeach
          @foreach($_addonTags as $_addon)<span class="fc-cart-tag">+ {{ $_addon }}</span>@endforeach
        </div>

        @if($item->product->allow_quantity === 'combined')
        <div class="fc-cart-item-qty">
          <button wire:click="updateQuantity({{ $item->id }}, {{ $item->quantity - 1 }})" class="fc-cart-qty-btn">−</button>
          <span class="fc-cart-qty-val">{{ $item->quantity }}</span>
          <button wire:click="updateQuantity({{ $item->id }}, {{ $item->quantity + 1 }})" class="fc-cart-qty-btn">+</button>
        </div>
        @endif

        <div class="fc-cart-item-actions">
          <a href="{{ route('products.checkout', [$item->product->category, $item->product, 'edit' => $item->id]) }}"
             wire:navigate
             class="fc-cart-action">Изменить</a>
          <button wire:click="removeProduct({{ $item->id }})"
                  wire:loading.attr="disabled"
                  class="fc-cart-action danger">
            <span wire:loading.remove wire:target="removeProduct({{ $item->id }})">Удалить</span>
            <span wire:loading wire:target="removeProduct({{ $item->id }})" style="opacity:.5">...</span>
          </button>
        </div>
      </div>

      @empty
      <div class="fc-cart-empty">
        <div class="fc-cart-empty-ico">🛒</div>
        <div class="fc-cart-empty-title">Корзина пуста</div>
        <p class="fc-cart-empty-desc">Выберите тариф, чтобы добавить сервер в заказ.</p>
        <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-lime" style="margin-top: 24px;">К тарифам →</a>
      </div>
      @endforelse

      @if(\App\Classes\Cart::items()->count() > 0)
      <a href="{{ route('pricing') }}" wire:navigate class="fc-cart-add-more">
        <span class="fc-cart-add-plus">+</span> Добавить ещё сервер
      </a>
      @endif

    </div>

    {{-- RIGHT: order summary --}}
    @if($total)
    <aside class="fc-cfg-summary-col">
      <div class="fc-cfg-summary">
        <h2 class="fc-cfg-summary-title">Состав заказа</h2>

        {{-- Coupon --}}
        @if(!$coupon)
        <div class="fc-cart-coupon-row">
          <input class="fc-cfg-inp fc-cart-coupon-inp"
                 wire:model="coupon"
                 type="text"
                 placeholder="Промокод"
                 autocomplete="off">
          <button wire:click="applyCoupon"
                  wire:loading.attr="disabled"
                  wire:target="applyCoupon"
                  class="fc-btn-ghost fc-btn-sm"
                  style="white-space: nowrap; flex-shrink: 0;">
            <span wire:loading.remove wire:target="applyCoupon">Применить</span>
            <span wire:loading wire:target="applyCoupon">...</span>
          </button>
        </div>
        @else
        <div class="fc-cart-coupon-applied">
          <span class="fc-cart-coupon-code">{{ $coupon->code }}</span>
          <button wire:click="removeCoupon" class="fc-cart-coupon-remove">Убрать</button>
        </div>
        @endif

        <div class="fc-cfg-summary-div"></div>

        <div class="fc-cfg-summary-lines">
          <div class="fc-cfg-summary-line">
            <span>Подытог</span>
            <span>{{ $total->format($total->subtotal) }}</span>
          </div>
          @if($total->tax > 0)
          <div class="fc-cfg-summary-line">
            <span>{{ \App\Classes\Settings::tax()->name }} ({{ \App\Classes\Settings::tax()->rate }}%)</span>
            <span>{{ $total->format($total->tax) }}</span>
          </div>
          @endif
        </div>

        <div class="fc-cfg-summary-total" style="margin-top: 16px;">
          <span>Итого</span>
          <span>{{ $total->format($total->total) }}</span>
        </div>
        <div class="fc-cfg-summary-period">единоразовый платёж за выбранные периоды</div>

        @if(config('settings.tos'))
        <div style="margin-top: 14px;">
          <label class="fc-auth-check">
            <input type="checkbox" wire:model="tos">
            <span>{{ __('product.tos') }}
              <a href="{{ config('settings.tos') }}" target="_blank">{{ __('product.tos_link') }}</a>
            </span>
          </label>
        </div>
        @endif

        <button wire:click="checkout"
                wire:loading.attr="disabled"
                wire:target="checkout"
                class="fc-cfg-checkout-btn">
          <span wire:loading.remove wire:target="checkout">Оформить заказ →</span>
          <span wire:loading wire:target="checkout">Обрабатываем...</span>
        </button>

        <div class="fc-cfg-summary-trust">Поддержка 24/7 · Без скрытых платежей</div>
      </div>
    </aside>
    @endif

  </div>

</div>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
