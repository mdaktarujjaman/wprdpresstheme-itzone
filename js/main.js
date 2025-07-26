jQuery(document).ready(function(){
        jQuery('#nav').slicknav();
        jQuery(".slider").bxSlider({
            adaptiveHeight: true,
            slideWidth: 1400,
        });
        jQuery(".owl-carousel").owlCarousel({
          autoplay:true,
          autoplayTimeout:5000,
          autoplayHoverPause:false,
          items:3,
        });
      });