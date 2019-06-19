jQuery(document).ready(function($){
  var didScroll;
  var lastScrollTop = 0;
  var delta = 2;
  var headerHeight = $('#header').outerHeight();

  $(window).on('scroll', function(e){
    didScroll = true;
  });

  setInterval(function(){
    if(didScroll){
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled(){
    var st = $(this).scrollTop();

    //make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta){
      return;
    }

    if(st > 10){
      $('#header-nav').removeClass('navbar-clear');
    }
    else{
      $('#header-nav').addClass('navbar-clear');
    }

    if(st > lastScrollTop && st > headerHeight){
      $('#header').addClass('nav-up');
    }
    else{
      if(st + $(window).height() < $(document).height()){
        $('#header').removeClass('nav-up');
      }
    }

    lastScrollTop = st;
  }

  $('#manuals-carousel .carousel-inner .carousel-item').carouselHeights();
});

$.fn.carouselHeights = function () {
  var items = $(this), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  var normalizeHeights = function () {
    items.each(function () { //add heights to array
      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value
    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  };

  normalizeHeights();

  $(window).on('resize orientationchange', function () {
    //reset vars
    tallest = 0;
    heights.length = 0;

    items.each(function () {
      $(this).css('min-height', '0'); //reset min-height
    });
    normalizeHeights(); //run it again 
  });
};