(function($){
  $(".slider").slidesjs({
    width: 1680,
    height: 479,
    play: {
      effect: "slide",
      interval: 3000,
      auto: true,
      pauseOnHover: true,
      restartDelay: 2500
    },
    navigation: {
      active: false
    }
  });

  $(".testimonial_slider").slidesjs({
    play: {
      effect: "slide",
      interval: 5000,
      auto: true,
      pauseOnHover: false,
      restartDelay: 2500
    },
    navigation: {
      active: false
    },
    pagination: {
      active: false,
    }
  });

  $(".slider-services").slidesjs({
    width: 1680,
    height: 469,
    play: {
      effect: "slide",
      interval: 3000,
      auto: true,
      pauseOnHover: false,
      restartDelay: 2500
    },
    pagination: {
      active: false,
    },
    navigation: {
      active: false
    }
  });

  $('.menu_mobile').on('click', function() {
    $('#mainMenu ul').fadeIn();
  });

})(jQuery);
