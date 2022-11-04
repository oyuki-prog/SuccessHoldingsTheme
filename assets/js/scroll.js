jQuery(function($){
  $(window).on("load", function(){
    
    let scrollTop = $("#scroll").offset().top - 150;
    $(window).scroll(function () {
      let winScrollTop = $(this).scrollTop();
      PageTopCheck(winScrollTop, scrollTop);
    });
  })

  function PageTopCheck(topY, scrollY) {
    alert("ok")
    if (topY >= scrollY) {
      $('.p-topScroll__text--message').removeClass('p-topScroll__view');
      $('.p-topScroll__text--top').addClass('p-topScroll__view');
    } else {
      $('.p-topScroll__text--top').removeClass('p-topScroll__view');
      $('.p-topScroll__text--message').addClass('p-topScroll__view');
    }
  }
})

// jQuery(function ($) {
//   $(window).on('load', function () {
//     let url =location.protocol + "//" + location.host + location.pathname + location.search;
//     if (url.endsWith('.co.jp') || url.endsWith('.co.jp/') || url.endsWith('recruit/')) {
//       let scrollTop = $("#scroll").offset().top - 150;
//       $(window).scroll(function () {
//         let winScrollTop = $(this).scrollTop();
//         PageTopCheck(winScrollTop, scrollTop);
//       });
//     };

//     $('.p-hamburger__item a').each(function () {
//       var $href = $(this).attr('href');
//       if (location.href.match($href)) {
//         $(this).addClass('current');
//       } else {
//         $(this).removeClass('current');
//       }
//     });

//     function PageTopCheck(topY, scrollY) {
//       if (topY >= scrollY) {
//         $('.p-scroll__text--message').removeClass('p-scroll__view');
//         $('.p-scroll__text--top').addClass('p-scroll__view');
//       } else {
//         $('.p-scroll__text--top').removeClass('p-scroll__view');
//         $('.p-scroll__text--message').addClass('p-scroll__view');
//       }
//     }
//   });

//   $('.p-hamburger__button').on('click', function () {
//     $('body').toggleClass("is-open")
//   });

//   $(function () {
//     $('.p-topService__list > li > a').hover(function () {
//       if (window.matchMedia('(min-width:769px)').matches && !window.matchMedia('(hover: none)').matches) {
//         var index = $('.p-topService__list > li > a').index($(this));

//         $('.p-topService__img.isShow').removeClass('isShow');
//         $('.p-topService__img').eq(index).addClass('isShow');

//       }
//     });

//     if ($('.p-topService__img').length > 0) {
//       $('.p-topService__img').eq(0).addClass('isShow');

//       if (window.matchMedia('(max-width:768px)').matches || window.matchMedia('(hover: none)').matches) {
//         $('.p-topService__list > li > a').eq(0).addClass('isShow');

//       }
//     }

//     if (window.matchMedia('(max-width:768px)').matches && $('.p-topService__img').length > 0) {

//       setInterval(function () {
//         var index = $('.p-topService__img').index($('.p-topService__img.isShow')),
//           next = index + 1;

//         if (next === $('.p-topService__img').length) {
//           next = 0;
//         }

//         $('.p-topService__list > li > a.isShow').removeClass('isShow');
//         $('.p-topService__list > li > a').eq(next).addClass('isShow');

//         $('.p-topService__img.isShow').removeClass('isShow');
//         $('.p-topService__img').eq(next).addClass('isShow');


//       }, 2000);
//     }
//   });
// });

