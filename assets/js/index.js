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

    let companyFlag = false;
    let nameFlag = false;
    let kanaFlag = false;
    let telFlag = false;
    let emailFlag = false;
    let municipalitiesFlag = false;


    $("#company").change(function(){
      requireCheck();
    });
    $("#name").change(function(){
      requireCheck();
    });
    $("#kana").change(function(){
      requireCheck();
    });
    $("#tel").change(function(){
      requireCheck();
    });
    $("#email").change(function(){
      requireCheck();
    });
    $("#municipalities").change(function(){
      requireCheck();
    })

    
  });
});


