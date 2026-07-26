// ProPresence Digital - shared UI script
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.nav-toggle');
  const links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', () => links.classList.toggle('open'));
  }
  const topBtn = document.querySelector('.floating .top');
  if (topBtn) {
    topBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }
  document.querySelectorAll('form[data-contact]').forEach(f => {
    f.addEventListener('submit', e => {
      e.preventDefault();
      alert('Thanks! We will get back to you within 24 hours.');
      f.reset();
    });
  });
});
