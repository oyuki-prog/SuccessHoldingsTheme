$(window).on("load", function () {
  jQuery(function ($) {
    const hamburger = $("#js-hamburger");
    const fadein = $(".fadein");
    const triger = $(".triger");

    hamburger.on("click", function () {
      triger.toggleClass("active");

      fadein.each(function (i, element) {
        setTimeout(function () {
          $(element).toggleClass("active");
        }, i * 200);
      });
    });
  });
});
