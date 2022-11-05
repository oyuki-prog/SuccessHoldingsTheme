$(window).on("load", function(){
  jQuery(function($){
    let nameFlag = false;
    let kanaFlag = false;
    let telFlag = false;
    let emailFlag = false;
    let municipalitiesFlag = false;

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

    function requireCheck(){
      nameFlag = ($("#name").val() == "") ? false : true;
      kanaFlag = ($("#kana").val() === "") ? false : true;
      telFlag = ($("#tel").val() === "") ? false : true;
      emailFlag = ($("#email").val() === "") ? false : true;
      municipalitiesFlag = ($("#municipalities").val() === "") ? false : true;
      if(nameFlag && kanaFlag && telFlag && emailFlag && municipalitiesFlag) {
        buttonActive = true;
      } else {
        buttonActive = false;
      }
      if( buttonActive ) {
        $('.p-form__btnEntry').addClass("c-btn");
      }else{
        $('.p-form__btnEntry').removeClass("c-btn");
      }
    }
  })
})