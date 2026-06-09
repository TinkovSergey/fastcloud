{{-- ═══ CONTACTS PAGE ══════════════════════════════════════════════════════ --}}
<div>
<div class="fc-mkt-wrap">

{{-- ── Hero ────────────────────────────────────────────────────────────── --}}
<div class="fc-mkt-hero">
  <div>
    <div class="fc-mkt-hero-eyebrow">FAQ · поддержка</div>
    <h1 class="fc-mkt-hero-title">Частые <em>вопросы.</em></h1>
  </div>
  <p class="fc-mkt-hero-sub">Не&nbsp;нашли ответ&nbsp;— поддержка 24/7 и&nbsp;продажи ниже, ответим быстрее, чем&nbsp;поднимется ваш&nbsp;сервер.</p>
</div>

{{-- ── FAQ ─────────────────────────────────────────────────────────────── --}}
<section class="fc-faq-section">
  <div class="fc-faq-list">

    <details class="fc-faq-item">
      <summary>Нужна ли верификация по&nbsp;паспорту?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Нет. Сервер активируется автоматически сразу после оплаты&nbsp;— без сканов документов, звонков и&nbsp;ручной модерации. От&nbsp;регистрации до&nbsp;SSH&nbsp;— около 55&nbsp;секунд.</div>
    </details>

    <details class="fc-faq-item">
      <summary>Какие способы оплаты вы&nbsp;принимаете?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Банковские карты (Visa / Mastercard), СБП, а&nbsp;также криптовалюта&nbsp;— USDT (TRC‑20&nbsp;/&nbsp;ERC‑20), BTC и&nbsp;ETH. Оплата криптой зачисляется на&nbsp;баланс автоматически после подтверждения сети.</div>
    </details>

    <details class="fc-faq-item">
      <summary>Цена не&nbsp;вырастет при&nbsp;продлении?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Нет. Цена, по&nbsp;которой вы&nbsp;заказали сервер, фиксируется на&nbsp;всю жизнь аккаунта. Никаких setup‑комиссий и&nbsp;скрытых платежей&nbsp;— сколько при&nbsp;старте, столько и&nbsp;при&nbsp;продлении.</div>
    </details>

    <details class="fc-faq-item">
      <summary>Можно ли&nbsp;поменять тариф после покупки?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Да, апгрейд и&nbsp;даунгрейд&nbsp;— в&nbsp;1&nbsp;клик из&nbsp;панели, без&nbsp;переустановки и&nbsp;смены IP. При&nbsp;апгрейде доплачивается только разница за&nbsp;оставшийся период.</div>
    </details>

    <details class="fc-faq-item">
      <summary>Что входит в&nbsp;тариф без&nbsp;доплат?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Anti‑DDoS на&nbsp;10&nbsp;Gbps, ежедневные бэкапы с&nbsp;хранением 14&nbsp;дней, NVMe&nbsp;Gen4, сеть 10&nbsp;Gbps и&nbsp;поддержка 24/7&nbsp;— всё включено в&nbsp;каждый тариф, начиная со&nbsp;Starter.</div>
    </details>

    <details class="fc-faq-item">
      <summary>Есть ли&nbsp;возврат средств?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Да. Если что‑то пошло не&nbsp;так в&nbsp;первые 7&nbsp;дней&nbsp;— вернём неиспользованный остаток на&nbsp;баланс или&nbsp;исходный способ оплаты. Удалить сервер можно в&nbsp;любой момент без&nbsp;штрафов.</div>
    </details>

    <details class="fc-faq-item">
      <summary>В&nbsp;какой локации лучше брать сервер?<span class="fc-faq-mark"></span></summary>
      <div class="fc-faq-body">Выбирайте регион, ближайший к&nbsp;вашей аудитории&nbsp;— это минимальная задержка. На&nbsp;странице <a href="{{ route('locations') }}" wire:navigate>Локации</a> есть пинг‑тесты из&nbsp;разных городов. Актуальную цену смотрите в&nbsp;<a href="{{ route('pricing') }}" wire:navigate>Тарифах</a>.</div>
    </details>

  </div>
</section>

{{-- ── Contact blocks ───────────────────────────────────────────────────── --}}
<div class="fc-contact-blocks">

  <div class="fc-contact-block">
    <div class="fc-contact-block-top">
      <span class="fc-contact-block-ico support">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
      </span>
      <span class="fc-contact-block-status">онлайн&nbsp;24/7</span>
    </div>
    <h3 class="fc-contact-block-title">Поддержка</h3>
    <p class="fc-contact-block-desc">Живые инженеры в&nbsp;чате, e‑mail и&nbsp;Telegram. Среднее время первого ответа&nbsp;— меньше&nbsp;5&nbsp;минут, даже ночью.</p>
    <div class="fc-contact-block-links">
      <a href="https://t.me/fastcloud_support" target="_blank" rel="noopener" class="fc-contact-block-link">Telegram: @fastcloud_support</a>
      <a href="mailto:support@fastcloud.eu" class="fc-contact-block-link">support@fastcloud.eu</a>
    </div>
    <a href="https://t.me/fastcloud_support" target="_blank" rel="noopener" class="fc-contact-block-cta">Написать в&nbsp;поддержку →</a>
  </div>

  <div class="fc-contact-block">
    <div class="fc-contact-block-top">
      <span class="fc-contact-block-ico sales">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg>
      </span>
      <span class="fc-contact-block-status">пн–пт&nbsp;10–19</span>
    </div>
    <h3 class="fc-contact-block-title">Продажи</h3>
    <p class="fc-contact-block-desc">Нестандартная конфигурация, bare‑metal, кластеры или&nbsp;большой объём? Подберём решение и&nbsp;посчитаем смету индивидуально.</p>
    <div class="fc-contact-block-links">
      <a href="mailto:sales@fastcloud.eu" class="fc-contact-block-link">sales@fastcloud.eu</a>
      <span class="fc-contact-block-link">Договор и&nbsp;закрывающие документы</span>
    </div>
    <a href="mailto:sales@fastcloud.eu" class="fc-contact-block-cta">Написать в&nbsp;продажи →</a>
  </div>

</div>

</div>{{-- /fc-mkt-wrap --}}

{{-- ── CTA ─────────────────────────────────────────────────────────────── --}}
<section class="fc-cta">
  <canvas id="ctaFx" class="fc-cta-canvas"></canvas>
  <div class="fc-cta-inner">
    <h2 class="fc-cta-title">Готов <em>попробовать?</em></h2>
    <p class="fc-cta-sub">Активация за 55&nbsp;секунд. Без верификации.</p>
    <div class="fc-cta-btns">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать аккаунт &rarr;</a>
    </div>
  </div>
</section>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
</div>
