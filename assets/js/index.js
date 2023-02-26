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
});
