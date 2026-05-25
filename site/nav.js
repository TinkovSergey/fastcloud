(function () {
  var nav = document.querySelector('.mkt-nav');
  if (!nav) return;

  /* scroll backdrop */
  function update() { nav.classList.toggle('scrolled', window.scrollY > 10); }
  window.addEventListener('scroll', update, { passive: true });
  update();

  /* burger menu */
  var burger = document.getElementById('navBurger');
  var links  = document.getElementById('navLinks');
  if (!burger || !links) return;

  burger.addEventListener('click', function () {
    var open = links.classList.toggle('open');
    burger.classList.toggle('open', open);
  });

  document.addEventListener('click', function (e) {
    if (!e.target.closest('.mkt-nav')) {
      links.classList.remove('open');
      burger.classList.remove('open');
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      links.classList.remove('open');
      burger.classList.remove('open');
    }
  });
})();
