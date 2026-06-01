<link rel="stylesheet" href="{{ asset('fastcloud/marketing.css') }}">

<div class="fc-page">

{{-- ══ HERO ═══════════════════════════════════════════════════════════════ --}}
<section class="fc-hero">
  <canvas id="heroFx" class="fc-hero-canvas"></canvas>
  <div class="fc-hero-inner" style="position:relative;z-index:1">
    <div class="fc-eyebrow">
      <span class="fc-eyebrow-dot"></span>
      <span id="heroLiveText"><strong>fra1.fastcloud.eu</strong> &middot; только что создан &middot; <em>«за&nbsp;53&nbsp;с, из Берлина»</em></span>
    </div>
    <h1 class="fc-hero-title">
      Поднимите сервер<br>за&nbsp;<span style="color:hsl(var(--color-primary))"><span id="heroNum">55</span></span> <em>секунд.</em>
    </h1>
    <p class="fc-hero-sub">
      Без верификации. Без скрытых платежей. NVMe&nbsp;Gen4, сеть&nbsp;10&nbsp;Gbps
      и&nbsp;Anti&#8209;DDoS в&nbsp;каждом тарифе &mdash; в&nbsp;10&nbsp;локациях по&nbsp;миру.
    </p>
    <div class="fc-hero-ctas">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать сервер &rarr;</a>
      <a href="{{ route('category.show', ['category' => 'france']) }}" wire:navigate class="fc-btn-ghost">Тарифы</a>
    </div>
    <div class="fc-meta">
      <div class="fc-meta-cell"><div class="fc-meta-val">99,99%</div><div class="fc-meta-lbl">SLA</div></div>
      <div class="fc-meta-div"></div>
      <div class="fc-meta-cell"><div class="fc-meta-val">10&nbsp;Gbps</div><div class="fc-meta-lbl">Anti&#8209;DDoS</div></div>
      <div class="fc-meta-div"></div>
      <div class="fc-meta-cell"><div class="fc-meta-val">10</div><div class="fc-meta-lbl">Локаций</div></div>
      <div class="fc-meta-div"></div>
      <div class="fc-meta-cell"><div class="fc-meta-val">24/7</div><div class="fc-meta-lbl">Поддержка</div></div>
    </div>
  </div>
</section>

{{-- ══ MANIFEST ════════════════════════════════════════════════════════════ --}}
<section class="fc-manifest">
  <div class="fc-manifest-inner">
    <p class="fc-manifest-text">
      Пока другие проверяют ваш паспорт, <em>сверяют почту</em>
      и звонят в банк &mdash; у вас уже работает
      <span class="hi">боевой сервер</span>
      <span class="accent">с&nbsp;Anti&#8209;DDoS&nbsp;на&nbsp;10&nbsp;Gbps</span>
      и ежедневным бэкапом.
    </p>
    <div class="fc-manifest-foot">
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
      <div class="fc-story-num"><span class="step">01</span> &nbsp;/&nbsp; скорость</div>
      <div class="fc-story-tag">мгновенный старт</div>
      <h2 class="fc-story-title">55&nbsp;секунд <em>до&nbsp;готового</em> сервера.</h2>
      <p class="fc-story-desc">Большинство провайдеров держит на ручной верификации часами. FastCloud активирует сервер автоматически сразу после оплаты &mdash; без документов, без ожиданий.</p>
      <ul class="fc-story-list">
        <li>Никаких паспортов и звонков в поддержку</li>
        <li>Мгновенная активация &mdash; REST&nbsp;API и&nbsp;Terraform</li>
        <li>Snapshot&#8209;образы Ubuntu, Debian, Alma, Arch, Windows</li>
      </ul>
    </div>
    <div class="fc-story-visual">
      <div class="fc-deploy-steps">
        <div class="fc-deploy-step done"><div class="fc-deploy-dot"></div><div><div class="fc-deploy-label">Оплата принята</div><div class="fc-deploy-time">0 с</div></div></div>
        <div class="fc-deploy-step done"><div class="fc-deploy-dot"></div><div><div class="fc-deploy-label">Provisioning NVMe</div><div class="fc-deploy-time">12 с</div></div></div>
        <div class="fc-deploy-step done"><div class="fc-deploy-dot"></div><div><div class="fc-deploy-label">ОС установлена</div><div class="fc-deploy-time">38 с</div></div></div>
        <div class="fc-deploy-step active"><div class="fc-deploy-dot"></div><div><div class="fc-deploy-label">SSH готов</div><div class="fc-deploy-time">55 с</div></div></div>
        <div class="fc-deploy-total"><span class="fc-deploy-total-val">55 секунд</span><span class="fc-deploy-total-lbl">от оплаты до SSH</span></div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 02 — Anti-DDoS ════════════════════════════════════════════════ --}}
<section class="fc-story" style="background:hsl(var(--color-background-secondary))">
  <div class="fc-story-inner flip">
    <div class="fc-story-text">
      <div class="fc-story-num"><span class="step">02</span> &nbsp;/&nbsp; защита</div>
      <div class="fc-story-tag">anti&#8209;ddos &middot; 10 gbps</div>
      <h2 class="fc-story-title">Атаки отбиты <em>до&nbsp;того,</em><br>как доходят до вас.</h2>
      <p class="fc-story-desc">Фильтрация работает на уровнях L3, L4 и L7 &mdash; атаки блокируются ещё до того, как достигают вашего сервера. Входит в каждый тариф без доплат.</p>
      <ul class="fc-story-list">
        <li>UDP Flood, SYN Flood, HTTP DDoS, Amplification</li>
        <li>Фильтрация не влияет на latency</li>
        <li>Включено во все тарифы, без скрытых платежей</li>
      </ul>
    </div>
    <div class="fc-story-visual">
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
      <div class="fc-story-num"><span class="step">03</span> &nbsp;/&nbsp; ценообразование</div>
      <div class="fc-story-tag">честные цены</div>
      <h2 class="fc-story-title">Цена при старте&nbsp;= <em>цена</em> при продлении.</h2>
      <p class="fc-story-desc">Многие провайдеры привлекают низкой ценой при первом платеже, а при продлении выставляют сумму в 2&mdash;3 раза выше. FastCloud не поднимает цену при продлении.</p>
      <ul class="fc-story-list">
        <li>Цена при продлении равна стартовой</li>
        <li>Нет скрытых комиссий и setup&#8209;платежей</li>
        <li>Удаление в 1 клик без штрафов и привязок</li>
      </ul>
    </div>
    <div class="fc-story-visual">
      <div class="fc-incl-list">
        <div class="fc-incl-head">Что входит в каждый тариф</div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">NVMe Gen4 &middot; 7&nbsp;000&nbsp;MB/s</div><div class="fc-incl-sub">высокопроизводительное хранилище</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Anti-DDoS L3&nbsp;/&nbsp;L4&nbsp;/&nbsp;L7</div><div class="fc-incl-sub">без доплаты, во всех тарифах</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Бэкапы &middot; 14&nbsp;дней</div><div class="fc-incl-sub">автоматические снапшоты каждую ночь</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Поддержка 24/7</div><div class="fc-incl-sub">живые инженеры, ответ &lt;&nbsp;5&nbsp;мин</div></div></div>
        <div class="fc-incl-item"><div class="fc-incl-check">&#10003;</div><div><div class="fc-incl-label">Цена при продлении = цена при старте</div><div class="fc-incl-sub">без setup fee и скрытых платежей</div></div></div>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 04 — Backups ══════════════════════════════════════════════════ --}}
<section class="fc-story" style="background:hsl(var(--color-background-secondary))">
  <div class="fc-story-inner flip">
    <div class="fc-story-text">
      <div class="fc-story-num"><span class="step">04</span> &nbsp;/&nbsp; бэкапы</div>
      <div class="fc-story-tag">14 снапшотов</div>
      <h2 class="fc-story-title">Ежедневные бэкапы.<br><em>В&nbsp;каждом</em> тарифе.</h2>
      <p class="fc-story-desc">Каждую ночь FastCloud автоматически создаёт полный snapshot вашего сервера. 14 дней хранения &mdash; в каждом тарифе, без доплат.</p>
      <ul class="fc-story-list">
        <li>Автоматический snapshot каждую ночь в 03:00</li>
        <li>Хранение &mdash; 14 дней, доступно для всех тарифов</li>
        <li>Восстановление в 1 клик без потери IP</li>
      </ul>
    </div>
    <div class="fc-story-visual">
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
      <div class="fc-story-num"><span class="step">05</span> &nbsp;/&nbsp; локации</div>
      <div class="fc-story-tag">10 локаций по миру</div>
      <h2 class="fc-story-title">10&nbsp;локаций. <em>Один</em> SLA.</h2>
      <p class="fc-story-desc">Европа, Северная Америка, Азия и Австралия &mdash; выбирайте регион с минимальной задержкой для вашей аудитории. Сетевая магистраль Cogent + Telia + Lumen.</p>
      <ul class="fc-story-list">
        <li>EU&nbsp;&times;5: Frankfurt, Amsterdam, Milan, Warsaw, London</li>
        <li>NA&nbsp;&times;3: New York, San Francisco, Toronto</li>
        <li>APAC&nbsp;&times;3: Singapore, Mumbai, Sydney</li>
      </ul>
    </div>
    <div class="fc-story-visual">
      <div class="fc-map-wrap">
        <div class="fc-map-hud">
          <span class="fc-map-hud-dot"></span>
          <span>LIVE</span>
          <span>&middot;</span>
          <span class="accent">10&nbsp;PoP</span>
          <span>&middot;</span>
          <span>1.24&nbsp;Tbps</span>
        </div>
        <svg class="fc-map-svg" viewBox="0 8 125.762 72" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <filter id="fcglow" x="-100%" y="-100%" width="300%" height="300%">
              <feGaussianBlur stdDeviation="1.2" result="b"/>
              <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
            </filter>
            <path id="fc-arc-eu-us" d="M 55 21 Q 30 6 9 25" fill="none"/>
            <path id="fc-arc-eu-sg" d="M 55 21 Q 80 8 101 44" fill="none"/>
            <path id="fc-arc-eu-in" d="M 55 21 Q 72 16 85 38" fill="none"/>
            <path id="fc-arc-sg-au" d="M 101 44 Q 116 48 118 60" fill="none"/>
            <path id="fc-arc-uw-ue" d="M 9 25 Q 18 16 27 29" fill="none"/>
          </defs>
          <polygon class="land" points="52.688,20.209 52.762,20.738 51.982,20.898 51.867,22.017 52.822,22.017 54.081,21.9 54.732,21.127 54.035,20.856 53.653,20.423 53.08,19.513 52.822,18.202 51.748,18.421 51.449,18.882 51.449,19.393 51.962,19.756"/>
          <polygon class="land" points="51.787,20.641 51.838,19.937 51.221,19.67 50.34,19.868 49.689,20.908 49.689,21.589 50.45,21.589"/>
          <polygon class="land" points="102.764,47.568 100.77,47.628 100.691,46.543 101.014,46.683 101.795,46.592 101.715,45.598 99.548,45.624 98.961,44.842 98.988,44.424 96.205,41.918 95.508,42.46 99.502,47.33 100.064,47.518 100.064,47.781 99.312,47.781 99.502,48.388 104.391,48.602"/>
          <polygon class="land" points="106.244,42.136 105.906,41.998 105.748,41.161 105.256,41.161 104.943,42.002 104.57,42.336 101.74,43.877 101.74,45.395 102.681,46.643 105.062,46.643 105.371,45.867 105.906,45.379 105.906,45.022 106.244,44.808"/>
          <polygon class="land" points="120.057,56.79 119.664,55.192 118.208,53.943 118.092,51.562 117.138,49.916 116.273,49.87 115.915,52.859 114.273,52.74 113.796,52.457 113.751,51.278 114.615,51.458 115.357,50.736 113.781,49.786 111.941,49.786 110.613,51.676 110.08,51.676 110.08,51.08 108.479,51.193 105.966,54.053 104.63,54.083 103.143,55.097 103.048,59.544 102.143,60.409 102.143,61.19 106.48,59.703 109.98,59.563 111.279,62.423 115.264,62.558 119.104,58.947"/>
          <path class="land" d="M40.224,45.842l-2.869-0.025l-2.274-0.865l-0.109-1.621l-0.76-1.329l-2.044-0.024l-1.194-1.871L29.919,39.6l-0.054,0.558l-1.92,0.119l-0.706-0.979L25.23,38.89l-1.652,1.905l-2.59-0.438l-0.189-2.929l-1.9-0.326l0.762-1.43l-0.22-0.826l-2.481,1.667l-1.567-0.189l-0.567-1.229l0.349-1.268l0.865-1.587l1.984-1.01h3.845l-0.01,1.171l1.383,0.637l-0.114-2.002l0.995-0.997l2.009-1.32l0.128-0.926l2.011-2.084l2.133-1.176l1.246-1.512l1.811,0.555l0.413-0.035l0.03-0.779l-1.432-0.651l-0.085-0.383l1.189-0.408l0.049-1.131l-1.239-0.759l-0.08-1.914l-1.715,0.836h-0.621l0.163-1.46l-2.308-0.552l-0.964,0.723v2.221l-1.727,0.54l-0.696,1.447l-0.746,0.117v-1.845l-1.622-0.229l-0.81-0.524l-0.329-1.191l2.903-1.701l1.418-0.433l0.826-0.117l0.009-0.162l-0.348-0.154l-0.085-0.504l1.015-0.088l0.612-0.641l2.333-0.239l0.939,0.803l-2.486,1.321l3.158,0.743l0.404-1.06h1.387l0.481-0.917l-3.059-1.355L32,12.376l-1.199,0.622l-1.24-0.194l-0.189-0.835l1.18-1.084l-2.154-0.107l-0.628,0.182l0.817,0.14l-0.165,0.813l-1.377,0.083l-0.214,0.534l-2.014,0.057l1.567-0.024l1.193-1.167l-0.651-0.329l-0.865,0.845l-1.438-0.079l-0.86-1.193h-1.841l-1.923,1.437h1.76l0.163,0.514l-0.462,0.433l1.95,0.058l0.298,0.701l-2.193-0.088l-0.109-0.539L19.72,13.97l-0.731-0.4L15.74,13.6l-0.999,0.972l-0.681-0.058l-0.757-0.438l-2.243-0.672H6.947l-2.378,1.619l-1.597,0.247l-0.73,0.569l1.134,0.167v0.455H0.949L0,17.137l1.212,1.03l3.327,0.029l0.463-0.495h2.78l1.004,0.893l-0.06,1.385l0.847,0.783l-0.706,0.505l0.159,1.822l-2.511,3.057v2.867l1.347,0.652v2.573l1.31,2.213l1.043,0.159l0.135-0.758l-1.233-1.915l-0.244-1.865h0.731l0.313,1.92l1.8,2.623l-0.482,0.846l1.153,1.751l2.846,0.704v-0.458l1.133,0.156l-0.104,0.816l0.89,0.154l1.383,0.388l1.95,2.218l2.486,0.185l0.244,2.034l-1.705,1.188l-0.085,1.805l-0.238,1.115l2.461,3.083l0.189,1.049l0.995,0.244l2.009,1.438v5.565l0.676,0.199l-0.472,2.566l1.139,1.512l-0.205,2.545l1.498,2.646l1.929,1.682l1.931,0.035l0.193-0.617l-1.417-1.198l0.109-0.577l-0.895-0.253l0.049-0.543l1.274-0.188l1.934-0.925l0.652-1.194l2.028-2.606l-0.461-2.024l0.622-1.084l1.864,0.055l1.253-0.985l0.408-3.924l1.394-1.775l0.248-1.134l-1.274-0.408L40.224,45.842z"/>
          <circle class="dc-dot-map" cx="55" cy="21" r="0.9" filter="url(#fcglow)"/>
          <circle class="dc-dot-map" cx="59" cy="21" r="0.9" filter="url(#fcglow)"/>
          <circle class="dc-dot-map" cx="56" cy="23" r="0.9" filter="url(#fcglow)"/>
          <text class="dc-lbl-map" x="57" y="17">EU &times;5</text>
          <circle class="dc-dot-map" cx="85" cy="38" r="0.9" filter="url(#fcglow)"/>
          <text class="dc-lbl-map" x="85" y="35">IN</text>
          <circle class="dc-dot-map" cx="101" cy="44" r="0.9" filter="url(#fcglow)"/>
          <text class="dc-lbl-map" x="101" y="41">SG</text>
          <circle class="dc-dot-map" cx="118" cy="60" r="0.9" filter="url(#fcglow)"/>
          <text class="dc-lbl-map" x="118" y="57">AU</text>
          <circle class="dc-dot-map" cx="26" cy="26" r="0.9" filter="url(#fcglow)"/>
          <text class="dc-lbl-map" x="26" y="23">CA</text>
          <circle class="dc-dot-map" cx="9"  cy="25" r="0.9" filter="url(#fcglow)"/>
          <circle class="dc-dot-map" cx="27" cy="29" r="0.9" filter="url(#fcglow)"/>
          <text class="dc-lbl-map" x="17" y="33">US &times;2</text>
          <use href="#fc-arc-eu-us" class="arc-map"/>
          <use href="#fc-arc-eu-sg" class="arc-map" style="animation-duration:7s;animation-delay:-1.5s"/>
          <use href="#fc-arc-eu-in" class="arc-map" style="animation-duration:5.5s;animation-delay:-2.2s"/>
          <use href="#fc-arc-sg-au" class="arc-map" style="animation-duration:6.5s;animation-delay:-4s"/>
          <use href="#fc-arc-uw-ue" class="arc-map" style="animation-duration:5s;animation-delay:-1s"/>
          <circle class="pkt-map" r=".55"><animateMotion dur="4.6s" repeatCount="indefinite"><mpath href="#fc-arc-eu-sg"/></animateMotion></circle>
          <circle class="pkt-map" r=".55"><animateMotion dur="4s" begin="-1.4s" repeatCount="indefinite"><mpath href="#fc-arc-eu-us"/></animateMotion></circle>
          <circle class="pkt-map" r=".45"><animateMotion dur="3.2s" begin="-2.8s" repeatCount="indefinite"><mpath href="#fc-arc-sg-au"/></animateMotion></circle>
        </svg>
      </div>
    </div>
  </div>
</section>

{{-- ══ STORY 06 — Support ══════════════════════════════════════════════════ --}}
<section class="fc-story" style="background:hsl(var(--color-background-secondary))">
  <div class="fc-story-inner flip">
    <div class="fc-story-text">
      <div class="fc-story-num"><span class="step">06</span> &nbsp;/&nbsp; поддержка</div>
      <div class="fc-story-tag">24/7 &middot; живые инженеры</div>
      <h2 class="fc-story-title"><em>Никаких</em> ботов. Только&nbsp;инженеры.</h2>
      <p class="fc-story-desc">Живые специалисты в чате, e&#8209;mail и Telegram. Среднее время первого ответа &mdash; меньше 5 минут, даже в 3 часа ночи.</p>
      <ul class="fc-story-list">
        <li>Среднее время первого ответа &lt;&nbsp;5&nbsp;минут</li>
        <li>Telegram&#8209;канал со статусом всех локаций</li>
        <li>Документация и примеры для Terraform&nbsp;/&nbsp;Ansible</li>
      </ul>
    </div>
    <div class="fc-story-visual">
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

{{-- ══ STORY 07 — Apps ═════════════════════════════════════════════════════ --}}
<section class="fc-story">
  <div class="fc-story-inner">
    <div class="fc-story-text">
      <div class="fc-story-num"><span class="step">07</span> &nbsp;/&nbsp; маркетплейс</div>
      <div class="fc-story-tag">50+ приложений в 1 клик</div>
      <h2 class="fc-story-title">WordPress. Docker. n8n.<br><em>Один</em> клик.</h2>
      <p class="fc-story-desc">Снижает барьер входа для нетехнических клиентов и экономит время инженерам. Готовые образы с предустановленным TLS, fail2ban и cron&#8209;бэкапом.</p>
      <ul class="fc-story-list">
        <li>CMS &mdash; WordPress, Ghost, Strapi</li>
        <li>DevOps &mdash; Docker, GitLab, Portainer, K3s</li>
        <li>Автоматизация &mdash; n8n, NocoDB, Appsmith</li>
      </ul>
    </div>
    <div class="fc-story-visual">
      <div class="fc-app-mp">
        <div class="fc-app-bar">
          <div class="fc-app-search">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
            <span>Поиск среди 50+&nbsp;приложений&hellip;</span>
          </div>
          <div class="fc-app-chips">
            <span class="fc-app-chip on">все</span>
            <span class="fc-app-chip">cms</span>
            <span class="fc-app-chip">devops</span>
            <span class="fc-app-chip">auto</span>
          </div>
        </div>
        <div class="fc-app-grid">
          <div class="fc-app-card"><div class="fc-app-icon wp">WP</div><div class="fc-app-name">WordPress</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;38&nbsp;с</span></div><span class="fc-app-pop">&#9733;</span></div>
          <div class="fc-app-card"><div class="fc-app-icon docker">DO</div><div class="fc-app-name">Docker</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;42&nbsp;с</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon gitlab">GL</div><div class="fc-app-name">GitLab</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;55&nbsp;с</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon n8n">n8</div><div class="fc-app-name">n8n</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;36&nbsp;с</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon portainer">PT</div><div class="fc-app-name">Portainer</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;30&nbsp;с</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon ghost">GH</div><div class="fc-app-name">Ghost</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;44&nbsp;с</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon nginx">NX</div><div class="fc-app-name">Nginx</div><div class="fc-app-meta"><span class="fc-app-time">&#9889;&nbsp;28&nbsp;с</span></div></div>
          <div class="fc-app-card"><div class="fc-app-icon more">+43</div><div class="fc-app-name">ещё</div><div class="fc-app-meta">в маркетплейсе</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ══ PLANS PREVIEW ══════════════════════════════════════════════════════ --}}
<section class="fc-plans">
  <div class="fc-plans-inner">
    <div class="fc-plans-head">
      <h2 class="fc-plans-title">Тарифы <em>от&nbsp;&euro;4</em><br>до корпоративных.</h2>
      <a href="{{ route('category.show', ['category' => 'france']) }}" wire:navigate class="fc-plans-link">все тарифы &rarr;</a>
    </div>
    <div class="fc-plan-grid">
      <div class="fc-plan-card">
        <div class="fc-plan-name">Starter</div>
        <div class="fc-plan-price"><sup>&euro;</sup>4<span class="per">/мес</span></div>
        <div class="fc-plan-tags"><span>блог</span><span>хобби</span><span>тест</span></div>
        <div class="fc-plan-stats"><div><span class="fc-plan-stat-val">1</span><span class="fc-plan-stat-lbl">vCPU</span></div><div><span class="fc-plan-stat-val">2</span><span class="fc-plan-stat-lbl">GB RAM</span></div><div><span class="fc-plan-stat-val">30</span><span class="fc-plan-stat-lbl">GB NVMe</span></div></div>
        <div class="fc-plan-check"><span>Anti&#8209;DDoS 10 Gbps</span><span>Бэкапы 14 дней</span><span>Поддержка 24/7</span></div>
        <a href="{{ route('register') }}" wire:navigate class="fc-btn-ghost" style="justify-content:center;font-size:13px;padding:10px">Выбрать &rarr;</a>
      </div>
      <div class="fc-plan-card featured">
        <div class="fc-plan-name">Pro</div>
        <div class="fc-plan-price"><sup>&euro;</sup>9<span class="per">/мес</span></div>
        <div class="fc-plan-tags"><span>API</span><span>лендинг</span><span>SaaS</span></div>
        <div class="fc-plan-stats"><div><span class="fc-plan-stat-val">2</span><span class="fc-plan-stat-lbl">vCPU</span></div><div><span class="fc-plan-stat-val">4</span><span class="fc-plan-stat-lbl">GB RAM</span></div><div><span class="fc-plan-stat-val">60</span><span class="fc-plan-stat-lbl">GB NVMe</span></div></div>
        <div class="fc-plan-check"><span>Anti&#8209;DDoS 10 Gbps</span><span>Бэкапы 14 дней</span><span>Поддержка 24/7</span></div>
        <a href="{{ route('register') }}" wire:navigate class="fc-btn-primary" style="justify-content:center;font-size:13px;padding:10px">Выбрать &rarr;</a>
      </div>
      <div class="fc-plan-card">
        <div class="fc-plan-name">Business</div>
        <div class="fc-plan-price"><sup>&euro;</sup>18<span class="per">/мес</span></div>
        <div class="fc-plan-tags"><span>магазин</span><span>CI/CD</span><span>прод</span></div>
        <div class="fc-plan-stats"><div><span class="fc-plan-stat-val">4</span><span class="fc-plan-stat-lbl">vCPU</span></div><div><span class="fc-plan-stat-val">8</span><span class="fc-plan-stat-lbl">GB RAM</span></div><div><span class="fc-plan-stat-val">120</span><span class="fc-plan-stat-lbl">GB NVMe</span></div></div>
        <div class="fc-plan-check"><span>Anti&#8209;DDoS 10 Gbps</span><span>Бэкапы 14 дней</span><span>Выделенный IPv4</span><span>Поддержка 24/7</span></div>
        <a href="{{ route('register') }}" wire:navigate class="fc-btn-ghost" style="justify-content:center;font-size:13px;padding:10px">Выбрать &rarr;</a>
      </div>
      <div class="fc-plan-card">
        <div class="fc-plan-name">Scale</div>
        <div class="fc-plan-price"><sup>&euro;</sup>35<span class="per">/мес</span></div>
        <div class="fc-plan-tags"><span>highload</span><span>media</span></div>
        <div class="fc-plan-stats"><div><span class="fc-plan-stat-val">8</span><span class="fc-plan-stat-lbl">vCPU</span></div><div><span class="fc-plan-stat-val">16</span><span class="fc-plan-stat-lbl">GB RAM</span></div><div><span class="fc-plan-stat-val">250</span><span class="fc-plan-stat-lbl">GB NVMe</span></div></div>
        <div class="fc-plan-check"><span>Anti&#8209;DDoS 10 Gbps</span><span>Бэкапы 14 дней</span><span>Выделенный IPv4</span><span>Поддержка 24/7</span></div>
        <a href="{{ route('register') }}" wire:navigate class="fc-btn-ghost" style="justify-content:center;font-size:13px;padding:10px">Выбрать &rarr;</a>
      </div>
    </div>
  </div>
</section>

{{-- ══ CTA ════════════════════════════════════════════════════════════════ --}}
<section class="fc-cta">
  <canvas id="ctaFx" class="fc-cta-canvas"></canvas>
  <div class="fc-cta-inner">
    <h2 class="fc-cta-title">Готовы запустить<br><em>первый сервер?</em></h2>
    <p class="fc-cta-sub">Регистрация за 30 секунд. Сервер активируется сразу после оплаты. Никаких документов.</p>
    <div class="fc-cta-btns">
      <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime">Создать аккаунт &rarr;</a>
      <a href="{{ route('category.show', ['category' => 'france']) }}" wire:navigate class="fc-btn-ghost">Смотреть тарифы</a>
    </div>
  </div>
</section>

{!! hook('pages.home') !!}

</div>

<script src="{{ asset('fastcloud/marketing.js') }}" defer></script>
