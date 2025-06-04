document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.header__nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('nav--open');
    });
  }

  document.querySelectorAll('.accordion-header').forEach(function (header) {
    header.addEventListener('click', function () {
      var expanded = header.getAttribute('aria-expanded') === 'true';
      document.querySelectorAll('.accordion-header[aria-expanded="true"]').forEach(function (open) {
        if (open !== header) {
          open.setAttribute('aria-expanded', 'false');
        }
      });
      header.setAttribute('aria-expanded', expanded ? 'false' : 'true');
    });
  });
});
