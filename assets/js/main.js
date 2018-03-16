$(function(){
  var $window = $(window);
  // Parallax background effect
  $('section[data-type="backgounr"]').each(function(){
    var $bgobj = $(this);
    $(window).scroll(function(){
      //scroll the background
      //y position is a negative value
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      //final background position
      var coords = '50%' + 'yPos' + 'px';
      $bgobj.css({backgroundPosition:coords});
    });
  });
  $(".menu-btn").click(function(){
    if ($(".menu-overlay").hasClass("open")){
      $(".menu-overlay").removeClass("open");
    }
    else{
      $(".menu-overlay").addClass("open");
    }
  });
  $(".close-btn").click(function(){
    $(".menu-overlay").removeClass("open");
  });
});
