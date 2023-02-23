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
    
      $('.read-more').on('click', function () {
        this.parentNode.classList.toggle('active');
      });

      $('.see-more-button').click(function () {
        $(this).parents('.splide-wrapper').find('.splide__slide:not(.active)').eq(2).addClass('active');
        // console.log($(this).parents('.splide-wrapper').find('.splide__slide:not(.active)').eq(2).length);
        if (!($(this).parents('.splide-wrapper').find('.splide__slide:not(.active)').eq(2).length)) {
        this.parentNode.style.display = 'none';
        }
      });
    
  });
});



