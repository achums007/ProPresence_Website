document.addEventListener('DOMContentLoaded', function () {
  var toggleBtn = document.getElementById('mobile-menu-toggle');
  var mobileMenu = document.getElementById('mobile-menu');
  
  if (toggleBtn && mobileMenu) {
    // Close menu when clicking outside of it
    document.addEventListener('click', function (e) {
      if (!mobileMenu.contains(e.target) && e.target !== toggleBtn && !toggleBtn.contains(e.target)) {
        mobileMenu.classList.add('hidden');
      }
    });
  }
  
  // Back to top functionality
  document.addEventListener('click', function (e) {
    var top = e.target.closest('[aria-label="Back to top"]');
    if (top) window.scrollTo({ top: 0, behavior: 'smooth' });
  });
});
