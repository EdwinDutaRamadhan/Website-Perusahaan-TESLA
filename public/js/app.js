$(document).ready(function() {
    var banner_height = $("#banner").height();
    var lastScrollTop = 0;
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      var currScrollTop = $(this).scrollTop();
      if (scroll >= banner_height && currScrollTop > lastScrollTop) {
        $("#navbar-id").hide();
      } else {
        $("#navbar-id").show();
      }
      lastScrollTop = currScrollTop;
  
    });
  
  });