$(function() {
  // loader表示
  const URL = location.href
  if (!sessionStorage.getItem('access')) {
    //初回アクセス時の処理
    sessionStorage.setItem('access', 0);
    $('body').append(
    '<div class="c-loading"><div class="c-loading__origin"></div><p class="c-loading__text">Loading...</p></div>'
    );
  }

  $(window).on("load", function () {
    // loader非表示
    setTimeout(() => {
      $('.c-loading').addClass('c-loading__completed');
    }, 1000);

    // ハンバーガーメニューの切り替え
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