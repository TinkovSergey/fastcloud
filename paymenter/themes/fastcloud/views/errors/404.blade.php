<!DOCTYPE html>
<html lang="ru" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} — Страница не найдена</title>
    @vite(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme'))
    @include('layouts.colors')
    <link rel="stylesheet" href="{{ asset('fastcloud/marketing.css') }}">
    @if(config('settings.favicon'))
    <link rel="icon" href="{{ Storage::url(config('settings.favicon')) }}">
    @else
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @endif
    <style>
      .e404-wrap {
        position: relative; overflow: hidden;
        min-height: 100vh; display: flex; flex-direction: column;
        background:
          radial-gradient(ellipse 60% 50% at 50% 0%, rgba(32,181,235,.16) 0%, transparent 55%),
          radial-gradient(ellipse 70% 50% at 80% 100%, rgba(124,92,255,.16) 0%, transparent 50%),
          var(--fc-bg);
      }
      .e404-wrap::before {
        content: ''; position: absolute; inset: 0; pointer-events: none;
        background-image:
          linear-gradient(rgba(255,255,255,.022) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255,255,255,.022) 1px, transparent 1px);
        background-size: 80px 80px;
        mask-image: radial-gradient(ellipse at 50% 45%, #000 25%, transparent 75%);
      }
      .e404-fx {
        position: absolute; inset: 0; width: 100%; height: 100%;
        z-index: 0; pointer-events: none; mix-blend-mode: screen;
        mask-image: radial-gradient(ellipse 55% 60% at 50% 50%, transparent 0%, transparent 42%, rgba(0,0,0,.7) 66%, #000 92%);
        -webkit-mask-image: radial-gradient(ellipse 55% 60% at 50% 50%, transparent 0%, transparent 42%, rgba(0,0,0,.7) 66%, #000 92%);
      }
      .e404-top { position: relative; z-index: 2; padding: 28px 40px; display: flex; justify-content: center; }
      .e404-main {
        position: relative; z-index: 2; flex: 1;
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        text-align: center; padding: 40px 24px 80px;
      }
      .e404-eyebrow {
        font-family: var(--fc-mono); font-size: 12px; font-weight: 500;
        text-transform: uppercase; letter-spacing: .16em; color: var(--fc-text3);
        margin-bottom: 24px;
        display: inline-flex; align-items: center; gap: 9px;
      }
      .e404-eyebrow .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--fc-red); box-shadow: 0 0 9px var(--fc-red); }
      .e404-code {
        font-family: var(--fc-font);
        font-size: clamp(120px, 26vw, 320px); font-weight: 800;
        letter-spacing: -.05em; line-height: .82;
        color: var(--fc-text);
        position: relative;
      }
      .e404-code em {
        font-family: var(--fc-serif); font-style: italic; font-weight: 400;
        color: var(--fc-accent); font-size: 1.1em;
      }
      .e404-title {
        font-family: var(--fc-font);
        font-size: clamp(26px, 3.4vw, 40px); font-weight: 600;
        letter-spacing: -.025em; line-height: 1.25;
        margin-top: 20px; color: var(--fc-text);
      }
      .e404-title em { font-family: var(--fc-serif); font-style: italic; font-weight: 400; color: var(--fc-accent); font-size: 1.1em; }
      .e404-sub {
        font-size: 16px; color: var(--fc-text2); line-height: 1.6;
        max-width: 460px; margin: 18px auto 0;
      }
      .e404-ctas { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; margin-top: 36px; }
      .e404-links {
        display: flex; flex-wrap: wrap; gap: 6px 4px; justify-content: center;
        margin-top: 40px; font-family: var(--fc-mono); font-size: 12.5px; color: var(--fc-text3);
      }
      .e404-links a { color: var(--fc-text2); padding: 4px 10px; border-radius: 999px; transition: color .15s, background .15s; }
      .e404-links a:hover { color: var(--fc-accent); background: rgba(255,255,255,.04); }
      .e404-links span { color: var(--fc-text-dim); align-self: center; }
      @media (max-width: 575.98px) {
        .e404-top { padding: 22px 24px; }
        .e404-ctas { flex-direction: column; width: 100%; max-width: 280px; }
        .e404-ctas a { width: 100%; }
      }
    </style>
</head>
<body style="margin:0;padding:0;background:var(--fc-bg);">

<div class="e404-wrap">
  <canvas id="e404Fx" class="e404-fx"></canvas>

  <div class="e404-top">
    <a href="{{ route('home') }}" class="fc-auth-logo">
      <x-logo class="h-7 w-auto" />
    </a>
  </div>

  <main class="e404-main">
    <div class="e404-eyebrow"><span class="dot"></span>error 404 · страница не найдена</div>
    <div class="e404-code">4<em>0</em>4</div>
    <h1 class="e404-title">Эта страница <em>не поднялась.</em></h1>
    <p class="e404-sub">Похоже, адрес введён неверно или страница была удалена. Зато ваш сервер мы поднимем за&nbsp;55&nbsp;секунд.</p>

    <div class="e404-ctas">
      <a href="{{ route('home') }}" class="fc-btn-lime" style="padding:14px 28px;font-size:15px;">← На главную</a>
      <a href="{{ route('pricing') }}" class="fc-btn-ghost" style="padding:14px 28px;font-size:15px;">Тарифы</a>
    </div>

    <nav class="e404-links">
      <a href="{{ route('locations') }}">Локации</a><span>·</span>
      <a href="{{ route('contacts') }}">Контакты</a><span>·</span>
      <a href="{{ route('login') }}">Войти</a><span>·</span>
      <a href="/account">Панель</a>
    </nav>
  </main>
</div>

<script>
(function () {
  var canvas = document.getElementById('e404Fx');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var DPR = Math.min(window.devicePixelRatio || 1, 2);
  var W = 0, H = 0, cx = 0, cy = 0, particles = [], MAX = 90, running = false, raf = 0, lastT = 0;

  function resize() {
    var r = canvas.getBoundingClientRect();
    W = canvas.width = Math.max(1, r.width * DPR);
    H = canvas.height = Math.max(1, r.height * DPR);
    cx = W / 2; cy = H / 2;
  }
  function spawn() {
    var angle = Math.random() * Math.PI * 2;
    var speed = (1.2 + Math.random() * 4.5) * DPR;
    var r0 = (20 + Math.random() * 40) * DPR;
    var red = Math.random() < 0.78;
    return {
      x: cx + Math.cos(angle) * r0,
      y: cy + Math.sin(angle) * r0,
      vx: Math.cos(angle) * speed,
      vy: Math.sin(angle) * speed,
      length: (50 + Math.random() * 140) * DPR,
      width: (0.5 + Math.random() * 1.4) * DPR,
      red: red,
      alpha: red ? 0.5 + Math.random() * 0.35 : 0.1 + Math.random() * 0.18
    };
  }
  function loop(t) {
    var dt = Math.min(50, t - lastT) / 16.67; lastT = t;
    ctx.fillStyle = 'rgba(10,12,19,0.18)';
    ctx.fillRect(0, 0, W, H);
    for (var i = particles.length - 1; i >= 0; i--) {
      var p = particles[i];
      p.x += p.vx * dt; p.y += p.vy * dt;
      var mag = Math.hypot(p.vx, p.vy) || 1;
      var dx = (-p.vx / mag) * p.length;
      var dy = (-p.vy / mag) * p.length;
      var g = ctx.createLinearGradient(p.x + dx, p.y + dy, p.x, p.y);
      var col = p.red ? '255,84,112' : '244,245,249';
      g.addColorStop(0, 'rgba(' + col + ',0)');
      g.addColorStop(0.6, 'rgba(' + col + ',' + (p.alpha * 0.6) + ')');
      g.addColorStop(1, 'rgba(' + col + ',' + p.alpha + ')');
      ctx.strokeStyle = g; ctx.lineWidth = p.width; ctx.lineCap = 'round';
      ctx.beginPath(); ctx.moveTo(p.x + dx, p.y + dy); ctx.lineTo(p.x, p.y); ctx.stroke();
      if (p.red) {
        ctx.fillStyle = 'rgba(' + col + ',' + p.alpha + ')';
        ctx.beginPath(); ctx.arc(p.x, p.y, p.width * 0.9, 0, Math.PI * 2); ctx.fill();
      }
      if (p.x < -200 || p.x > W + 200 || p.y < -200 || p.y > H + 200) particles.splice(i, 1);
    }
    if (particles.length < MAX && Math.random() < 0.32) particles.push(spawn());
    if (running) raf = requestAnimationFrame(loop);
  }
  window.addEventListener('resize', function () { requestAnimationFrame(resize); });
  resize();
  for (var i = 0; i < 24; i++) {
    var p = spawn();
    p.x += p.vx * (Math.random() * 30);
    p.y += p.vy * (Math.random() * 30);
    particles.push(p);
  }
  running = true; lastT = performance.now(); raf = requestAnimationFrame(loop);
})();
</script>
</body>
</html>
