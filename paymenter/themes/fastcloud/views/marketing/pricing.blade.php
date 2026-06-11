{{-- ═══ PRICING PAGE ═══════════════════════════════════════════════════════ --}}
<div>
<div class="fc-mkt-wrap">
<div x-data="{
  billing: 'monthly',
  loc: {{ Js::from($locationsList[0]['slug'] ?? 'france') }},
  locations: {{ Js::from($locationsList) }},
  allPlans: {{ Js::from($locationData) }},
  symbol: {{ Js::from($currencySymbol) }},
  symbolAfter: {{ Js::from($symbolAfter) }},
  periods: { monthly:1, quarterly:3, biannual:6, annual:12 },

  get plans() { return this.allPlans[this.loc] || []; },

  init() {
    let m = location.hash.match(/^#loc=([\w-]+)$/);
    if (m && this.allPlans[m[1]]) this.loc = m[1];
  },

  fmt(p) {
    let total = p.prices[this.billing] || 0;
    let months = this.periods[this.billing] || 1;
    let perMonth = Math.round(total / months);
    return this.symbolAfter
      ? perMonth.toLocaleString('ru-RU') + ' ' + this.symbol
      : this.symbol + ' ' + perMonth.toLocaleString('ru-RU');
  },

  saving(p) {
    if (this.billing === 'monthly') return '';
    let months = this.periods[this.billing] || 1;
    let monthly = p.prices.monthly || 0;
    let ppm = (p.prices[this.billing] || 0) / months;
    let savYear = Math.round((monthly - ppm) * 12);
    if (savYear <= 0) return '';
    return this.symbolAfter
      ? 'экономия ' + savYear.toLocaleString('ru-RU') + ' ' + this.symbol + ' / год'
      : 'экономия ' + this.symbol + ' ' + savYear.toLocaleString('ru-RU') + ' / год';
  },

  discount(period) {
    let p = this.plans[0];
    if (!p || !p.prices.monthly || !p.prices[period]) return '';
    let months = this.periods[period] || 1;
    let ppm = p.prices[period] / months;
    let disc = Math.round((1 - ppm / p.prices.monthly) * 100);
    return disc > 0 ? '−' + disc + '%' : '';
  }
}">

{{-- ── Hero ────────────────────────────────────────────────────────────── --}}
<div class="fc-mkt-hero">
  <div>
    <div class="fc-mkt-hero-eyebrow">FastCloud · pricing</div>
    <h1 class="fc-mkt-hero-title">Тарифы <em>без&nbsp;сюрпризов.</em></h1>
  </div>
  <p class="fc-mkt-hero-sub">Фиксированная цена · NVMe&nbsp;Gen4 · Anti&#8209;DDoS и&nbsp;бэкапы 14&nbsp;дней включены. Оплата вперёд за&nbsp;выбранный период.</p>
</div>

{{-- ── Pricing bar ─────────────────────────────────────────────────────── --}}
<div class="fc-pricing-bar">
  <div class="fc-pricing-bar-group">
    <span class="fc-pricing-bar-label">Локация</span>
    <div class="fc-loc-chips">
      <template x-for="item in locations" :key="item.slug">
        <button class="fc-loc-chip" :class="loc === item.slug ? 'on' : ''" @click="loc = item.slug" x-text="item.name"></button>
      </template>
    </div>
  </div>
  <div class="fc-pricing-bar-group">
    <span class="fc-pricing-bar-label">Период</span>
    <div class="fc-billing-toggle">
      <div class="fc-billing-toggle-btn" :class="billing==='monthly'?'on':''" @click="billing='monthly'">1&thinsp;мес</div>
      <div class="fc-billing-toggle-btn" :class="billing==='quarterly'?'on':''" @click="billing='quarterly'">3&thinsp;мес<span class="fc-billing-badge" x-text="discount('quarterly')"></span></div>
      <div class="fc-billing-toggle-btn" :class="billing==='biannual'?'on':''" @click="billing='biannual'">6&thinsp;мес<span class="fc-billing-badge" x-text="discount('biannual')"></span></div>
      <div class="fc-billing-toggle-btn" :class="billing==='annual'?'on':''" @click="billing='annual'">12&thinsp;мес<span class="fc-billing-badge" x-text="discount('annual')"></span></div>
    </div>
  </div>
</div>

{{-- ── Plan grid ───────────────────────────────────────────────────────── --}}
<div class="fc-mkt-section">
  <div class="fc-price-grid">

    <template x-for="p in plans" :key="p.slug">
      <div class="fc-plan-card" :class="p.featured ? 'featured' : ''">
        <div class="fc-plan-name" x-text="p.name"></div>
        <div class="fc-plan-price" x-text="fmt(p)"></div>
        <div class="fc-plan-savings" x-text="saving(p)">&nbsp;</div>
        <div class="fc-plan-stats">
          <div><span class="fc-plan-stat-val" x-text="p.cpu"></span><span class="fc-plan-stat-lbl">vCPU</span></div>
          <div><span class="fc-plan-stat-val" x-text="p.ram + ' GB'"></span><span class="fc-plan-stat-lbl">RAM</span></div>
          <div><span class="fc-plan-stat-val" x-text="p.nvme + ' GB'"></span><span class="fc-plan-stat-lbl">NVMe</span></div>
          <div><span class="fc-plan-stat-val" x-text="p.traffic"></span><span class="fc-plan-stat-lbl">трафик</span></div>
        </div>
        <div class="fc-plan-check">
          <span>Anti&#8209;DDoS&nbsp;10&nbsp;Gbps</span>
          <span>Бэкапы 14&nbsp;дней</span>
          <span>Поддержка 24/7</span>
        </div>
        <a :href="p.checkout_base + '?plan=' + (p.plan_ids[billing] || '')" wire:navigate class="fc-btn-ghost" style="margin-top:auto;text-align:center;">В корзину &rarr;</a>
      </div>
    </template>

    {{-- Выделенный/Enterprise custom --}}
    <div class="fc-plan-card fc-plan-card-dashed" style="display:flex;flex-direction:column;gap:16px;">
      <div class="fc-plan-name">Выделенный</div>
      <div style="font-size:28px;color:var(--fc-text3);margin-top:4px;">⌬</div>
      <div style="font-weight:700;font-size:18px;">Под заказ</div>
      <div style="font-size:13px;color:var(--fc-text2);line-height:1.55;">Нужно больше? Обсудим конфигурацию индивидуально — bare&#8209;metal, кластеры, ASN.</div>
      <a href="{{ route('contacts') }}" wire:navigate class="fc-btn-ghost" style="margin-top:auto;text-align:center;">Написать &rarr;</a>
    </div>

  </div>
</div>

{{-- ── Features carousel ──────────────────────────────────────────────── --}}
<div class="fc-feat-carousel" data-fc-feat-carousel>
  <div class="fc-feat-track">
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg></div>
      <div class="fc-feat-title">Фиксированная цена</div>
      <div class="fc-feat-desc">Цена не меняется. Никаких сюрпризов в счёте — платите ровно то, что видите.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg></div>
      <div class="fc-feat-title">Без верификации</div>
      <div class="fc-feat-desc">Регистрация по e&#8209;mail. Никаких паспортов, юр. лиц и долгих проверок.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
      <div class="fc-feat-title">Anti&#8209;DDoS включён</div>
      <div class="fc-feat-desc">Защита 10&nbsp;Гбит/с на всех тарифах без исключения. Не доплата — стандарт.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 3C7.03 3 3 5.24 3 8v8c0 2.76 4.03 5 9 5s9-2.24 9-5V8c0-2.76-4.03-5-9-5zm7 13c0 1.3-2.91 3-7 3s-7-1.7-7-3v-1.95C6.61 15.27 9.13 16 12 16s5.39-.73 7-1.95V16zm0-4.55C17.39 12.68 14.87 13.4 12 13.4S6.61 12.68 5 11.45V9.64C6.61 10.86 9.13 11.6 12 11.6s5.39-.74 7-1.96v1.81zM12 10C7.91 10 5 8.3 5 8s2.91-3 7-3 7 1.7 7 3-2.91 2-7 2z"/></svg></div>
      <div class="fc-feat-title">Бэкапы 14&nbsp;дней</div>
      <div class="fc-feat-desc">Ежедневные снапшоты хранятся две недели. Восстановление — в один клик.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 2.05v3.03c3.39.49 6 3.39 6 6.92 0 .9-.18 1.75-.48 2.54l2.6 1.53c.56-1.24.88-2.62.88-4.07 0-5.18-3.95-9.45-9-9.95zM12 19c-3.87 0-7-3.13-7-7 0-3.53 2.61-6.43 6-6.92V2.05c-5.06.5-9 4.76-9 9.95 0 5.52 4.47 10 9.99 10 3.31 0 6.24-1.61 8.06-4.09l-2.6-1.53C16.17 17.98 14.21 19 12 19z"/></svg></div>
      <div class="fc-feat-title">Гибкие периоды</div>
      <div class="fc-feat-desc">Оплата помесячно с выгодой до&nbsp;15% на&nbsp;длинных периодах. Апгрейд тарифа в&nbsp;1&nbsp;клик без&nbsp;переустановки.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9h-4v4h-2v-4H9V9h4V5h2v4h4v2z"/></svg></div>
      <div class="fc-feat-title">50+ приложений</div>
      <div class="fc-feat-desc">WordPress, Docker, n8n и десятки образов разворачиваются в один клик.</div>
    </div>
  </div>
  <div class="fc-feat-dots" data-fc-feat-dots></div>
</div>

</div>{{-- /x-data --}}
</div>{{-- /fc-mkt-wrap --}}

{{-- ── CTA ─────────────────────────────────────────────────────────────── --}}
<section class="fc-cta">
  <canvas id="ctaFx" class="fc-cta-canvas"></canvas>
  <div class="fc-cta-inner">
    <h2 class="fc-cta-title">Запускайся <em>за&nbsp;55&nbsp;секунд.</em></h2>
    <p class="fc-cta-sub">Активация мгновенная. Без верификации паспорта.</p>
    <div class="fc-cta-btns">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать аккаунт &rarr;</a>
    </div>
  </div>
</section>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
</div>
