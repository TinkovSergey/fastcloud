{{-- ═══ LOCATIONS PAGE ═══════════════════════════════════════════════════ --}}
@php
// $locations передаётся из App\Livewire\Marketing\Locations::getLocations()
// структура: ['region' => ['label' => '...', 'locations' => [...]]]
$_locCount = array_sum(array_map(fn($r) => count($r['locations']), $locations));
$_r2 = $_locCount % 100; $_d2 = $_locCount % 10;
$_locNoun = ($_r2 >= 11 && $_r2 <= 19) ? 'локаций'
    : (($_d2 == 1) ? 'локация' : (($_d2 >= 2 && $_d2 <= 4) ? 'локации' : 'локаций'));
@endphp
<div>
<div class="fc-mkt-wrap">

{{-- ── Hero ────────────────────────────────────────────────────────────── --}}
<div class="fc-mkt-hero">
  <div>
    <div class="fc-mkt-hero-eyebrow">FastCloud · network</div>
    <h1 class="fc-mkt-hero-title">{{ $_locCount }}&nbsp;{{ $_locNoun }}. <em>Одна&nbsp;сеть.</em></h1>
  </div>
  <div>
    <div style="margin-bottom:16px;"><span class="fc-chip-green">Все локации в норме</span></div>
    <p class="fc-mkt-hero-sub">NVMe&nbsp;Gen4 · сеть&nbsp;10&nbsp;Gbps · Anti&#8209;DDoS включён · один SLA во&nbsp;всех локациях.</p>
  </div>
</div>

@if($_locCount < 4)
{{-- Мало локаций — показываем все в одной сетке без разделения по регионам --}}
<div class="fc-dc-grid" style="margin-bottom:0;">
  @foreach($locations as $_regionKey => $_region)
    @foreach($_region['locations'] as $dc)
    @include('marketing._dc-card', $dc)
    @endforeach
  @endforeach
</div>
@else
@foreach($locations as $_regionKey => $_region)
<div class="fc-region-label">{{ $_region['label'] }}</div>
<div class="fc-dc-grid" style="{{ $loop->last ? 'margin-bottom:0;' : '' }}">
  @foreach($_region['locations'] as $dc)
  @include('marketing._dc-card', $dc)
  @endforeach
</div>
@endforeach
@endif

{{-- ── Features carousel ──────────────────────────────────────────────── --}}
<div class="fc-feat-carousel" data-fc-feat-carousel>
  <div class="fc-feat-track">
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg></div>
      <div class="fc-feat-title">Тарифы для каждой локации</div>
      <div class="fc-feat-desc">Выбирай локацию по географии&nbsp;— ближе к&nbsp;аудитории, меньше задержка.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.99 11L3 15l3.99 4v-3H14v-2H6.99v-3zM21 9l-3.99-4v3H10v2h7.01v3L21 9z"/></svg></div>
      <div class="fc-feat-title">Миграция между локациями</div>
      <div class="fc-feat-desc">Перенос сервера в другую локацию — через снапшот за несколько минут.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
      <div class="fc-feat-title">GDPR-совместимость</div>
      <div class="fc-feat-desc">Все локации в юрисдикции ЕС и по всему миру. Вы выбираете, где хранятся данные.</div>
    </div>
    <div class="fc-feat-item">
      <div class="fc-feat-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg></div>
      <div class="fc-feat-title">Peering в IX</div>
      <div class="fc-feat-desc">Прямые пиринги с крупнейшими интернет-биржами на каждом континенте.</div>
    </div>
  </div>
  <div class="fc-feat-dots" data-fc-feat-dots></div>
</div>

</div>{{-- /fc-mkt-wrap --}}

{{-- ── CTA ─────────────────────────────────────────────────────────────── --}}
<section class="fc-cta">
  <canvas id="ctaFx" class="fc-cta-canvas"></canvas>
  <div class="fc-cta-inner">
    <h2 class="fc-cta-title">Выбери локацию и <em>запускайся.</em></h2>
    <p class="fc-cta-sub">Активация за 55 секунд. Без верификации паспорта.</p>
    <div class="fc-cta-btns">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать аккаунт &rarr;</a>
      <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-ghost">Тарифы</a>
    </div>
  </div>
</section>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
</div>
