jQuery(function($){
  $(window).on("load", function(){
    let scrollTop = $("#scroll").offset().top - 150;
    $(window).on("scroll", function () {
      let winScrollTop = $(this).scrollTop();
      PageTopCheck(winScrollTop, scrollTop);
    });
  })
  function PageTopCheck(topY, scrollY) {

    if (topY >= scrollY) {
      $('.p-topScroll__text--message').removeClass('p-topScroll__view');
      $('.p-topScroll__text--top').addClass('p-topScroll__view');
    } else {
      $('.p-topScroll__text--top').removeClass('p-topScroll__view');
      $('.p-topScroll__text--message').addClass('p-topScroll__view');
    }
  }
})
