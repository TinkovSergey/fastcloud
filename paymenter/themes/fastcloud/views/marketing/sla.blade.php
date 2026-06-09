{{-- ═══ SLA PAGE ════════════════════════════════════════════════════════ --}}
<div>
<div class="fc-mkt-wrap">

{{-- ── Hero ────────────────────────────────────────────────────────────── --}}
<div class="fc-mkt-hero">
  <div>
    <div class="fc-mkt-hero-eyebrow">FastCloud · legal</div>
    <h1 class="fc-mkt-hero-title">SLA <em>99,99%.</em></h1>
  </div>
  <p class="fc-mkt-hero-sub">Соглашение об уровне обслуживания. Фиксированные компенсации. Без бюрократии. Редакция от 1 января 2025&nbsp;г.</p>
</div>

{{-- ── Metrics cards ────────────────────────────────────────────────────── --}}
<div class="fc-feat-grid" style="margin-top:0;margin-bottom:40px;">
  <div class="fc-feat-card">
    <div class="fc-feat-title" style="font-size:28px;font-weight:800;color:var(--fc-lime);">99,99%</div>
    <div class="fc-feat-desc">Гарантированный аптайм сети и гипервизора</div>
  </div>
  <div class="fc-feat-card">
    <div class="fc-feat-title" style="font-size:28px;font-weight:800;color:var(--fc-lime);">&lt;&nbsp;15 мин</div>
    <div class="fc-feat-desc">Время реакции на критические инциденты</div>
  </div>
  <div class="fc-feat-card">
    <div class="fc-feat-title" style="font-size:28px;font-weight:800;color:var(--fc-lime);">10×</div>
    <div class="fc-feat-desc">Компенсация временем за каждый час сверх допустимого даунтайма</div>
  </div>
  <div class="fc-feat-card">
    <div class="fc-feat-title" style="font-size:28px;font-weight:800;color:var(--fc-lime);">24/7</div>
    <div class="fc-feat-desc">Поддержка без перерывов и выходных</div>
  </div>
</div>

{{-- ── Content ─────────────────────────────────────────────────────────── --}}
<div class="fc-legal-body">

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">1. Область применения</h2>
    <p>1.1. Настоящее соглашение об уровне обслуживания (SLA) распространяется на все услуги VPS/VDS, оказываемые FastCloud OÜ, и является неотъемлемой частью Договора-оферты.</p>
    <p>1.2. SLA не распространяется на: плановые технические работы (с уведомлением за 24 ч); инциденты, вызванные действиями Заказчика; форс-мажор; недоступность сторонних сервисов за пределами инфраструктуры FastCloud.</p>
  </div>

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">2. Определения</h2>
    <p><strong>Аптайм</strong> — процент времени в течение расчётного месяца, когда сервис доступен и функционирует в соответствии с параметрами тарифного плана.</p>
    <p><strong>Инцидент</strong> — незапланированный перерыв в работе сервиса продолжительностью более 5 минут, подтверждённый мониторинговой системой FastCloud.</p>
    <p><strong>Допустимый даунтайм</strong> — суммарное время недоступности в месяц, не влекущее компенсации: 4,38 часа (99,95%) или 52,6 минуты (99,99%).</p>
  </div>

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">3. Гарантии доступности</h2>
    <p>3.1. <strong>Сеть и гипервизор:</strong> 99,99% в месяц. Допустимый суммарный даунтайм — 52,6 минуты/месяц.</p>
    <p>3.2. <strong>Дисковая подсистема (NVMe):</strong> 99,95% в месяц.</p>
    <p>3.3. <strong>Публичная сеть (интернет-канал):</strong> 99,9% в месяц.</p>
    <p>3.4. Доступность рассчитывается по формуле: <code style="background:var(--fc-surface2);padding:2px 6px;border-radius:4px;font-family:var(--fc-mono);font-size:13px;">Аптайм = (720 − даунтайм_ч) / 720 × 100%</code> (для месяца 30 дней).</p>
  </div>

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">4. Компенсации</h2>
    <p>За каждый час недоступности сверх допустимого FastCloud зачисляет на баланс Заказчика кредиты в размере 10-кратной стоимости часа аренды сервера.</p>
    <div style="overflow-x:auto;margin:20px 0;">
      <table class="fc-legal-table">
        <thead>
          <tr><th>Аптайм за месяц</th><th>Компенсация</th></tr>
        </thead>
        <tbody>
          <tr><td>99,99% и выше</td><td>Нет</td></tr>
          <tr><td>99,9% — 99,99%</td><td>10% стоимости месяца</td></tr>
          <tr><td>99,0% — 99,9%</td><td>25% стоимости месяца</td></tr>
          <tr><td>95,0% — 99,0%</td><td>50% стоимости месяца</td></tr>
          <tr><td>Ниже 95,0%</td><td>100% стоимости месяца</td></tr>
        </tbody>
      </table>
    </div>
    <p>4.1. Компенсации выплачиваются в виде кредитов на баланс FastCloud и не могут быть переведены в денежную форму.</p>
    <p>4.2. Максимальный размер компенсации — 100% стоимости услуги за расчётный период.</p>
  </div>

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">5. Порядок получения компенсации</h2>
    <p>5.1. Для получения компенсации Заказчик создаёт тикет в панели управления в течение 7 дней после инцидента с указанием: ID сервера; временного диапазона недоступности; описания наблюдаемой проблемы.</p>
    <p>5.2. FastCloud рассматривает заявку в течение 5 рабочих дней. При подтверждении инцидента кредиты зачисляются автоматически.</p>
    <p>5.3. Инциденты, зафиксированные собственной мониторинговой системой FastCloud, компенсируются проактивно без подачи заявки.</p>
  </div>

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">6. Мониторинг и отчётность</h2>
    <p>6.1. Статус всех локаций и сервисов публикуется в реальном времени в Telegram-канале <a href="https://t.me/fastcloud_status" target="_blank" rel="noopener" style="color:var(--fc-accent);">@fastcloud_status</a>.</p>
    <p>6.2. История инцидентов доступна по адресу <strong>status.fastcloud.eu</strong>.</p>
    <p>6.3. Плановые технические работы анонсируются в канале статуса не менее чем за 24 часа.</p>
  </div>

  <div class="fc-legal-section">
    <h2 class="fc-legal-h2">7. Ответственность за данные</h2>
    <p>7.1. FastCloud выполняет ежедневное резервное копирование с хранением снапшотов 14 дней. Однако Заказчик несёт самостоятельную ответственность за критически важные данные и должен поддерживать собственные резервные копии.</p>
    <p>7.2. При потере данных по вине FastCloud компенсация ограничена стоимостью услуги за расчётный месяц.</p>
  </div>

</div>

</div>{{-- /fc-mkt-wrap --}}

{{-- ── CTA ─────────────────────────────────────────────────────────────── --}}
<section class="fc-cta">
  <canvas id="ctaFx" class="fc-cta-canvas"></canvas>
  <div class="fc-cta-inner">
    <h2 class="fc-cta-title">Готов <em>попробовать?</em></h2>
    <p class="fc-cta-sub">99,99% аптайм. Активация за 55&nbsp;секунд.</p>
    <div class="fc-cta-btns">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать аккаунт &rarr;</a>
      <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-ghost">Тарифы</a>
    </div>
  </div>
</section>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
</div>
