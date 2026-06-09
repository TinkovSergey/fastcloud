/* Auto-advancing feature carousel — steps one item at a time, loops, pauses on hover */
(function () {
  document.querySelectorAll('[data-feat-carousel]').forEach(function (root) {
    const track = root.querySelector('.feat-track');
    const items = Array.from(track.children);
    const dotsWrap = root.querySelector('[data-feat-dots]');
    if (!track || items.length === 0) return;

    let index = 0;
    let timer = null;
    const INTERVAL = 3600;

    function visibleCount() {
      const itemW = items[0].getBoundingClientRect().width;
      const viewW = root.getBoundingClientRect().width;
      return Math.max(1, Math.round(viewW / itemW));
    }
    function maxIndex() {
      return Math.max(0, items.length - visibleCount());
    }
    function step() {
      const itemW = items[0].getBoundingClientRect().width; // includes margin via offset
      const stride = items[1] ? (items[1].offsetLeft - items[0].offsetLeft) : itemW;
      track.style.transform = 'translateX(' + (-index * stride) + 'px)';
      syncDots();
    }
    function buildDots() {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      const count = maxIndex() + 1;
      for (let i = 0; i < count; i++) {
        const b = document.createElement('button');
        b.className = 'feat-dot' + (i === index ? ' on' : '');
        b.setAttribute('aria-label', 'Слайд ' + (i + 1));
        b.addEventListener('click', function () { index = i; step(); restart(); });
        dotsWrap.appendChild(b);
      }
    }
    function syncDots() {
      if (!dotsWrap) return;
      Array.from(dotsWrap.children).forEach(function (d, i) {
        d.classList.toggle('on', i === index);
      });
    }
    function advance() {
      index = index >= maxIndex() ? 0 : index + 1;
      step();
    }
    function start() { stop(); timer = setInterval(advance, INTERVAL); }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }
    function restart() { start(); }

    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);

    let rAF;
    window.addEventListener('resize', function () {
      cancelAnimationFrame(rAF);
      rAF = requestAnimationFrame(function () {
        if (index > maxIndex()) index = maxIndex();
        buildDots();
        step();
      });
    });

    // pause when off-screen
    const io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { e.isIntersecting ? start() : stop(); });
    }, { threshold: 0.2 });
    io.observe(root);

    buildDots();
    step();
  });
})();
