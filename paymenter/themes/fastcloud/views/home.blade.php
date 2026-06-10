<div class="fc-page">

@php
$_locCount = $categories->count();
// Russian plural: 1→локация, 2-4→локации, 5+→локаций
$_r = $_locCount % 100; $_d = $_locCount % 10;
$_locNoun = ($_r >= 11 && $_r <= 19) ? 'локаций'
    : (($_d == 1) ? 'локация' : (($_d >= 2 && $_d <= 4) ? 'локации' : 'локаций'));
$_locPrep = $_locCount == 1 ? 'локации' : 'локациях'; // prepositional: в N локациях
@endphp

{{-- ══ HERO ═══════════════════════════════════════════════════════════════ --}}
<section class="fc-hero">
  <canvas id="heroFx" class="fc-hero-canvas"></canvas>
  <div class="fc-hero-inner" style="position:relative;z-index:1">
    <div class="fc-eyebrow">
      <span class="fc-eyebrow-dot"></span>
      <span id="heroLiveText"><strong>fra1.fast-cloud.uk</strong> &middot; только что создан &middot; <em>«за&nbsp;53&nbsp;с, из Берлина»</em></span>
    </div>
    <h1 class="fc-hero-title">
      Поднимите сервер<br>за&nbsp;<span style="color:hsl(var(--color-primary))"><span id="heroNum">55</span></span> <em>секунд.</em>
    </h1>
    <p class="fc-hero-sub">
      Без верификации. Без скрытых платежей. NVMe&nbsp;Gen4, сеть&nbsp;10&nbsp;Gbps
      и&nbsp;Anti&#8209;DDoS в&nbsp;каждом тарифе &mdash; в&nbsp;{{ $_locCount }}&nbsp;{{ $_locPrep }} по&nbsp;миру.
    </p>
    <div class="fc-hero-ctas">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать сервер &rarr;</a>
      <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-ghost">Тарифы</a>
    </div>
    <div class="fc-meta">
      <div class="fc-meta-cell"><div class="fc-meta-val">99,99%</div><div class="fc-meta-lbl">SLA</div></div>
      <div class="fc-meta-div"></div>
      <div class="fc-meta-cell"><div class="fc-meta-val">10&nbsp;Gbps</div><div class="fc-meta-lbl">Anti&#8209;DDoS</div></div>
      <div class="fc-meta-div"></div>
      <div class="fc-meta-cell"><div class="fc-meta-val">{{ $_locCount }}</div><div class="fc-meta-lbl">Локаций</div></div>
      <div class="fc-meta-div"></div>
      <div class="fc-meta-cell"><div class="fc-meta-val">24/7</div><div class="fc-meta-lbl">Поддержка</div></div>
    </div>
  </div>
</section>

{{-- ══ MANIFEST ════════════════════════════════════════════════════════════ --}}
<section class="fc-manifest">
  <div class="fc-manifest-inner">
    <p class="fc-manifest-text reveal">
      Пока другие проверяют ваш паспорт, <em>сверяют почту</em>
      и звонят в банк &mdash; у вас уже работает
      <span class="hi">боевой сервер</span>
      <span class="accent">с&nbsp;Anti&#8209;DDoS&nbsp;на&nbsp;10&nbsp;Gbps</span>
      и ежедневным бэкапом.
    </p>
    <div class="fc-manifest-foot reveal d-1">
      <span>FastCloud &middot; 2026</span>
      <span class="c-dim">/</span>
      <span class="c-accent">скорость как продукт</span>
    </div>
  </div>
</section>

{{-- ══ STORY 01 — Speed ════════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">01</span> &nbsp;/&nbsp; скорость</div>
      <div class="fc-story-tag reveal d-1">мгновенный старт</div>
      <h2 class="fc-story-title reveal d-2">55&nbsp;секунд <em>до&nbsp;готового</em> сервера.</h2>
      <p class="fc-story-desc reveal d-3">Большинство провайдеров держит на ручной верификации часами. FastCloud активирует сервер автоматически сразу после оплаты &mdash; без документов, без ожиданий.</p>
      <ul class="fc-story-list reveal d-4">
        <li>Никаких паспортов и звонков в поддержку</li>
        <li>Мгновенная активация &mdash; REST&nbsp;API и&nbsp;Terraform</li>
        <li>Snapshot&#8209;образы Ubuntu, Debian, Alma, Arch, Windows</li>
      </ul>
    </div>
    <div class="fc-story-visual reveal d-2">
      <div class="fc-dc" id="deployCard">
        <div class="fc-dc-head">
          <div class="fc-dc-spinner" id="deploySpinner"></div>
          <div>
            <div class="fc-dc-title">Создаём ваш сервер</div>
            <div class="fc-dc-sub">fra1 &middot; Ubuntu 24.04 &middot; NVMe PRO</div>
          </div>
        </div>
        <div class="fc-dc-bar-wrap"><div class="fc-dc-bar" id="deployBar"></div></div>
        <div class="fc-dc-pct" id="deployPct">0%</div>
        <div class="fc-dc-list">
          <div class="fc-dc-row"><span class="fc-dc-ico">&#9675;</span><span>Списание с баланса</span></div>
          <div class="fc-dc-row"><span class="fc-dc-ico">&#9675;</span><span>Provisioning NVMe</span></div>
          <div class="fc-dc-row"><span class="fc-dc-ico">&#9675;</span><span>Установка Ubuntu 24.04</span></div>
          <div class="fc-dc-row"><span class="fc-dc-ico">&#9675;</span><span>Назначение IP &amp;&nbsp;SSH&#8209;ключей</span></div>
          <div class="fc-dc-row"><span class="fc-dc-ico">&#9675;</span><span>SSH готов</span></div>
        </div>
        <div class="fc-deploy-total" id="deployTotal" style="opacity:0">
          <span class="fc-deploy-total-val">55 секунд</span>
          <span class="fc-deploy-total-lbl">от оплаты до SSH</span>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 02 — Anti-DDoS ════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner flip">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">02</span> &nbsp;/&nbsp; защита</div>
      <div class="fc-story-tag reveal d-1">anti&#8209;ddos &middot; 10 gbps</div>
      <h2 class="fc-story-title reveal d-2">Атаки отбиты <em>до&nbsp;того,</em><br>как доходят до вас.</h2>
      <p class="fc-story-desc reveal d-3">Фильтрация работает на уровнях L3, L4 и L7 &mdash; атаки блокируются ещё до того, как достигают вашего сервера. Входит в каждый тариф без доплат.</p>
      <ul class="fc-story-list reveal d-4">
        <li>UDP Flood, SYN Flood, HTTP DDoS, Amplification</li>
        <li>Фильтрация не влияет на latency</li>
        <li>Включено во все тарифы, без скрытых платежей</li>
      </ul>
    </div>
    <div class="fc-story-visual reveal d-2">
      <div class="fc-shield-viz">
        <div class="fc-shield-orb">
          <div class="fc-shield-ring r3"></div>
          <div class="fc-shield-ring r2"></div>
          <div class="fc-shield-ring r1"></div>
          <div class="fc-shield-attack a1">UDP&nbsp;Flood</div>
          <div class="fc-shield-attack a2">SYN&nbsp;Flood</div>
          <div class="fc-shield-attack a3">HTTP&nbsp;DDoS</div>
          <div class="fc-shield-attack a4">Amplification</div>
          <div class="fc-shield-core">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 2L4 6v6c0 5.2 3.5 10.1 8 11.3c4.5-1.2 8-6.1 8-11.3V6l-8-4z" stroke="currentColor" stroke-width="1.6" fill="rgba(32,181,235,.08)"/>
              <path d="M9 12l2.2 2.2L15.6 9.6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="fc-shield-stats">
          <div class="fc-shield-stat"><div class="fc-shield-stat-val accent">99,8%</div><div class="fc-shield-stat-lbl">атак отфильтровано</div></div>
          <div class="fc-shield-stat"><div class="fc-shield-stat-val">10&nbsp;Gbps</div><div class="fc-shield-stat-lbl">пропускная способность</div></div>
          <div class="fc-shield-stat"><div class="fc-shield-stat-val">&lt;&nbsp;1&nbsp;ms</div><div class="fc-shield-stat-lbl">оверхед фильтрации</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 03 — Pricing ══════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">03</span> &nbsp;/&nbsp; ценообразование</div>
      <div class="fc-story-tag reveal d-1">честные цены</div>
      <h2 class="fc-story-title reveal d-2">Цена при старте&nbsp;= <em>цена</em> при продлении.</h2>
      <p class="fc-story-desc reveal d-3">Многие провайдеры привлекают низкой ценой при первом платеже, а при продлении выставляют сумму в 2&mdash;3 раза выше. FastCloud не поднимает цену при продлении.</p>
      <ul class="fc-story-list reveal d-4">
        <li>Цена при продлении равна стартовой</li>
        <li>Нет скрытых комиссий и setup&#8209;платежей</li>
        <li>Удаление в 1 клик без штрафов и привязок</li>
      </ul>
    </div>
    <div class="fc-story-visual reveal d-2">
      <div class="fc-incl-list">
        <div class="fc-incl-head">Что входит в каждый тариф</div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">NVMe Gen4 &middot; 7&nbsp;000&nbsp;MB/s</div><div class="fc-incl-sub">высокопроизводительное хранилище</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Anti-DDoS L3&nbsp;/&nbsp;L4&nbsp;/&nbsp;L7</div><div class="fc-incl-sub">без доплаты, во всех тарифах</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Бэкапы &middot; 14&nbsp;дней</div><div class="fc-incl-sub">автоматические снапшоты каждую ночь</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Поддержка 24/7</div><div class="fc-incl-sub">живые инженеры, без ботов</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Цена при продлении = цена при старте</div><div class="fc-incl-sub">без setup fee и скрытых платежей</div></div></div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 04 — Backups ══════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner flip">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">04</span> &nbsp;/&nbsp; бэкапы</div>
      <div class="fc-story-tag reveal d-1">14 снапшотов</div>
      <h2 class="fc-story-title reveal d-2">Ежедневные бэкапы.<br><em>В&nbsp;каждом</em> тарифе.</h2>
      <p class="fc-story-desc reveal d-3">Каждую ночь FastCloud автоматически создаёт полный snapshot вашего сервера. 14 дней хранения &mdash; в каждом тарифе, без доплат.</p>
      <ul class="fc-story-list reveal d-4">
        <li>Автоматический snapshot каждую ночь в 03:00</li>
        <li>Хранение &mdash; 14 дней, доступно для всех тарифов</li>
        <li>Восстановление в 1 клик без потери IP</li>
      </ul>
    </div>
    <div class="fc-story-visual reveal d-2">
      <div class="fc-bkp">
        <div class="fc-bkp-row"><div class="fc-bkp-dot"></div><div class="fc-bkp-date">Сегодня, 03:00</div><div class="fc-bkp-size">2,4&nbsp;ГБ</div><div class="fc-bkp-tick">&#10003;</div></div>
        <div class="fc-bkp-row"><div class="fc-bkp-dot"></div><div class="fc-bkp-date">Вчера, 03:00</div><div class="fc-bkp-size">2,3&nbsp;ГБ</div><div class="fc-bkp-tick">&#10003;</div></div>
        <div class="fc-bkp-row"><div class="fc-bkp-dot"></div><div class="fc-bkp-date">23 мая, 03:00</div><div class="fc-bkp-size">2,3&nbsp;ГБ</div><div class="fc-bkp-tick">&#10003;</div></div>
        <div class="fc-bkp-row"><div class="fc-bkp-dot"></div><div class="fc-bkp-date">22 мая, 03:00</div><div class="fc-bkp-size">2,2&nbsp;ГБ</div><div class="fc-bkp-tick">&#10003;</div></div>
        <div class="fc-bkp-row dim"><div class="fc-bkp-dot dim"></div><div class="fc-bkp-date dim">21 мая, 03:00</div><div class="fc-bkp-size">2,2&nbsp;ГБ</div><div class="fc-bkp-tick">&#10003;</div></div>
        <div class="fc-bkp-row ghost"><div class="fc-bkp-dot dim"></div><div class="fc-bkp-date dim">+&nbsp;ещё 9 снапшотов</div></div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 05 — Locations ════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">05</span> &nbsp;/&nbsp; локации</div>
      <div class="fc-story-tag reveal d-1">{{ $_locCount }} {{ $_locNoun }} по миру</div>
      <h2 class="fc-story-title reveal d-2">{{ $_locCount }}&nbsp;{{ $_locNoun }}. <em>Один</em> SLA.</h2>
      <p class="fc-story-desc reveal d-3">Выбирайте регион с минимальной задержкой для вашей аудитории &mdash; Европа, Северная Америка и Азия. Одинаковые тарифы и SLA во всех локациях.</p>
      <ul class="fc-story-list reveal d-4">
        <li>Низкий пинг для аудитории в любой точке мира</li>
        <li>Одинаковые цены и условия во всех регионах</li>
        <li>Миграция между локациями через снапшот</li>
      </ul>
    </div>
    <div class="fc-story-visual fc-map-visual reveal d-2">
      <span class="fc-hud-corner fc-hud-tl"></span>
      <span class="fc-hud-corner fc-hud-tr"></span>
      <span class="fc-hud-corner fc-hud-bl"></span>
      <span class="fc-hud-corner fc-hud-br"></span>
      <div class="fc-map-hud">
        <span class="fc-map-hud-dot"></span>
        <span style="color:var(--fc-lime);font-weight:700;">LIVE</span>
        <span style="color:var(--fc-text-dim);">&middot;</span>
        <span style="color:var(--fc-text);font-weight:600;">{{ $_locCount }}&nbsp;dc</span>
        <span style="color:var(--fc-text-dim);">&middot;</span>
        <span style="color:var(--fc-text);font-weight:600;">1.24&nbsp;Tbps</span>
      </div>
        <svg class="fc-map-svg" viewBox="0 8 125.762 63" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <filter id="fcglow" x="-100%" y="-100%" width="300%" height="300%">
              <feGaussianBlur stdDeviation="1.2" result="b"/>
              <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
            </filter>
            <path id="arc-na-eu" d="M 24 27 Q 40 9 57 21" fill="none"/>
            <path id="arc-eu-in" d="M 57 21 Q 73 17 86 38" fill="none"/>
            <path id="arc-eu-sg" d="M 57 21 Q 84 11 101 44" fill="none"/>
            <path id="arc-in-sg" d="M 86 38 Q 94 39 101 44" fill="none"/>
            <path id="arc-sg-au" d="M 101 44 Q 114 49 117 60" fill="none"/>
            <path id="arc-na-sa" d="M 24 27 Q 25 41 36 53" fill="none"/>
            <path id="arc-eu-sa" d="M 57 21 Q 43 39 36 53" fill="none"/>
            <path id="arc-eu-af" d="M 57 21 Q 58 36 62 48" fill="none"/>
            <path id="arc-af-in" d="M 62 48 Q 74 44 86 38" fill="none"/>
            <path id="arc-in-ea" d="M 86 38 Q 98 28 106 30" fill="none"/>
            <path id="arc-ea-sg" d="M 106 30 Q 107 38 101 44" fill="none"/>
          </defs>
          <style>
            .arc { fill:none; stroke:rgba(196,255,61,.7); stroke-width:.38; stroke-dasharray:1.8 2; stroke-linecap:round; animation:arcFlow 6s linear infinite; }
            .arc.a2 { animation-duration:7s; animation-delay:-1.5s; opacity:.8; }
            .arc.a3 { animation-duration:8s; animation-delay:-3s; opacity:.7; }
            .arc.a4 { animation-duration:5.5s; animation-delay:-2.2s; opacity:.85; }
            .arc.a5 { animation-duration:6.5s; animation-delay:-4s; opacity:.7; }
            .arc.a6 { animation-duration:5s; animation-delay:-1s; opacity:.75; }
            .arc.a7 { animation-duration:7.5s; animation-delay:-3.4s; opacity:.75; }
            @keyframes arcFlow { to { stroke-dashoffset:-36; } }
            .hub-dot { fill:#c4ff3d; }
            .sat-dot  { fill:#c4ff3d; opacity:.32; }
            .sat-link { stroke:rgba(196,255,61,.20); stroke-width:.16; }
            .pkt-map  { fill:#c4ff3d; filter:url(#fcglow); }
          </style>
          <polygon class="land" points="52.688,20.209 52.762,20.738 51.982,20.898 51.867,22.017 52.822,22.017 54.081,21.9 54.732,21.127 54.035,20.856 53.653,20.423 53.08,19.513 52.822,18.202 51.748,18.421 51.449,18.882 51.449,19.393 51.962,19.756"/>
          <polygon class="land" points="51.787,20.641 51.838,19.937 51.221,19.67 50.34,19.868 49.689,20.908 49.689,21.589 50.45,21.589"/>
          <path class="land" d="M33.574,24.122h-0.929v0.485h0.223c0,0,0.016,0.1,0.03,0.234l0.578-0.052l0.343-0.214l0.104-0.452l0.457-0.035l0.184-0.382l-0.428-0.092l-0.362,0.01L33.574,24.122z"/>
          <polygon class="land" points="31.327,24.971 32.012,24.914 32.068,24.441 31.66,24.122 31.366,24.504"/>
          <polygon class="land" points="102.764,47.568 100.77,47.628 100.691,46.543 101.014,46.683 101.795,46.592 101.715,45.598 99.548,45.624 98.961,44.842 98.988,44.424 96.205,41.918 95.508,42.46 99.502,47.33 100.064,47.518 100.064,47.781 99.312,47.781 99.502,48.388 104.391,48.602"/>
          <polygon class="land" points="106.244,42.136 105.906,41.998 105.748,41.161 105.256,41.161 104.943,42.002 104.57,42.336 101.74,43.877 101.74,45.395 102.681,46.643 105.062,46.643 105.371,45.867 105.906,45.379 105.906,45.022 106.244,44.808"/>
          <polygon class="land" points="108.006,44.808 106.574,45.36 106.604,45.678 106.244,45.678 106.244,47.657 106.967,47.657 106.867,46.395 107.43,46.604 107.43,47.488 108.025,47.448"/>
          <polygon class="land" points="120.057,56.79 119.664,55.192 118.208,53.943 118.092,51.562 117.138,49.916 116.273,49.87 115.915,52.859 114.273,52.74 113.796,52.457 113.751,51.278 114.615,51.458 115.357,50.736 113.781,49.786 111.941,49.786 110.613,51.676 110.08,51.676 110.08,51.08 108.479,51.193 105.966,54.053 104.63,54.083 103.143,55.097 103.048,59.544 102.143,60.409 102.143,61.19 106.48,59.703 109.98,59.563 111.279,62.423 115.264,62.558 119.104,58.947"/>
          <polygon class="land" points="111.806,64.626 113.214,64.772 114.348,64.149 114.378,63.289 113.129,63.155"/>
          <polygon class="land" points="125.359,60.722 124.773,60.837 124.756,59.514 123.677,59.583 123.533,61.653 122.589,62.299 120.833,62.538 118.018,64.542 117.546,64.935 117.546,65.601 119.007,65.382 122.585,63.194 123.588,62.528 124.667,62.05 125.762,61.434"/>
          <polygon class="land" points="114.293,45.946 113.383,45.976 113.458,45.026 112.588,44.514 111.363,45.748 112.189,46.762 113.975,47.021 114.969,47.543 114.999,48.03 114.343,48.03 114.378,49.034 116.535,48.896 117.32,48.055 118.172,47.976 118.172,49.518 119.629,49.518 119.629,48.896 118.887,48.896 118.764,47.021 115.264,45.433"/>
          <polygon class="land" points="88.322,41.456 88.665,42.376 89.895,41.918 90.018,40.646 89.038,40.457"/>
          <polygon class="land" points="73.869,52.173 72.193,51.955 72.193,53.257 72.795,53.953 72.337,54.659 71.656,55.441 71.656,56.878 72.586,57.773 73.422,56.425 75.068,54.013 75.854,50.223 74.854,50.223"/>
          <polygon class="land" points="108.363,48.174 107.807,48.174 107.807,48.468 108.234,48.602"/>
          <rect class="land" x="105.256" y="48.602" width="0.657" height="0.358"/>
          <polygon class="land" points="106.843,48.96 107.246,48.96 107.246,48.646 107.545,48.602 107.545,48.294 106.896,48.294 106.629,48.602 106.244,48.96 106.244,49.273 106.843,49.218"/>
          <polygon class="land" points="108.509,49.25 109.16,49.25 109.16,48.911 109.609,48.96 109.549,48.388 108.812,48.503 108.742,48.872 107.918,48.96 107.877,48.96 107.877,49.527 108.509,49.527"/>
          <path class="land" d="M96.701,41.202l3.854,3.7l0.204-0.657l-3.133-4.456l0.329-1.303l1.651,1.875l0.92,0.094l1.213-0.806l-0.199-1.214l-2.01-1.608l-0.078-1.462l0.57-0.769l1.006,0.321l-0.075,0.687l0.577,0.892l0.513-0.368l-0.284-1.054l2.84-1.018l1.244-1.039l-0.193-1.88l-2.467-2.596l-0.046-2.114h1.095l3.412,2.596l0.965-0.253l-0.646-0.836l-1.824-1.111l0.114-1.654l2.164,0.005l0.175-2.047l-0.826-1.079l0.492-0.532l1.049,1.059l0.344-0.448l-1.367-1.541l-3.344-0.403l-0.447-0.895l0.97-1.383l0.767,0.576l2.316,0.2l2.915-1.947l0.487,0.606l-0.651,1.019v1.007l2.681,2.191l0.85-0.443l-0.317-1.462l-1.91-1.783l2.517-0.169v-0.726l1.209-0.246l-0.926-0.642l0.035-0.493L118,16.004l0.488-0.411l-3.457-1.457l-12.572-0.646l-1.17-0.597l-1.875-0.286l-1.396-0.045l-1.277,1.289l-0.533-0.041l-1.696-1.258h-4.993l-2.312-1.384l-4.635,0.291l-3.513,1.584l0.021,1.822l-1.088,0.327l-0.244-1.829l-0.409-0.631l-1.209-0.302l-0.283,1.095l0.354,0.898l-4.328-0.286l-2.059,0.952l-0.313-0.902l-0.522,0.134l-0.378,1.002l-1.079,0.846l-2.636-0.072l-0.124-0.584l2.766-0.117l0.562-0.485l-3.327-1.547l-4.054,0.122l-2.269,1.161l-0.856,1.524l-1.512,0.586l-0.631,0.692l0.145,0.8l0.78,0.107l0.472,1.171l1.323-0.54l0.234,1.562h-0.418l-1.088-0.162l-1.214,0.204l-1.174,1.659l-1.691,0.271l-0.238,1.438l0.717,0.167l-0.205,0.928L51.4,24.723l-1.531,0.331l-0.32,0.855l0.26,1.793l0.909,0.422l1.502-0.005l1.025-0.097l0.314-0.815l1.59-2.062l1.05,0.213l1.03-0.933l0.193,0.729l2.538,1.716l-0.314,0.417l-1.144-0.067l0.433,0.626l0.711,0.155l0.825-0.343l-0.014-0.997l0.373-0.185l-0.304-0.315l-1.696-0.943l-0.437-1.261h1.402l0.448,0.443l1.219,1.05l0.043,1.268l1.263,1.338l0.468-1.833l0.871-0.48l0.162,1.502l0.852,0.937l2.564-0.039l0.762,0.564v1.346l-0.936,0.85H64.91l-1.581-1.182l-1.661,0.167v1.014h-0.533l-0.566-0.408l-2.88-0.734v-1.863l-3.66,0.284l-1.135,0.607h-1.442l-0.715-0.071l-1.76,0.979v1.837l-3.601,2.604l0.303,1.104h0.726l-0.184,1.055l-0.512,0.194l-0.03,2.76l3.104,3.541h1.353l0.094-0.218h2.426l0.708-0.646h1.377l0.761,0.76l2.055,0.209l-0.269,2.741l2.282,4.033l-1.204,2.298l0.085,1.079l0.955,0.945v2.606l1.238,1.671v2.168h3.68l2.765-2.835l0.866-1.546l1.109-0.244V54.52l0.729-0.866l1.538-2.119l-0.32-3.213l-0.676-1.193l3.035-2.904l3.337-4.78l-0.638-0.303l-3.477,0.731l-0.9-0.443l-3.649-6.883l0.253-0.299l3.626,4.395l0.089,1.359l0.826,0.841l1.721-0.109l3.545-2.576l1.125-0.727l-0.019-0.898l-1.188-0.146c0,0-4.174-1.968-4.174-2.055s0.025-1.686,0.025-1.686h0.925l0.134,1.164l1.93,1.114l2.213,0.106l4.781,0.784l1.127,0.709v1.094l-0.145,1.494l2.463,4.034l0.78,0.184l0.796-1.149l0.434-3.267l0.82-1.759l1.316-0.494l2.322,0.224l2.93,2.599v3.72H96.701z"/>
          <path class="land" d="M40.224,45.842l-2.869-0.025l-2.274-0.865l-0.109-1.621l-0.76-1.329l-2.044-0.024l-1.194-1.871L29.919,39.6l-0.054,0.558l-1.92,0.119l-0.706-0.979L25.23,38.89l-1.652,1.905l-2.59-0.438l-0.189-2.929l-1.9-0.326l0.762-1.43l-0.22-0.826l-2.481,1.667l-1.567-0.189l-0.567-1.229l0.349-1.268l0.865-1.587l1.984-1.01h3.845l-0.01,1.171l1.383,0.637l-0.114-2.002l0.995-0.997l2.009-1.32l0.128-0.926l2.011-2.084l2.133-1.176l-0.191-0.151l1.437-1.361l0.533,0.137l0.244,0.306l0.546-0.611l0.125-0.063l-0.591-0.08L31.9,22.507v-0.593l0.318-0.263h0.716l0.329,0.142l0.278,0.564l0.343-0.05v-0.034l0.104,0.029l0.995-0.159l0.138-0.487l0.557,0.142v0.525l-0.521,0.368l0.079,0.584l1.811,0.555l0.413-0.035l0.03-0.779l-1.432-0.651l-0.085-0.383l1.189-0.408l0.049-1.131l-1.239-0.759l-0.08-1.914l-1.715,0.836h-0.621l0.163-1.46l-2.308-0.552l-0.964,0.723v2.221l-1.727,0.54l-0.696,1.447l-0.746,0.117v-1.845l-1.622-0.229l-0.81-0.524l-0.329-1.191l2.903-1.701l1.418-0.433l0.139,0.953l0.796-0.04l0.064-0.48l0.826-0.117l0.009-0.162l-0.348-0.154l-0.085-0.504l1.015-0.088l0.612-0.641l0.044-0.045l0.184-0.194l2.149-0.269l0.939,0.803l-2.486,1.321l3.158,0.743l0.404-1.06h1.387l0.481-0.917l-0.968-0.245v-1.161l-3.059-1.355L32,12.376l-1.199,0.622l0.09,1.518l-1.24-0.194l-0.189-0.835l1.18-1.084l-2.154-0.107l-0.628,0.182l-0.274,0.733l0.817,0.14l-0.165,0.813l-1.377,0.083l-0.214,0.534l-2.014,0.057l1.567-0.024l1.193-1.167l-0.651-0.329l-0.865,0.845l-1.438-0.079l-0.86-1.193h-1.841l-1.923,1.437h1.76l0.163,0.514l-0.462,0.433l1.95,0.058l0.298,0.701l-2.193-0.088l-0.109-0.539L19.72,13.97l-0.731-0.4L15.74,13.6l-0.999,0.972l-0.681-0.058l-0.757-0.438l-2.243-0.672H6.947l-2.378,1.619l-1.597,0.247l-0.73,0.569l1.134,0.167v0.455H0.949L0,17.137l1.212,1.03l3.327,0.029l0.463-0.495h2.78l1.004,0.893l-0.06,1.385l0.847,0.783l-0.706,0.505l0.159,1.822l-2.511,3.057v2.867l1.347,0.652v2.573l1.31,2.213l1.043,0.159l0.135-0.758l-1.233-1.915l-0.244-1.865h0.731l0.313,1.92l1.8,2.623l-0.482,0.846l1.153,1.751l2.846,0.704v-0.458l1.133,0.156l-0.104,0.816l0.89,0.154l1.383,0.388l1.95,2.218l2.486,0.185l0.244,2.034l-1.705,1.188l-0.085,1.805l-0.238,1.115l2.461,3.083l0.189,1.049l0.995,0.244l2.009,1.438v5.565l0.676,0.199l-0.472,2.566l1.139,1.512l-0.205,2.545l1.498,2.646l1.929,1.682l1.931,0.035l0.193-0.617l-1.417-1.198l0.084-0.598l0.26-0.735l0.054-0.736l-0.97-0.029l-0.497-0.607l0.81-0.775l0.109-0.577l-0.895-0.253l0.049-0.543l1.274-0.188l1.934-0.925l0.652-1.194l2.028-2.606l-0.461-2.024l0.622-1.084l1.864,0.055l1.253-0.985l0.408-3.924l1.394-1.775l0.248-1.134l-1.274-0.408L40.224,45.842z"/>
          <!-- satellite connector lines -->
          <g>
            <line class="sat-link" x1="24" y1="27" x2="19" y2="24"/>
            <line class="sat-link" x1="24" y1="27" x2="29" y2="29"/>
            <line class="sat-link" x1="24" y1="27" x2="16" y2="29"/>
            <line class="sat-link" x1="24" y1="27" x2="30" y2="24"/>
            <line class="sat-link" x1="57" y1="21" x2="53" y2="23"/>
            <line class="sat-link" x1="57" y1="21" x2="61" y2="19"/>
            <line class="sat-link" x1="57" y1="21" x2="55" y2="18"/>
            <line class="sat-link" x1="57" y1="21" x2="62" y2="24"/>
            <line class="sat-link" x1="36" y1="53" x2="33" y2="50"/>
            <line class="sat-link" x1="36" y1="53" x2="39" y2="56"/>
            <line class="sat-link" x1="86" y1="38" x2="83" y2="40"/>
            <line class="sat-link" x1="86" y1="38" x2="89" y2="36"/>
            <line class="sat-link" x1="101" y1="44" x2="98" y2="46"/>
            <line class="sat-link" x1="101" y1="44" x2="104" y2="42"/>
            <line class="sat-link" x1="117" y1="60" x2="114" y2="58"/>
            <line class="sat-link" x1="117" y1="60" x2="120" y2="62"/>
            <line class="sat-link" x1="62" y1="48" x2="59" y2="45"/>
            <line class="sat-link" x1="62" y1="48" x2="65" y2="51"/>
            <line class="sat-link" x1="106" y1="30" x2="103" y2="28"/>
            <line class="sat-link" x1="106" y1="30" x2="109" y2="32"/>
          </g>
          <!-- satellite nodes (dim) -->
          <g>
            <circle class="sat-dot" cx="19" cy="24" r="0.42"/>
            <circle class="sat-dot" cx="29" cy="29" r="0.42"/>
            <circle class="sat-dot" cx="16" cy="29" r="0.42"/>
            <circle class="sat-dot" cx="30" cy="24" r="0.42"/>
            <circle class="sat-dot" cx="53" cy="23" r="0.42"/>
            <circle class="sat-dot" cx="61" cy="19" r="0.42"/>
            <circle class="sat-dot" cx="55" cy="18" r="0.42"/>
            <circle class="sat-dot" cx="62" cy="24" r="0.42"/>
            <circle class="sat-dot" cx="33" cy="50" r="0.42"/>
            <circle class="sat-dot" cx="39" cy="56" r="0.42"/>
            <circle class="sat-dot" cx="83" cy="40" r="0.42"/>
            <circle class="sat-dot" cx="89" cy="36" r="0.42"/>
            <circle class="sat-dot" cx="98" cy="46" r="0.42"/>
            <circle class="sat-dot" cx="104" cy="42" r="0.42"/>
            <circle class="sat-dot" cx="114" cy="58" r="0.42"/>
            <circle class="sat-dot" cx="120" cy="62" r="0.42"/>
            <circle class="sat-dot" cx="59" cy="45" r="0.42"/>
            <circle class="sat-dot" cx="65" cy="51" r="0.42"/>
            <circle class="sat-dot" cx="103" cy="28" r="0.42"/>
            <circle class="sat-dot" cx="109" cy="32" r="0.42"/>
          </g>
          <!-- hub-to-hub arcs -->
          <g>
            <use href="#arc-na-eu" class="arc"/>
            <use href="#arc-eu-in" class="arc a2"/>
            <use href="#arc-eu-sg" class="arc a3"/>
            <use href="#arc-in-sg" class="arc a4"/>
            <use href="#arc-sg-au" class="arc a5"/>
            <use href="#arc-na-sa" class="arc a6"/>
            <use href="#arc-eu-sa" class="arc a7"/>
            <use href="#arc-eu-af" class="arc a2"/>
            <use href="#arc-af-in" class="arc a5"/>
            <use href="#arc-in-ea" class="arc a3"/>
            <use href="#arc-ea-sg" class="arc a6"/>
          </g>
          <!-- major hub nodes (bright) -->
          <g>
            <circle class="hub-dot" cx="24"  cy="27" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="57"  cy="21" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="36"  cy="53" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="86"  cy="38" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="101" cy="44" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="117" cy="60" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="62"  cy="48" r="1" filter="url(#fcglow)"/>
            <circle class="hub-dot" cx="106" cy="30" r="1" filter="url(#fcglow)"/>
          </g>
          <!-- pulse rings -->
          <circle cx="57"  cy="21" r="1.2" fill="#c4ff3d" class="dc-pulse-map" opacity=".5"/>
          <circle cx="101" cy="44" r="1.2" fill="#c4ff3d" class="dc-pulse-map" opacity=".5" style="animation-delay:.7s"/>
          <circle cx="24"  cy="27" r="1.2" fill="#c4ff3d" class="dc-pulse-map" opacity=".5" style="animation-delay:1.4s"/>
          <circle cx="117" cy="60" r="1.2" fill="#c4ff3d" class="dc-pulse-map" opacity=".5" style="animation-delay:2.1s"/>
          <circle cx="106" cy="30" r="1.2" fill="#c4ff3d" class="dc-pulse-map" opacity=".5" style="animation-delay:1s"/>
          <circle cx="62"  cy="48" r="1.2" fill="#c4ff3d" class="dc-pulse-map" opacity=".5" style="animation-delay:2.6s"/>
          <!-- packets -->
          <circle class="pkt-map" r=".55"><animateMotion dur="4.6s" repeatCount="indefinite"><mpath href="#arc-eu-sg"/></animateMotion></circle>
          <circle class="pkt-map" r=".5"><animateMotion dur="5.2s" begin="-2s" repeatCount="indefinite"><mpath href="#arc-na-eu"/></animateMotion></circle>
          <circle class="pkt-map" r=".55"><animateMotion dur="4s" begin="-1.4s" repeatCount="indefinite"><mpath href="#arc-eu-in"/></animateMotion></circle>
          <circle class="pkt-map" r=".5"><animateMotion dur="3.4s" begin="-0.5s" repeatCount="indefinite"><mpath href="#arc-sg-au"/></animateMotion></circle>
          <circle class="pkt-map" r=".45"><animateMotion dur="3.6s" begin="-2.8s" repeatCount="indefinite"><mpath href="#arc-na-sa"/></animateMotion></circle>
          <circle class="pkt-map" r=".5"><animateMotion dur="3s" begin="-1s" repeatCount="indefinite"><mpath href="#arc-in-sg"/></animateMotion></circle>
          <circle class="pkt-map" r=".5"><animateMotion dur="4.2s" begin="-2.3s" repeatCount="indefinite"><mpath href="#arc-eu-af"/></animateMotion></circle>
          <circle class="pkt-map" r=".5"><animateMotion dur="3.8s" begin="-1.7s" repeatCount="indefinite"><mpath href="#arc-in-ea"/></animateMotion></circle>
        </svg>
    </div>
  </div>
</section>

{{-- ══ STORY 06 — Support ══════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner flip">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">06</span> &nbsp;/&nbsp; поддержка</div>
      <div class="fc-story-tag reveal d-1">24/7 &middot; живые инженеры</div>
      <h2 class="fc-story-title reveal d-2"><em>Никаких</em> ботов. Только&nbsp;инженеры.</h2>
      <p class="fc-story-desc reveal d-3">Живые специалисты в чате, e&#8209;mail и Telegram &mdash; без ботов и автоответчиков. Работаем круглосуточно.</p>
      <ul class="fc-story-list reveal d-4">
        <li>Живой ответ, а не скрипт и шаблонные отписки</li>
        <li>Telegram&#8209;канал со статусом всех локаций</li>
        <li>Документация и примеры для Terraform&nbsp;/&nbsp;Ansible</li>
      </ul>
    </div>
    <div class="fc-story-visual reveal d-2">
      <div class="fc-chat">
        <div class="fc-chat-header"><span class="fc-chat-dot"></span>Поддержка Fast Cloud<span class="fc-chat-online">сейчас онлайн</span></div>
        <div class="fc-chat-body">
          <div class="fc-bubble fc-bubble-user">Сервер не отвечает на запросы</div>
          <div class="fc-bubble fc-bubble-agent">Добрый день! Уже проверяю &mdash; вижу аномальный трафик, DDoS&#8209;фильтрация активирована.</div>
          <div class="fc-chat-typing"><span></span><span></span><span></span></div>
          <div class="fc-bubble fc-bubble-agent">&#10003;&nbsp;Защита включена. Сервер работает в штатном режиме.</div>
        </div>
        <div class="fc-chat-time">03:21 &middot; ответ за 1 минуту 48 секунд</div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 07 — Apps (скрыт до готовности маркетплейса) ═════════════════ --}}
{{-- <section class="fc-story">
  <div class="fc-story-inner">
    <div class="fc-story-text">
      <div class="fc-story-num reveal"><span class="step">07</span> &nbsp;/&nbsp; маркетплейс</div>
      <div class="fc-story-tag reveal d-1">готовые образы &middot; 1 клик</div>
      <h2 class="fc-story-title reveal d-2">WordPress. Docker. n8n. <em>Один</em> клик.</h2>
      <p class="fc-story-desc reveal d-3">Снижает барьер входа для нетехнических клиентов и экономит время инженерам. Готовые образы с предустановленным TLS, fail2ban и cron&#8209;бэкапом.</p>
      <ul class="fc-story-list reveal d-4">
        <li>CMS &mdash; WordPress, Ghost, Strapi</li>
        <li>DevOps &mdash; Docker, GitLab, Portainer, K3s</li>
        <li>Автоматизация &mdash; n8n, NocoDB, Appsmith</li>
      </ul>
    </div>
    <div class="fc-story-visual reveal d-2">
      <div class="fc-app-mp">
        <div class="fc-app-bar">
          <div class="fc-app-search">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
            <span>Поиск по маркетплейсу&hellip;</span>
          </div>
          <div class="fc-app-chips">
            <span class="fc-app-chip on">все</span>
            <span class="fc-app-chip">cms</span>
            <span class="fc-app-chip">devops</span>
            <span class="fc-app-chip">auto</span>
          </div>
        </div>
        <div class="fc-app-grid">
          <div class="fc-app-card"><div class="fc-app-icon wp">WP</div><div class="fc-app-name">WordPress</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div><span class="fc-app-pop">&#9733;</span></div>
          <div class="fc-app-card"><div class="fc-app-icon docker">DO</div><div class="fc-app-name">Docker</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon gitlab">GL</div><div class="fc-app-name">GitLab</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon n8n">n8</div><div class="fc-app-name">n8n</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon portainer">PT</div><div class="fc-app-name">Portainer</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon ghost">GH</div><div class="fc-app-name">Ghost</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon nginx">NX</div><div class="fc-app-name">Nginx</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon more">&middot;&middot;&middot;</div><div class="fc-app-name">ещё</div><div class="fc-app-meta">в маркетплейсе</div></div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

{{-- ══ PLANS PREVIEW ══════════════════════════════════════════════════════ --}}
@php
  $_currency = session('currency', config('settings.default_currency'));
  $_currModel = \App\Models\Currency::find($_currency);
  $_symbol    = $_currModel?->suffix ?? ($_currModel?->prefix ?? $_currency);
  $_symAfter  = !empty($_currModel?->suffix);

  // Берём первую категорию как референс (цены одинаковые во всех локациях)
  $_refCat    = $categories->first();
  $_homePlans = [];
  if ($_refCat) {
      foreach ($_refCat->products->sortBy('sort')->take(3) as $_prod) {
          $_settings    = $_prod->settings->pluck('value', 'key');
          $_monthlyPlan = $_prod->plans
              ->where('billing_period', 1)
              ->where('billing_unit', 'month')
              ->first();
          $_rawPrice = $_monthlyPlan?->prices
              ->where('currency_code', $_currency)
              ->first()?->price;
          if ($_rawPrice === null) continue;
          $_price = $_symAfter
              ? round($_rawPrice) . ' ' . $_symbol
              : $_symbol . ' ' . round($_rawPrice);
          $_homePlans[] = [
              'name'     => $_prod->name,
              'featured' => $_prod->name === 'Pro',
              'price'    => $_price,
              'cpu'      => $_settings['cpu']     ?? '—',
              'ram'      => $_settings['ram']     ?? '—',
              'nvme'     => $_settings['nvme']    ?? '—',
              'traffic'  => $_settings['traffic'] ?? '—',
          ];
      }
  }
  $_minPrice = collect($_homePlans)->pluck('price')->first() ?? '—';
@endphp
<section class="fc-plans">
  <div class="fc-plans-inner">
    <div class="fc-plans-head">
      <h2 class="fc-plans-title reveal">Тарифы <em>от&nbsp;{{ $_minPrice }}</em><br>до корпоративных.</h2>
      <a href="{{ route('pricing') }}" wire:navigate class="fc-plans-link reveal d-1">все тарифы &rarr;</a>
    </div>
    <div class="fc-plan-grid">
      @foreach ($_homePlans as $_p)
      <div class="fc-plan-card {{ $_p['featured'] ? 'featured' : '' }} reveal d-{{ $loop->iteration + 1 }}">
        <div class="fc-plan-name">{{ $_p['name'] }}</div>
        <div class="fc-plan-price">{{ $_p['price'] }}<span class="per">/мес</span></div>
        <div class="fc-plan-stats">
          <div><span class="fc-plan-stat-val">{{ $_p['cpu'] }}</span><span class="fc-plan-stat-lbl">vCPU</span></div>
          <div><span class="fc-plan-stat-val">{{ $_p['ram'] }}&nbsp;GB</span><span class="fc-plan-stat-lbl">RAM</span></div>
          <div><span class="fc-plan-stat-val">{{ $_p['nvme'] }}&nbsp;GB</span><span class="fc-plan-stat-lbl">NVMe</span></div>
          <div><span class="fc-plan-stat-val">{{ $_p['traffic'] }}</span><span class="fc-plan-stat-lbl">трафик</span></div>
        </div>
        <div class="fc-plan-check">
          <span>Anti&#8209;DDoS&nbsp;10&nbsp;Gbps</span>
          <span>Бэкапы 14&nbsp;дней</span>
          <span>Поддержка 24/7</span>
        </div>
        {{-- Без кнопки — нужно сначала выбрать локацию на странице тарифов --}}
      </div>
      @endforeach
    </div>
    <div style="text-align:center;margin-top:24px;">
      <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-ghost">
        Выбрать локацию и тариф &rarr;
      </a>
    </div>
  </div>
</section>

{{-- ══ CTA ════════════════════════════════════════════════════════════════ --}}
<section class="fc-cta">
  <canvas id="ctaFx" class="fc-cta-canvas"></canvas>
  <div class="fc-cta-inner">
    <h2 class="fc-cta-title reveal">Готовы запустить<br><em>первый сервер?</em></h2>
    <p class="fc-cta-sub reveal d-1">Регистрация за 30 секунд. Сервер активируется сразу после оплаты. Никаких документов.</p>
    <div class="fc-cta-btns reveal d-2">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать аккаунт &rarr;</a>
      <a href="{{ route('pricing') }}" wire:navigate class="fc-btn-ghost">Смотреть тарифы</a>
    </div>
  </div>
</section>

{!! hook('pages.home') !!}

</div>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
