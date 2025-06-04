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

  var userToggle = document.querySelector('.user-dropdown__toggle');
  var userDropdown = document.querySelector('.user-dropdown');
  if (userToggle && userDropdown) {
    userToggle.addEventListener('click', function (e) {
      e.preventDefault();
      userDropdown.classList.toggle('open');
    });

    document.addEventListener('click', function (e) {
      if (!userDropdown.contains(e.target)) {
        userDropdown.classList.remove('open');
      }
    });
  }
});
