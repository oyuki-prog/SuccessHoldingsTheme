$(window).on("load", function () {
  jQuery(function ($) {
    const hamburger = $("#js-hamburger");
    const fadein = $(".fadein");
    // const triger = $(".triger");
    const body = $("body");

    hamburger.on("click", function () {
      body.toggleClass("active");

      fadein.each(function (i, element) {
        setTimeout(function () {
          $(element).toggleClass("active");
        }, i * 200);
      });
    });
    // ニュースティッカー
    $('.p-topNews__list').bxSlider({
      touchEnabled:false,
      mode: 'vertical',
      controls: false,
      auto: 'true',
      pager: false
    });
  });
});