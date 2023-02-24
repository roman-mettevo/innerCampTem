jQuery(document).ready(function ($) {
  let input = document.querySelector("#billing_phone");
  window.intlTelInput(input, {
    // any initialisation options go here
  });
  $('.page-template-tpl-checkout-page').on("click", ".back_step1", function(){
    $('.tab__check .tab__').removeClass("active");
    $('.tab__check .tab__').eq(0).addClass("active");
  });
});