$(document).ready(function() {
  $(".list-sidebar > li a").click(function(event) {
    if (!$(this).parent().hasClass("show")){
      $("ul").collapse("hide");
    }
  });
});
