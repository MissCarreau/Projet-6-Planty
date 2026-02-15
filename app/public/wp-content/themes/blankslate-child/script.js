document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.site-header');
  const btn = document.querySelector('.menu-toggle');
  const menu = document.getElementById('primary-menu');

  if (!header || !btn || !menu) return;

  btn.addEventListener('click', function () {
    const isOpen = header.classList.toggle('is-menu-open');
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });
});

