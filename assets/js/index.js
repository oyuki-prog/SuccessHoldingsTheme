$(window).on("load", function () {
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

  $(".slider").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    vertical: true,
    verticalSwiping: true,
    arrows: false,
  });

  //以下のコードはニュースティッカーを実装する際の枠内に文字が収まらないときに3点リーダーを実装するアイデア。完全にはレスポンシブに対応できないためボツ
  // $(".p-topNews__link").each(function() {
  //   var max_length = 25; // ここで制限したい文字数を指定する
  //   if($(this).text().length > max_length) {
  //     var truncated = $(this).text().substr(0,max_length) + '...';
  //     $(this).text(truncated);
  //   }
  // });
});
