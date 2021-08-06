//header-slide
  $(document).ready(function(){
    $('.slide_content').owlCarousel({
    items:1,
    loop: true,
    // nav:true,
    autoplay: true,
    autoplayTimeout: 3000,
    animateOut: 'fadeOut',
    opacity: 0.9,
    smartSpeed:550,
    dots: true,
    responsive:{
       
    }
  });
});

// partner-slide
  $(document).ready(function(){
    $('.logo_patner').owlCarousel({
      items: 5,
      loop: true,
      autoplay: true,
      autoplayTimeout: 6000,
      margin : 20,
      smartSpeed:550,
      dots: true,
      responsive:{
        375:{
          items:3,
        },
        722:{
          items:5,
        },
        1052:{
          items:5,
        }
      }
    });
});
  $(document).ready(function(){
    $('.reprendre-slide').owlCarousel({
      items: 4,
      loop: true,
      autoplay: true,
      autoplayTimeout: 6000,
      margin : 10,
      smartSpeed:550,
      dots: true,
      responsive:{
        320:{
          items:1,
        },
        768:{
          items:4,
        },
       
      }
    });
});
    //menu toggle
  $(document).ready(function(){
    $('.res-btn').click(function(){
    $('.Menu-responsive').css('display','block');
    $('.Menu-responsive').toggleClass('active');
    });
  });
    // When the user scrolls down 20px from the top of the document, slide down the navbar
     window.onscroll = function() {scrollFunction()};
      $(document).ready(function(){
          $('.presentation-content .bloc3').hide();
      });
     function scrollFunction() {
       if (document.body.scrollTop > 520 || document.documentElement.scrollTop < 720) {
         $('.presentation-content .hide').addClass('masquer');
         $('.presentation-content .bloc3').addClass('bloc_show');
       }else{
        $('.presentation-content .hide').removeClass('masquer');
        $('.presentation-content .bloc3').removeClass('bloc_show');
       }
       
     }
     //scroll
     let scrollerBtn = document.getElementById('myBtn');
    $(document).scroll(function(){
    var scroll = $(document).scrollTop();
    /*button to go to top page*/
    if($(window).scrollTop() > 500){
    scrollerBtn.style.display = "flex"
    }else{
    scrollerBtn.style.display = "none"
   }
 })
 function topFunction(){
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
 }
 //
 $(document).ready(function(){
   $('.cancel').click(function(){
      $('.courscontent').addClass('hide');
      $('.fulscreen').addClass('videiofulscreen');
      $('.content-show').css('display', 'block');
   });
   $('.content-show').click(function(){
      $('.courscontent').addClass('showContentCours');
      $('.fulscreen').removeClass('videiofulscreen');
      $('.content-show').css('display', 'none');
   });
 });
   //scroll cours content
   $(window).scroll(function() {
     let topOfWindow = $(window).scrollTop();
    //  console.log(topOfWindow);
     if(topOfWindow>=200){
       
       $(".sty").css("position","fixed");
       $(".sty").css("width","25%");
       $(".sty").css("Z-index","400");
       $(".sty").css("margin-top","-190px");
     }else{
      $(".sty").css("position","absolute");
      $(".sty").css("width","100%");
      $(".sty").css("margin-top","0px");
     }
    
});



 //video page index

 

