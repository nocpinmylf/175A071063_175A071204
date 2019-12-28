$(document).ready(function() {
  $("a").on("click", function() {
    if ($(this).hasClass('show')) {
			alert();
      document.getElementsByClassName("active").setAttribute('aria-expanded', 'false');
    }
  });
});
