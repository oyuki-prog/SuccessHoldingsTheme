$(function() {
  // loader表示
  $('body').append(
  '<div class="c-loading"><div class="c-loading__origin"></div><p class="c-loading__text">Loading...</p></div>'
  );

  $(window).on("load", function () {
    // loader非表示
    setTimeout(() => {
      $('.c-loading').addClass('c-loading__completed');
    }, 1000);

    // ハンバーガーメニューの切り替え
    const hamburger = $("#js-hamburger");
    const fadein = $(".fadein");
    const body = $("body");
    hamburger.on("click", function () {
      body.toggleClass("active");
      fadein.each(function (i, element) {
        setTimeout(function () {
          $(element).toggleClass("active");
        }, i * 200);
      });
    });

    // ニュースティッカー(wpとの相性のためjQuery再読み込み)
    jQuery(function($){
      $('.p-topNews__list').bxSlider({
        touchEnabled:false,
        mode: 'vertical',
        controls: false,
        auto: 'true',
        pager: false
      });
    });
  });
});
