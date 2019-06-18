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
});