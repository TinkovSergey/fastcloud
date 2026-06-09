/* FastCloud · Marketing JS */

/* ── Design token: lime (sync with --fc-lime-rgb in marketing.css) ──── */
var FC_LIME_RGB = (function () {
  var v = getComputedStyle(document.documentElement).getPropertyValue('--fc-lime-rgb').trim();
  return v || '181,245,58';
})();

/* ── Nav scroll: transparent → blur ─────────────────────────────────── */
(function () {
  var nav = document.querySelector('nav.fixed.top-0');
  if (!nav) return;
  function update() { nav.classList.toggle('fc-scrolled', window.scrollY > 8); }
  window.addEventListener('scroll', update, { passive: true });
  update();
})();


/* ── Deploy card animation (Speed story) ────────────────────────────── */
(function () {
  var card    = document.getElementById('deployCard');
  var bar     = document.getElementById('deployBar');
  var pctEl   = document.getElementById('deployPct');
  var spinner = document.getElementById('deploySpinner');
  var total   = document.getElementById('deployTotal');
  var rows    = document.querySelectorAll('.fc-dc-row');
  if (!card || !rows.length) return;

  /* step timings as fractions of total cycle (0‥1) */
  var STEPS = [0, 0.12, 0.45, 0.78, 0.94];
  var CYCLE  = 9000;  /* ms per loop */
  var PAUSE  = 2200;  /* ms to show result before reset */

  function reset() {
    bar.style.transition = 'none';
    bar.style.width = '0%';
    if (pctEl)   pctEl.textContent = '0%';
    if (spinner) { spinner.style.opacity = '1'; spinner.style.transition = ''; }
    if (total)   { total.style.opacity = '0';   total.style.transition = ''; }
    rows.forEach(function (r) {
      r.className = 'fc-dc-row';
      r.querySelector('.fc-dc-ico').textContent = '○'; /* ○ */
    });
  }

  function run() {
    reset();
    /* stagger-in all rows */
    rows.forEach(function (r, i) {
      setTimeout(function () { r.classList.add('vis'); }, 80 * i);
    });

    var started = null;
    function tick(ts) {
      if (!started) started = ts;
      var p = Math.min((ts - started) / CYCLE, 1);
      var pct = Math.round(p * 100);

      bar.style.transition = 'none';
      bar.style.width = pct + '%';
      if (pctEl) pctEl.textContent = pct + '%';

      rows.forEach(function (r, i) {
        var ico = r.querySelector('.fc-dc-ico');
        var f   = STEPS[i];
        var next = STEPS[i + 1] !== undefined ? STEPS[i + 1] : 1;
        if (p >= next - 0.04) {
          r.className = 'fc-dc-row vis done';
          ico.textContent = '✓'; /* ✓ */
        } else if (p >= f) {
          r.className = 'fc-dc-row vis active';
          ico.textContent = '⟳'; /* ⟳ */
        }
      });

      if (p < 1) {
        requestAnimationFrame(tick);
      } else {
        /* show result badge, hide spinner */
        if (spinner) { spinner.style.transition = 'opacity .4s'; spinner.style.opacity = '0'; }
        if (total)   { total.style.transition   = 'opacity .5s'; total.style.opacity   = '1'; }
        setTimeout(function () { run(); }, PAUSE);
      }
    }
    requestAnimationFrame(tick);
  }

  /* start when card enters viewport */
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { run(); io.disconnect(); } });
  }, { rootMargin: '0px 0px -80px 0px' });
  io.observe(card);
})();

/* ── Reveal on scroll ────────────────────────────────────────────────── */
(function () {
  var els = document.querySelectorAll('.fc-page .reveal');
  if (!('IntersectionObserver' in window)) {
    els.forEach(function(el) { el.classList.add('in'); });
    return;
  }
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
  els.forEach(function(el) { if (!el.classList.contains('in')) io.observe(el); });
})();

/* ── Hero live ticker ─────────────────────────────────────────────────── */
(function () {
  var el = document.getElementById('heroLiveText');
  if (!el) return;
  var events = [
    '<strong>fra1.fastcloud.eu</strong> · только что создан · <em>«за&nbsp;53&nbsp;с, из Берлина»</em>',
    '<strong>sgp1.fastcloud.eu</strong> · сервер запущен · <em>«ping&nbsp;<span style="color:#20b5eb">12&nbsp;ms</span> из Токио»</em>',
    '<strong>nyc1.fastcloud.eu</strong> · создан · <em>«за&nbsp;41&nbsp;с, из Нью-Йорка»</em>',
    '<strong>ams1.fastcloud.eu</strong> · WordPress установлен · <em>«за&nbsp;38&nbsp;с, из Амстердама»</em>',
    '<strong>lon1.fastcloud.eu</strong> · Docker задеплоен · <em>«за&nbsp;45&nbsp;с, из Лондона»</em>',
    '<strong>tor1.fastcloud.eu</strong> · создан · <em>«за&nbsp;48&nbsp;с, из Торонто»</em>',
    '<strong>mum1.fastcloud.eu</strong> · создан · <em>«за&nbsp;44&nbsp;с, из Мумбаи»</em>',
    '<strong>syd1.fastcloud.eu</strong> · GitLab готов · <em>«за&nbsp;52&nbsp;с, из Сиднея»</em>',
    '<strong>waw1.fastcloud.eu</strong> · создан · <em>«за&nbsp;36&nbsp;с, из Варшавы»</em>',
  ];
  var idx = 0;
  function tick() {
    idx = (idx + 1) % events.length;
    el.classList.add('fc-live-leave');
    setTimeout(function () {
      el.innerHTML = events[idx];
      el.classList.remove('fc-live-leave');
      el.classList.add('fc-live-enter');
      setTimeout(function () { el.classList.remove('fc-live-enter'); }, 380);
      schedule();
    }, 240);
  }
  function schedule() { setTimeout(tick, 3500 + Math.random() * 5500); }
  schedule();
})();

/* ── Hero canvas: speed-packet stream ───────────────────────────────── */
(function () {
  var canvas = document.getElementById('heroFx');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var DPR = Math.min(window.devicePixelRatio || 1, 2);
  var W = 0, H = 0;
  var particles = [];
  var MAX = 70, running = false, raf = 0;

  function resize() {
    var rect = canvas.getBoundingClientRect();
    W = canvas.width  = Math.max(1, rect.width  * DPR);
    H = canvas.height = Math.max(1, rect.height * DPR);
  }
  function spawn() {
    return {
      x: -120 * DPR, y: Math.random() * H,
      speed: (2.5 + Math.random() * 9) * DPR,
      length: (60 + Math.random() * 180) * DPR,
      width: (0.5 + Math.random() * 1.6) * DPR,
      lime: true,
      alpha: 0.35 + Math.random() * 0.45,
    };
  }
  var lastT = 0;
  function loop(t) {
    var dt = Math.min(50, t - lastT) / 16.67; lastT = t;
    ctx.fillStyle = 'rgba(10,12,19,0.16)'; ctx.fillRect(0, 0, W, H);
    for (var i = particles.length - 1; i >= 0; i--) {
      var p = particles[i]; p.x += p.speed * dt;
      var grad = ctx.createLinearGradient(p.x - p.length, p.y, p.x, p.y);
      var col = FC_LIME_RGB;
      grad.addColorStop(0, 'rgba(' + col + ',0)');
      grad.addColorStop(0.6, 'rgba(' + col + ',' + (p.alpha * 0.6) + ')');
      grad.addColorStop(1, 'rgba(' + col + ',' + p.alpha + ')');
      ctx.strokeStyle = grad; ctx.lineWidth = p.width; ctx.lineCap = 'round';
      ctx.beginPath(); ctx.moveTo(p.x - p.length, p.y); ctx.lineTo(p.x, p.y); ctx.stroke();
      if (p.lime) {
        ctx.fillStyle = 'rgba(' + col + ',' + p.alpha + ')';
        ctx.beginPath(); ctx.arc(p.x, p.y, p.width * 0.9, 0, Math.PI * 2); ctx.fill();
      }
      if (p.x > W + 200) particles.splice(i, 1);
    }
    if (particles.length < MAX && Math.random() < 0.18) particles.push(spawn());
    if (running) raf = requestAnimationFrame(loop);
  }
  var scheduled = false;
  window.addEventListener('resize', function() {
    if (scheduled) return; scheduled = true;
    requestAnimationFrame(function() { resize(); scheduled = false; });
  });
  resize();
  for (var i = 0; i < 12; i++) { var p = spawn(); p.x = Math.random() * W; particles.push(p); }
  var start = function() { if (running) return; running = true; lastT = performance.now(); raf = requestAnimationFrame(loop); };
  var stop  = function() { running = false; cancelAnimationFrame(raf); };
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) { e.isIntersecting ? start() : stop(); });
  }, { rootMargin: '100px' });
  io.observe(canvas);
})();

/* ── CTA canvas: radial speed streaks ───────────────────────────────── */
(function () {
  var canvas = document.getElementById('ctaFx');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var DPR = Math.min(window.devicePixelRatio || 1, 2);
  var W = 0, H = 0, cx = 0, cy = 0;
  var particles = [];
  var MAX = 90, running = false, raf = 0;

  function resize() {
    var rect = canvas.getBoundingClientRect();
    W = canvas.width  = Math.max(1, rect.width  * DPR);
    H = canvas.height = Math.max(1, rect.height * DPR);
    cx = W / 2; cy = H / 2;
  }
  function spawn() {
    var angle = Math.random() * Math.PI * 2;
    var speed = (1.2 + Math.random() * 4.5) * DPR;
    var r0 = (20 + Math.random() * 40) * DPR;
    return {
      x: cx + Math.cos(angle) * r0, y: cy + Math.sin(angle) * r0,
      vx: Math.cos(angle) * speed, vy: Math.sin(angle) * speed,
      length: (50 + Math.random() * 140) * DPR,
      width: (0.5 + Math.random() * 1.4) * DPR,
      lime: true,
      alpha: 0.4 + Math.random() * 0.35,
    };
  }
  var lastT = 0;
  function loop(t) {
    var dt = Math.min(50, t - lastT) / 16.67; lastT = t;
    ctx.fillStyle = 'rgba(10,12,19,0.18)'; ctx.fillRect(0, 0, W, H);
    for (var i = particles.length - 1; i >= 0; i--) {
      var p = particles[i]; p.x += p.vx * dt; p.y += p.vy * dt;
      var mag = Math.hypot(p.vx, p.vy) || 1;
      var dx = (-p.vx / mag) * p.length, dy = (-p.vy / mag) * p.length;
      var grad = ctx.createLinearGradient(p.x + dx, p.y + dy, p.x, p.y);
      var col = FC_LIME_RGB;
      grad.addColorStop(0, 'rgba(' + col + ',0)');
      grad.addColorStop(0.6, 'rgba(' + col + ',' + (p.alpha * 0.6) + ')');
      grad.addColorStop(1, 'rgba(' + col + ',' + p.alpha + ')');
      ctx.strokeStyle = grad; ctx.lineWidth = p.width; ctx.lineCap = 'round';
      ctx.beginPath(); ctx.moveTo(p.x + dx, p.y + dy); ctx.lineTo(p.x, p.y); ctx.stroke();
      if (p.lime) {
        ctx.fillStyle = 'rgba(' + col + ',' + p.alpha + ')';
        ctx.beginPath(); ctx.arc(p.x, p.y, p.width * 0.9, 0, Math.PI * 2); ctx.fill();
      }
      if (p.x < -200 || p.x > W + 200 || p.y < -200 || p.y > H + 200) particles.splice(i, 1);
    }
    if (particles.length < MAX && Math.random() < 0.32) particles.push(spawn());
    if (running) raf = requestAnimationFrame(loop);
  }
  var scheduled = false;
  window.addEventListener('resize', function() {
    if (scheduled) return; scheduled = true;
    requestAnimationFrame(function() { resize(); scheduled = false; });
  });
  resize();
  for (var i = 0; i < 24; i++) {
    var p = spawn(); p.x += p.vx * (Math.random() * 30); p.y += p.vy * (Math.random() * 30);
    particles.push(p);
  }
  var start = function() { if (running) return; running = true; lastT = performance.now(); raf = requestAnimationFrame(loop); };
  var stop  = function() { running = false; cancelAnimationFrame(raf); };
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) { e.isIntersecting ? start() : stop(); });
  }, { rootMargin: '100px' });
  io.observe(canvas);
})();

/* ── FAQ accordion (smooth height) ─────────────────────────────────── */
(function () {
  document.querySelectorAll('.fc-faq-item').forEach(function (item) {
    var summary = item.querySelector('summary');
    var body    = item.querySelector('.fc-faq-body');
    if (!summary || !body) return;
    summary.addEventListener('click', function (e) {
      e.preventDefault();
      var isOpen = item.hasAttribute('open');
      if (isOpen) {
        body.style.height = body.scrollHeight + 'px';
        requestAnimationFrame(function () { body.style.height = '0px'; });
        body.addEventListener('transitionend', function te() {
          item.removeAttribute('open'); body.style.height = '';
          body.removeEventListener('transitionend', te);
        }, { once: true });
      } else {
        /* close siblings */
        var list = item.closest('.fc-faq-list');
        if (list) list.querySelectorAll('.fc-faq-item[open]').forEach(function (other) {
          var ob = other.querySelector('.fc-faq-body');
          ob.style.height = ob.scrollHeight + 'px';
          requestAnimationFrame(function () { ob.style.height = '0px'; });
          ob.addEventListener('transitionend', function te() {
            other.removeAttribute('open'); ob.style.height = '';
            ob.removeEventListener('transitionend', te);
          }, { once: true });
        });
        item.setAttribute('open', '');
        body.style.height = '0px';
        requestAnimationFrame(function () { body.style.height = body.scrollHeight + 'px'; });
        body.addEventListener('transitionend', function te() {
          body.style.height = ''; body.removeEventListener('transitionend', te);
        }, { once: true });
      }
    });
  });
})();

/* ── Feature carousel ───────────────────────────────────────────────── */
(function () {
  document.querySelectorAll('[data-fc-feat-carousel]').forEach(function (root) {
    var track    = root.querySelector('.fc-feat-track');
    var items    = track ? Array.from(track.children) : [];
    var dotsWrap = root.querySelector('[data-fc-feat-dots]');
    if (!track || items.length === 0) return;

    var index = 0, timer = null, INTERVAL = 3600;

    function visibleCount() {
      var itemW = items[0].getBoundingClientRect().width;
      var viewW = root.getBoundingClientRect().width;
      return Math.max(1, Math.round(viewW / itemW));
    }
    function maxIndex() { return Math.max(0, items.length - visibleCount()); }
    function step() {
      var stride = items[1] ? (items[1].offsetLeft - items[0].offsetLeft) : items[0].getBoundingClientRect().width;
      track.style.transform = 'translateX(' + (-index * stride) + 'px)';
      syncDots();
    }
    function buildDots() {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      for (var i = 0, count = maxIndex() + 1; i < count; i++) {
        (function (i) {
          var b = document.createElement('button');
          b.className = 'fc-feat-dot' + (i === index ? ' on' : '');
          b.setAttribute('aria-label', 'Слайд ' + (i + 1));
          b.addEventListener('click', function () { index = i; step(); restart(); });
          dotsWrap.appendChild(b);
        })(i);
      }
    }
    function syncDots() {
      if (!dotsWrap) return;
      Array.from(dotsWrap.children).forEach(function (d, i) { d.classList.toggle('on', i === index); });
    }
    function advance() { index = index >= maxIndex() ? 0 : index + 1; step(); }
    function start() { stop(); timer = setInterval(advance, INTERVAL); }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }
    function restart() { start(); }

    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);

    var rAF;
    window.addEventListener('resize', function () {
      cancelAnimationFrame(rAF);
      rAF = requestAnimationFrame(function () {
        if (index > maxIndex()) index = maxIndex();
        buildDots(); step();
      });
    });

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { e.isIntersecting ? start() : stop(); });
    }, { threshold: 0.2 });
    io.observe(root);

    buildDots(); step();
  });
})();

/* ── Hero counter shimmer on scroll ─────────────────────────────────── */
(function () {
  var n = document.getElementById('heroNum');
  if (!n) return;
  var raf;
  var update = function() {
    var y = Math.min(1, window.scrollY / 600);
    n.textContent = Math.round(55 - y * 13).toString().padStart(2, '0');
  };
  window.addEventListener('scroll', function() {
    if (!raf) raf = requestAnimationFrame(function() { update(); raf = null; });
  }, { passive: true });
})();
