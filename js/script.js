jQuery(document).ready(function ($) {

  /*fix header*/
  $(".top-line").sticky({
    topSpacing:0
  });

  /* animation*/
  AOS.init({
    disable: 'mobile',
  });


  /*scroll next display*/
  $(document).on('click', '.next-display', function () {
    var win = $(window).height();
    $('body,html').animate({
      scrollTop: win
    }, 800);
    return false;
  });

  /*mob menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();
    if($('.open-menu').hasClass('is-active')){
      $('.open-menu').removeClass('is-active');
      $('html').removeClass('is-menu');
      $.fancybox.close();
    } else{
      $('.open-menu').addClass('is-active');
      $.fancybox.open( $('#menu-responsive'), {
        touch:false,
        autoFocus:false,
        animationDuration : 600,
        animationEffect   : 'slide-in-out',
        beforeClose:function(e){
          $('.open-menu').removeClass('is-active');
          $('html').removeClass('is-menu');
        },
        beforeShow:function(e){
          $('html').addClass('is-menu');
        },
      });
    }
  });

  /*identify device*/
  var is_safari = navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 &&  navigator.userAgent.indexOf('Android') == -1;
  if (is_safari) {
    $('html').addClass('is-safari');
  }else{
    $('html').removeClass('is-safari');
  }

  /*slider*/
  var swiperHome = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".home-next",
      prevEl: ".home-prev",
    },
  });

});

