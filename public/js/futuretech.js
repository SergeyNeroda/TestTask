document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.getElementById('nav-toggle');
  if (toggle) {
    toggle.addEventListener('click', function () {
      document.querySelector('.header__nav').classList.toggle('nav--open');
    });
  }
});
