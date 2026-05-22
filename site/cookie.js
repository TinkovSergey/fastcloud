(function () {
  if (localStorage.getItem('fc_cookie_consent')) return;

  var bar = document.createElement('div');
  bar.id = 'cookie-bar';
  bar.innerHTML =
    '<div id="cookie-bar-inner">' +
      '<div class="cookie-text">' +
        '<strong>Файлы cookie</strong> — мы используем их для корректной работы сайта, аналитики и персонализации контента. ' +
        '<a href="privacy.html">Политика конфиденциальности</a>' +
      '</div>' +
      '<div class="cookie-btns">' +
        '<button id="cookie-decline" class="btn btn-ghost btn-sm">Только необходимые</button>' +
        '<button id="cookie-accept" class="btn btn-primary btn-sm">Принять все</button>' +
      '</div>' +
    '</div>';
  document.body.appendChild(bar);

  requestAnimationFrame(function () {
    requestAnimationFrame(function () {
      bar.classList.add('visible');
    });
  });

  function dismiss(value) {
    localStorage.setItem('fc_cookie_consent', value);
    bar.classList.remove('visible');
    setTimeout(function () { bar.remove(); }, 350);
  }

  document.getElementById('cookie-accept').addEventListener('click', function () {
    dismiss('all');
  });
  document.getElementById('cookie-decline').addEventListener('click', function () {
    dismiss('necessary');
  });
})();
