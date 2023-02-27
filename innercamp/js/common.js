document.addEventListener('DOMContentLoaded', function(){
  jQuery(document).ready( function($){
    
      $('.find-your-coach__grid-map-switch>li').click(function() {
        
//          $('body').addClass("open__menu");

          var num_data = $(this).data('number');

          $('.find-your-coach__switch-item').removeClass('active');
          $('.find-your-coach__grid-map-switch>li:nth-child('+ num_data + ')').addClass('active');
        
         if($('.find-your-coach__grid-map-switch>li:nth-child(2)').hasClass('active')){
             $('section.find-your-coach .find-your-coach__list').addClass('none');
            $('#map-canvas').removeClass('none');
         }
                 
         if($('.find-your-coach__grid-map-switch>li:nth-child(1)').hasClass('active')){
             $('section.find-your-coach .find-your-coach__list').removeClass('none');
              $('#map-canvas').addClass('none');
         }
      });  
    
    
        $('[type="submit"]').click(function() {
          
            var invalid = $('.wpcf7-form').hasClass('invalid');
            var error = $('.wpcf7-form').hasClass('error');
            if (!invalid && !error) {
                return true;
            }else{
              
             $.fancybox.open({
                src  : '#modal-thank', 

                 opts : {
                    afterShow : function( instance, current ) {
                        console.info( 'done!' );
                    }
                },

               });
              
               $('form')[0].reset();

            }
          
        });  
          
          
    
        $('.form__skroll').click(function() {
          $('.careers__menu').removeClass('open');
        });  
    
            $('.see-detail_open').click(function() {
        
          $('body').addClass("open__menu");

          var num_data = $(this).data('info');

          $('.careers__menu').removeClass('open');
          $('#infor_' +num_data).addClass('open');

      });      
    
       $('.see-detail_open').click(function() {
        
          $('body').addClass("open__menu");

          var num_data = $(this).data('info');

          $('.careers__menu').removeClass('open');
          $('#infor_'+ num_data).addClass('open');

      });  
    
    
    
      $('.open__us').click(function() {
        
          $('body').addClass("open__menu");

          var num_data = $(this).data('open');

          $('.user__menu__info').removeClass('open');
          $('#'+ num_data).addClass('open');

      });  
    
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
    
// ===========================================================
// SCROLL
// ===========================================================
    
    
      $('.read-more').on('click', function () {
  this.parentNode.classList.toggle('active');
  });
  

    // NAVIGATION MENU LEFT


   
        $('.filter__open').click(function() {
            $('.filter__by').addClass('open');
            $('body').addClass('open__menu');
        });   
  
  
        $('.open__').click(function() {
            $('.right__menu').addClass('open');
            $('body').addClass('open__menu');
        });


        $('.profile').click(function() {
            $(".right__menu").removeClass("open");
            $('.checkout__menu').removeClass('open');
          
            $('.profile__menu').addClass('open');
            $('body').addClass('open__menu');
        });

 
        $('.cart').click(function() {
            $(".right__menu").removeClass("open");
            $('.profile__menu').removeClass('open');
            $('.checkout__menu').addClass('open');
          
            $('body').addClass('open__menu');
        });

  
  
  
  

    $(document).mouseup(function(e) { // web document click event
        var div = $(".right__menu"); // here we specify the ID of the element
        if (!div.is(e.target) // if the click was not on our block
            &&
            div.has(e.target).length === 0) { // and not by its children
            $(".right__menu").removeClass("open");
//            $('body').removeClass("open__menu");
        }
    });
  

  
    $(document).mouseup(function(e) { // web document click event
        var div = $(".profile__menu"); // here we specify the ID of the element
        if (!div.is(e.target) // if the click was not on our block
            &&
            div.has(e.target).length === 0) { // and not by its children
            $(".profile__menu").removeClass("open");
//            $('body').removeClass("open__menu");
        }
    });
  

    $('.right__menu .menu__>ul>li').click(function() {
        $(this).toggleClass('open');
    });
    
    $('header[main] .naviget__ .box__user a.user').click(function() {
        $('header[main] .naviget__ .box__user').toggleClass('open');
    });
  
  
  
  
    $(document).mouseup(function(e) { // web document click event
        var div = $('header .box__user'); // here we specify the ID of the element
        if (!div.is(e.target) // if the click was not on our block
            &&
            div.has(e.target).length === 0) { // and not by its children
            $('header .box__user').removeClass("open");
        }
    });

    $('.close__').click(function() {
        $('.profile__menu').removeClass('open');
        $(".right__menu").removeClass("open");
        $(".checkout__menu").removeClass("open");
        $(".filter__by").removeClass("open");
        $(".user__menu").removeClass("open");
        $(".user__menu__info").removeClass("open");
        $(".careers__menu").removeClass("open");
      

        $('body').removeClass("open__menu");
    });
  
    $("section").click(function() {
    
        $('.profile__menu').removeClass('open');
        $(".right__menu").removeClass("open");
        $(".checkout__menu").removeClass("open");
        $(".filter__by").removeClass("open");
        $(".user__menu").removeClass("open");
      

        $('body').removeClass("open__menu");
    
    });

  
// =========================================================== 
// Scroll BAR
// ===========================================================  
    

    $(window).scroll(function() {
        // calculate the percentage the user has scrolled down the page
        var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

        $('.bar-long').css('width', scrollPercent + "%");

    });
    
 
// =========================================================== 
// END Scroll BAR 
// ===========================================================
    
    
    
    
// menu scroll
  
//Function to mark an item from a section width a css class.
function menuOnScroll(mySection, myMenu, myClass) {
  $(window).scroll(function(){
    var elScroll = $(window).scrollTop();
    $(mySection).each(function(i){
      if ($(this).offset().top <= elScroll) {
        $(myMenu).removeClass(myClass);
        $(myMenu).eq(i).addClass(myClass);
      }
    });
  });
}
//Call function.
//First parameter will be the section that we want to go.
//Second will be the item that will change his css.
//Third will be the class css to add to the item( Our second parameter) Is IMPORTAT to note that we must to skip the dot of our class.
menuOnScroll('.scroll__init','[data-scroll] ul li', 'active');



//Function to animate the scroll when click on a menu item.
//IMPORTANT. This function is only use for animate the scroll, you could skip it if you want.
function scrollToAnyPoint (navItem) {
  var getAttr;
  $(navItem).click(function(e){
    e.preventDefault();
    getAttr = $(this).attr('href');
    var toSection = $(getAttr).offset().top;
    $("html, body").animate({scrollTop:toSection}, 75)
  });
}
//Call Function
scrollToAnyPoint('[data-scroll] ul li a');  
  

  
  
  // 2.3 Breathwork Levels 1+2*
  
      $('.subitem-list .read-more').on('click', function() {
        $(this).toggleClass('active');
        $('.bottom-block').toggleClass('open');
      } );
  
  
// bodywork-first__5

    if (document.querySelector('.bodywork-first__5 .tab-nav')) {
        let bodyworkSection5__tabs = [].slice.call($('.bodywork-first__5 .col .tab-nav-item'));
        let bodyworkSection5__content = [].slice.call($('.bodywork-first__5 .col .tab-content'));
        $('.bodywork-first__5 .col .tab-nav-item').on('click', function () {
            clearAllTab();
            this.classList.toggle('active');

            openTab(this);
        });
        function clearAllTab() {
            bodyworkSection5__tabs.forEach(element => {
                element.classList.remove('active');
            });
            bodyworkSection5__content.forEach(element => {
                element.classList.remove('active');
            });
        }
        function openTab(item) {
            let index = bodyworkSection5__tabs.indexOf(item);
            bodyworkSection5__content[index].classList.add('active');
        }
    }
    if ($('.bodywork-first__10 .column-price-nav-item')) {
        let priceNavItems = [].slice.call($('.bodywork-first__10 .column-price-nav-item'));
        $('.bodywork-first__10 .column-price-nav-item').on('click', function () {
            priceNavItems.forEach(item => {
                item.classList.remove('active')
            })
            this.classList.add('active');
        })
    }

  
  
$('.password__').click(function(e) {
  var x = document.querySelector(".password__");
      
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
 });
  
    // TANTRA 


  $('.feature-list .read-more').on('click', function() {
    $(this).toggleClass('active');
    $('.right-list').toggleClass('open');
  });

  $('.why-us-content .read-more').on('click', function() {
    $(this).toggleClass('active');
    $('.why-us-bottom-content').toggleClass('open');
  });
  
  
  // TANTRA 3
  
  $('.left-small-block .price-item').click(function (e) {
      $('.left-small-block .price-item.active').removeClass('active');
      $(this).toggleClass('active');
  });

  $('.middle-small-block .price-item').click(function (e) {
    $('.middle-small-block .price-item.active').removeClass('active');
    $(this).toggleClass('active');
  });

  $('.upgrade').on('click', function() {
      $('.modal-wrap').addClass('active');
  });

  $('.upgrade-close').on('click', function() {
      $('.modal-wrap').removeClass('active');
  });
  
  
  //  left__menu__scroll

    $('.left__menu__scroll ul li a').on('click', function () {
      $('.left__menu__scroll ul li').removeClass('active');
      
      $(this).parent().addClass('active');
      
    })
  
    // workshop - single
  
  
  $('.drop-button').on('click', function () {
     this.parentNode.classList.toggle('active');
  })
  if ($('.workshop__8 .agreement-list')) {
    let agreementsList = [].slice.call($('.workshop__8 .agreement-item'));
    agreementsList.forEach(item => {
    if (item.innerText.length > 170) {
    item.innerHTML = item.innerHTML + "<button type='button' class='agreement-readmore'>Read more</button>";
    }
    });

    $('.workshop__8 .agreement-readmore').on('click', function () {
        this.parentNode.classList.toggle('active');
    })
  }
  
  
    //   breathwork-levels-one-two

    $('.breathwork-levels-one-two__3 .tab__ .top__ ul li a').click(function(e) {
      
      var num_data = $(this).data('tab');
//        $(this).toggleClass('open');
//        $('.checkout__1 .block__content').toggleClass('active');
      $('.breathwork-levels-one-two__3 .tab__').removeClass('active');
      $('.breathwork-levels-one-two__3 .tab__ .top__ ul li a').removeClass('active');
      
      $('.breathwork-levels-one-two__3 .tab__:nth-child('+ num_data +')').addClass('active');
      $('.breathwork-levels-one-two__3 .tab__ .top__ ul li:nth-child('+ num_data +') a').addClass('active');
  });
  
  
  
    //  _tantra
  $('.left-small-block .price-item').click(function (e) {
      $('.left-small-block .price-item.active').removeClass('active');
      $(this).toggleClass('active');
  });

  $('.middle-small-block .price-item').click(function (e) {
    $('.middle-small-block .price-item.active').removeClass('active');
    $(this).toggleClass('active');
});

  $('.upgrade').on('click', function() {
      $('.modal-wrap').addClass('active');
  });

  $('.upgrade-close').on('click', function() {
      $('.modal-wrap').removeClass('active');
  });
  
  
    //  careers
    $('.see-detail').on('click', function() {
      $('.vacancy-description-block').addClass('active');
    });

    $('.close-block-position').on('click', function() {
        $('.vacancy-description-block').removeClass('active');
    });

  
    //  corporate
    $('.read-more').on('click', function () {
      this.parentNode.classList.toggle('active');
    })
  
  
  // Team breathwork
  
    $('.breathwork__2-15 .price-item').click(function (e) {
        $('.breathwork__2-15 .price-item.active').removeClass('active');
        $(this).toggleClass('active');
    });

    $('.upgrade').on('click', function() {
        $('.modal-wrap').addClass('active');
    });

    $('.upgrade-close').on('click', function() {
        $('.modal-wrap').removeClass('active');
    });

  
  // Team Pages
  
//    $('.coach-item .coach-photo').click(function(e) {
//       $('.mobile-coach-item').toggleClass('active');
//    });
//
//    $('.mobile-coach-item .close').on('click', function() {
//        $('.mobile-coach-item').removeClass('active');
//    });
  
  // Checkout Pages
  
  
    $('.checkout__1 .block__top .open__top').click(function(e) {
        $(this).toggleClass('open');
        $('.checkout__1 .block__content').toggleClass('active');
    });
  
    $('.checkout__1 .tab__check .next__menu a').click(function(e) {
      
      var num_data = $(this).data('num');
//        $(this).toggleClass('open');
//        $('.checkout__1 .block__content').toggleClass('active');
      $('.checkout__1 .tab__check>div').removeClass('active');
      $('.checkout__1 .tab__check>div:nth-child('+ num_data +')').addClass('active');
      
        $('.checkout__1 .step>.start>span').html(num_data);  
      
      if( num_data == '1'){
        $('.box__next>span').removeClass('check');
        $('.box__next>span:nth-child('+ num_data +')').addClass('orange');
        $('.box__next>span:nth-child(3)').removeClass('orange');
        $('.box__next>span:nth-child(2)').removeClass('orange');
        

        
      }else if( num_data == '2'){
        
        $('.box__next>span').removeClass('check');
        $('.box__next>span:nth-child(1)').addClass('check');
        $('.box__next>span').addClass('orange');
        $('.box__next>span:nth-child(3)').removeClass('orange');
        
      }else if( num_data == '3'){
        $('.box__next>span').removeClass('check');
        $('.box__next>span:nth-child(1)').addClass('check');
        $('.box__next>span:nth-child(2)').addClass('check');

        $('.box__next>span').addClass('orange');
//        $('.box__next>span:nth-child(3)').removeClass('orange');
      }
      
    });
  
  
  
    $('.checkout__1 .bundle[data-num="2"]').click(function(e){
      

      
      const inputIn = $('input[type="email"]').val();
      
//      localStorage.getItem('test') 
//      alert('1');
      
       localStorage.setItem("EMAIL", inputIn);
//      box__email
//      
//      #billing_email
      
//      alert( localStorage.getItem("EMAIL") );
        function func() {
        
          document.querySelector(".box__email .email__").innerHTML = localStorage.getItem("EMAIL");
        }
        setTimeout(func, 500);

//  window.location.href.split('#')[0];
    });
  
    $('.box__email>a[data-num="1"]').click(function(e){
      
            var num_data = $(this).data('num');

      $('.checkout__1 .tab__check>div').removeClass('active');
      $('.checkout__1 .tab__check>div:nth-child('+ num_data +')').addClass('active');
      
      $('.checkout__1 .step>.start>span').html(num_data);  
      
      if( num_data == '1'){
        
        $('.box__next>span').removeClass('check');
        $('.box__next>span:nth-child('+ num_data +')').addClass('orange');
        $('.box__next>span:nth-child(3)').removeClass('orange');
        $('.box__next>span:nth-child(2)').removeClass('orange');

      }
      
      
//         window.history.replaceState(null, null, url_param + param);
//      url + param)
  
//  window.location.href.split('#')[0]
      
         var num_data = $(this).data('num');
//        $(this).toggleClass('open');
//        $('.checkout__1 .block__content').toggleClass('active');
      $('.checkout__1 .tab__check>div').removeClass('active');
      $('.checkout__1 .tab__check>div:nth-child('+ num_data +')').addClass('active'); 
      
      
    });
  
  // experience
  
  
    $('.filter-toggle').click(function (e) {
        $(this).toggleClass('active');
        $('.mobile-experience-filter-nav').toggleClass('open');
    });

    $('.mobile-experience-filter-nav .close').on('click', function() {
        $('.filter-toggle').removeClass('active');
        $('.mobile-experience-filter-nav').removeClass('open');
    });
  
  
    // team
//  
//    $('.coach-item').click(function (e) {
//       $('.mobile-coach-item').toggleClass('active');
//    });
//
//    $('.mobile-coach-item .close').on('click', function() {
//        $('.mobile-coach-item').removeClass('active');
//    });
  
  
      //  about
  
   $('.about__left li').click(function(){

    $('.about__left li').removeClass('active');
    $(this).addClass('active');

  });
  
  
  
  
  
  
  // home 
  
   $('footer h3.title_').click(function(){

    $(this).parent().toggleClass('active');

  });

  
  
  

  // faq
  
    let buttonsTab = document.querySelectorAll(".tabs-item");
    let active_button;
    let sectionsProd = document.querySelectorAll(".faq-content");
    let active_section;

    if (buttonsTab.length !== 0) {
        buttonsTab[0].classList.add("active");
        sectionsProd[0].classList.add("active");
    }

    buttonsTab.forEach(function (element) {
        element.onclick = changeTabs;
    });

    function getActiveButton() {
        buttonsTab.forEach(function (element) {
            if (element.classList.contains('active')) {
                active_button = element;
            }
        });
        return active_button;
    }

    function getActiveSection() {
        sectionsProd.forEach(function (element) {
            if (element.classList.contains('active')) {
                active_section = element;
            }
        });
        return active_section;
    }

    function hideTabs() {
        active_section.classList.remove("active");
        active_button.classList.remove("active");
    }

    function showTabs(id) {
        sectionsProd.forEach(function (element) {
            if (element.id === id) {
                element.classList.add("active");
            }
        });
    }

    function changeTabs() {
        active_button = getActiveButton();
        active_section = getActiveSection();
        if (this.name !== active_button.name) {
            this.classList.add("active");
            hideTabs();
            showTabs(this.name);
        }
    }


  
    $('.faq-item').click(function (e) {
        $(this).toggleClass('open');
    });

  
    //  END faq
  
  

  $('.menu__open').click(function(){
    
    $(this).toggleClass('open');
    $(this).parent().toggleClass('back');
    $('.system_user>.select').toggleClass('active');
    
     
  });


  
  
  
    $(document).mouseup(function(e) { // web document click event
        var div = $(".help__menu"); // here we specify the ID of the element
        if (!div.is(e.target) // if the click was not on our block
            &&
            div.has(e.target).length === 0) { // and not by its children
                $( ".help__menu" ).removeClass('active');
        
          
//                $( ".menu__open" ).removeClass('open');
//                $( "ul.select" ).removeClass('active');
        }
    });  
    
    
    
    
    
  });
});






 

  
// =========================================================== 
// END cssClassTogglerScroll
// =========================================================== 
  
 
  class cssTogglerScroll{
  constructor(data){
    this.options = {
      root: null,
      rootMargin: "0px",
      threshold: data.threshold
    };

    this.observer = new IntersectionObserver((entries, observer)=>{
      entries.forEach((entry) => {
      if(entry.isIntersecting){
        if(data.cssClass){
          entry.target.classList.add(data.cssClass);
        }
        if(data.onVisible){
          data.onVisible();
        }
      }
      else{
        if(data.cssClass){
          entry.target.classList.remove(data.cssClass);
        }
        if(data.onHidden){
          data.onHidden();
        }
      }
    });

  }, this.options);
    this.observer.observe(data.element);

  }
}

for(let div of document.querySelectorAll('section')){

  new cssTogglerScroll({
    element: div,
    cssClass: 'descry',
    threshold: 0.1,
    onVisible: () => {

    },
    onHidden: () => {
//      console.log('section__products active');
    }
  });

}
  
  
  
// =========================================================== 
// END Section cssTogglerScroll
// =========================================================== 




// breathwork-tt

    let buttonsTab = document.querySelectorAll(".tab-item");
    let active_button;
    let sectionsProd = document.querySelectorAll(".program-content");
    let active_section;

    if (buttonsTab.length !== 0) {
        buttonsTab[0].classList.add("active");
        sectionsProd[0].classList.add("active");
    }

    buttonsTab.forEach(function (element) {
        element.onclick = changeTabs;
    });

    function getActiveButton() {
        buttonsTab.forEach(function (element) {
            if (element.classList.contains('active')) {
                active_button = element;
            }
        });
        return active_button;
    }

    function getActiveSection() {
        sectionsProd.forEach(function (element) {
            if (element.classList.contains('active')) {
                active_section = element;
            }
        });
        return active_section;
    }

    function hideTabs() {
        active_section.classList.remove("active");
        active_button.classList.remove("active");
    }

    function showTabs(id) {
        sectionsProd.forEach(function (element) {
            if (element.id === id) {
                element.classList.add("active");
            }
        });
    }

    function changeTabs() {
        active_button = getActiveButton();
        active_section = getActiveSection();
        if (this.name !== active_button.name) {
            this.classList.add("active");
            hideTabs();
            showTabs(this.name);
        }
    }

// breathwork-tt




  class cssClassTogglerScrollHeader{
  constructor(data){
    this.options = {
      root: null,
      rootMargin: "50px",
      threshold: data.threshold
    };
    

    this.observer = new IntersectionObserver((entries, observer)=>{
      entries.forEach((entry) => {
      if(entry.isIntersecting){
        if(data.cssClass){
          entry.target.classList.add(data.cssClass);
          
          
          
         if(document.querySelector(".left__menu__scroll")){
          var element = document.querySelector(".left__menu__scroll");
        
                    element.classList.remove("header__scroll");
         }
          
    
        }
        if(data.onVisible){
          data.onVisible();
        }
      }
      else{
        if(data.cssClass){
          entry.target.classList.remove(data.cssClass);
   
          if(document.querySelector(".left__menu__scroll")){
            var element = document.querySelector(".left__menu__scroll");
    element.classList.add("header__scroll");
    
          }
          

        }
        if(data.onHidden){
          data.onHidden();
        }
      }
    });

  }, this.options);
    this.observer.observe(data.element);

  }
}

for(let div of document.querySelectorAll('[data-menuscroll]')){

  new cssClassTogglerScrollHeader({
    element: div,
    cssClass: 'act__',
    threshold: 0.1,
    onVisible: () => {

    },
    onHidden: () => {
//      console.log('section__products active');
    }
  });

}






// =========================================================== 
// cssClassTogglerScroll FOOTER
// =========================================================== 

  // ACTIVE   
  
  class cssClassTogglerScroll{
  constructor(data){
    this.options = {
      root: null,
      rootMargin: "200px",
      threshold: data.threshold
    };
    

    this.observer = new IntersectionObserver((entries, observer)=>{
      entries.forEach((entry) => {
      if(entry.isIntersecting){
        if(data.cssClass){
          entry.target.classList.add(data.cssClass);
          
          
          
          

         if(document.querySelector(".top__about")){
          var element = document.querySelector(".top__about");
            element.classList.add("active");
           
         }


    
        }
        if(data.onVisible){
          data.onVisible();
        }
      }
      else{
        if(data.cssClass){
          entry.target.classList.remove(data.cssClass);
          
          if(document.querySelector(".top__about")){
            var element = document.querySelector(".top__about");

             element.classList.remove("active");
          }          


        }
        if(data.onHidden){
          data.onHidden();
        }
      }
    });

  }, this.options);
    this.observer.observe(data.element);

  }
}

for(let div of document.querySelectorAll('footer')){

  new cssClassTogglerScroll({
    element: div,
    cssClass: 'act__',
    threshold: 0.1,
    onVisible: () => {

    },
    onHidden: () => {
//      console.log('section__products active');
    }
  });

}



  
  
// =========================================================== 
// END cssClassTogglerScroll FOOTER
// =========================================================== 