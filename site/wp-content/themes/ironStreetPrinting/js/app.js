(function($){
  $(".slider").slidesjs({
    play: {
      //active: true,
      effect: "slide",
      interval: 3000,
      auto: true,
      //swap: true,
      pauseOnHover: false,
      restartDelay: 2500
    }
    ,
    pagination: {
      active: true,
      effect: "slide"
    }
  });

})(jQuery);
