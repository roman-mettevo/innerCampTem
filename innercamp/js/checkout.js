jQuery(document).ready(function ($) {
  let input = document.querySelector("#billing_phone");
  window.intlTelInput(input, {
    // any initialisation options go here
  });
  $(".page-template-tpl-checkout-page").on("click", ".back_step1", function(){
    $(".tab__check .tab__").removeClass("active");
    $(".tab__check .tab__").eq(0).addClass("active");
  });

  $("body").on("click", "#next_payment", function() {
    let isValid = true;
    let requiredFields = $(".validate-required input");
    requiredFields.each(function() {
      if($(this).val() == ""){
        $(this).addClass("woocommerce-invalid_field");
        isValid = false;
      }else if($(this).val() !== "" && $(this).hasClass("woocommerce-invalid_field")){
        $(this).removeClass("woocommerce-invalid_field");
      }
    });
    if(isValid){
      $(".tab__check .tab__").removeClass("active");
      $(".tab__check .tab__").eq(1).addClass("active");
      if($(".woocommerce-error").length !== 0){
        $(".woocommerce-error").remove();
      }
    }else if (!isValid && $(".woocommerce-error").length === 0){
      $(".woocommerce-billing-fields__field-wrapper").prepend( "<p class='woocommerce-error'>Wait! Please fill all required field.</p>" );
    }
  });

});

