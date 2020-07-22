$(document).ready(function() {
  $(".page-scroller").on("click", ".nav-link", function(e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    if ($target[0]) {
      $("html, body").animate(
        {
          scrollTop: $target.offset().top,
        },
        1000,
        "swing"
      );
    } else {
      window.location.href = window.location.origin + target;
    }
  });
  $(".page-scroll").on("click", function(e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    if ($target[0]) {
      $("html, body").animate(
        {
          scrollTop: $target.offset().top,
        },
        1000,
        "swing"
      );
    } else {
      window.location.href = window.location.origin + target;
    }
  });
});
