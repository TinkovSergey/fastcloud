/* CTA section: radial speed-streaks (lime packets exploding outward, center masked) */
(function () {
  const canvas = document.getElementById('ctaFx');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  const DPR = Math.min(window.devicePixelRatio || 1, 2);
  let W = 0, H = 0, cx = 0, cy = 0;
  const particles = [];
  const MAX = 90;
  let running = false;
  let raf = 0;

  function resize() {
    const rect = canvas.getBoundingClientRect();
    W = canvas.width  = Math.max(1, rect.width  * DPR);
    H = canvas.height = Math.max(1, rect.height * DPR);
    cx = W / 2; cy = H / 2;
  }
  function spawn() {
    const angle = Math.random() * Math.PI * 2;
    const speed = (1.2 + Math.random() * 4.5) * DPR;
    const r0 = (20 + Math.random() * 40) * DPR;
    const isLime = Math.random() < 0.75;
    return {
      x: cx + Math.cos(angle) * r0,
      y: cy + Math.sin(angle) * r0,
      vx: Math.cos(angle) * speed,
      vy: Math.sin(angle) * speed,
      length: (50 + Math.random() * 140) * DPR,
      width: (0.5 + Math.random() * 1.4) * DPR,
      lime: isLime,
      alpha: isLime ? 0.5 + Math.random() * 0.35 : 0.1 + Math.random() * 0.18,
    };
  }
  let lastT = 0;
  function loop(t) {
    const dt = Math.min(50, t - lastT) / 16.67;
    lastT = t;
    ctx.fillStyle = 'rgba(10,12,19,0.18)';
    ctx.fillRect(0, 0, W, H);

    for (let i = particles.length - 1; i >= 0; i--) {
      const p = particles[i];
      p.x += p.vx * dt;
      p.y += p.vy * dt;
      const mag = Math.hypot(p.vx, p.vy) || 1;
      const dx = (-p.vx / mag) * p.length;
      const dy = (-p.vy / mag) * p.length;
      const grad = ctx.createLinearGradient(p.x + dx, p.y + dy, p.x, p.y);
      const col = p.lime ? '196,255,61' : '244,245,249';
      grad.addColorStop(0,   `rgba(${col},0)`);
      grad.addColorStop(0.6, `rgba(${col},${p.alpha * 0.6})`);
      grad.addColorStop(1,   `rgba(${col},${p.alpha})`);
      ctx.strokeStyle = grad;
      ctx.lineWidth = p.width;
      ctx.lineCap = 'round';
      ctx.beginPath();
      ctx.moveTo(p.x + dx, p.y + dy);
      ctx.lineTo(p.x, p.y);
      ctx.stroke();
      if (p.lime) {
        ctx.fillStyle = `rgba(${col},${p.alpha})`;
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.width * 0.9, 0, Math.PI * 2);
        ctx.fill();
      }
      if (p.x < -200 || p.x > W + 200 || p.y < -200 || p.y > H + 200) particles.splice(i, 1);
    }
    if (particles.length < MAX && Math.random() < 0.32) particles.push(spawn());
    if (running) raf = requestAnimationFrame(loop);
  }
  let scheduled = false;
  window.addEventListener('resize', () => {
    if (scheduled) return;
    scheduled = true;
    requestAnimationFrame(() => { resize(); scheduled = false; });
  });
  resize();
  for (let i = 0; i < 24; i++) {
    const p = spawn();
    p.x += p.vx * (Math.random() * 30);
    p.y += p.vy * (Math.random() * 30);
    particles.push(p);
  }
  // Pause when off-screen
  const start = () => { if (running) return; running = true; lastT = performance.now(); raf = requestAnimationFrame(loop); };
  const stop  = () => { running = false; cancelAnimationFrame(raf); };
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => e.isIntersecting ? start() : stop());
  }, { rootMargin: '100px' });
  io.observe(canvas);
})();
