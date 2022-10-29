$(window).on("load", function () {
  jQuery(function ($) {
    const hamburger = $("#js-hamburger");
    const nav = $("#js-nav");
    const fadein = $(".fadein");
    const line = $(".c-hamburger__line");
    const fixed = $(".fix");

    hamburger.on("click", function () {
      hamburger.toggleClass("active");
      nav.toggleClass("active");
      line.toggleClass("active");
      fixed.toggleClass("active");

      fadein.each(function (i, element) {
        setTimeout(function () {
          console.log("$(element)f: ", $(element));
          $(element).toggleClass("active");
        }, i * 200);
      });
    });
  });
});
