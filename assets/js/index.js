$(window).on("load", function () {
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