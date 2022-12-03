jQuery(function ($) {
  // loader表示
  $('body').append(
    '<div class="c-loading"><div class="c-loading__origin"></div><p class="c-loading__text">Loading...</p></div>'
  );
  $(window).on("load", function () {
    // loader非表示
    $('.c-loading').addClass('c-loading__completed');
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
  });
});