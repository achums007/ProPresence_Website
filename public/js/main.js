document.addEventListener('click', function (e) {
  var t = e.target.closest('[aria-label="Toggle menu"]');
  if (t) { var m = document.querySelector('header + div, header .lg\\:hidden'); }
  var top = e.target.closest('[aria-label="Back to top"]');
  if (top) window.scrollTo({ top: 0, behavior: 'smooth' });
});
