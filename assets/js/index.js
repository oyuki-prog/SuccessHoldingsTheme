jQuery(function ($) {
  $(window).on("load", function () {
    const hamberger = $("#js-humberger");
    const nav = $("#js-nav");
    const fadein = $(".fadein");

    $hamMenu = hamberger.on("click", function () {
      hamberger.toggleClass("active");
      nav.toggleClass("active");

      fadein.each(function (i) {
        $(this)
          .delay(i * 200)
          .queue(function () {
            console.log("class: ", $(this).hasClass("active"));
            $(this).toggleClass("active");
          });
      });
    });
  });
});
