document.addEventListener('DOMContentLoaded', function () {
  var button = document.querySelector('.menu-toggle');
  var nav = document.querySelector('.main-nav');
  if (!button || !nav) return;
  button.addEventListener('click', function () {
    var open = nav.classList.toggle('is-open');
    button.setAttribute('aria-expanded', open ? 'true' : 'false');
    button.setAttribute('aria-label', open ? 'Đóng menu' : 'Mở menu');
  });
});
