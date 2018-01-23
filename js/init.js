(function($){
  $(function(){

    $('.button-collapse').sideNav();
     
      $('.slider').slider();
    // Pause slider
    $('.slider').slider('pause');
    // Start slider
    $('.slider').slider('start');
    // Next slide
    $('.slider').slider('next');
    // Previous slide
    $('.slider').slider('prev');

  }); // end of document ready
})(jQuery); // end of jQuery name space