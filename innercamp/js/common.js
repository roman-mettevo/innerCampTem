document.addEventListener('DOMContentLoaded', function(){
  jQuery(document).ready( function($){
      $('.sign-up__').click(function(e) {
           $.fancybox.close();
    //     $('.fancybox-close').click();

         $.fancybox.open({ src : '#sign-up' }); 
      });  
      $('.log-in__').click(function(e) {
             $.fancybox.close(); 
    //     $('.fancybox-close').click();

         $.fancybox.open({ src : '#log-in' }); 
      });
  });
});



