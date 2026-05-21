(function () {
  var nav = document.querySelector('.mkt-nav');
  if (!nav) return;
  function update() {
    nav.classList.toggle('scrolled', window.scrollY > 10);
  }
  window.addEventListener('scroll', update, { passive: true });
  update();
})();
