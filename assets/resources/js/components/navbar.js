import jQuery from "jquery";

(function($) {
  $("#main-nav").on("click", ".menu-item.dropdown", function() {
    $(this).toggleClass("is-active");
  });
  $("#hamburguer-mobile").on("click", function(e) {
    e.preventDefault();
    $("#menu-mobile").addClass("is-active");
    $("html").css("overflow", "hidden");
  });
  $("#menu-mobile").on("click", ".close-button", function() {
    $("#menu-mobile").removeClass("is-active");
    $("html").css("overflow-y", "auto");
  });
})(jQuery);
