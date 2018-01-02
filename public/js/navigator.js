// Sticky Header
$(document).ready(function() {
  if (screen.width < 766) {
    $('.main_h').addClass('sticky');
      // Mobile Navigation
      $('.mobile-toggle').click(function() {
        if ($('.main_h').hasClass('open-nav-floating')) {
            $('.main_h').removeClass('open-nav-floating');
        } else {
            $('.main_h').addClass('open-nav-floating');
        }
    });
    
    $('.main_h li a').click(function() {
        if ($('.main_h').hasClass('open-nav-floating')) {
            $('.navigation').removeClass('open-nav-floating');
            $('.main_h').removeClass('open-nav-floating');
        }
    });
    
    // Navigation Scroll - ljepo radi materem
    $('#nav-floating a').click(function(event) {
        var id = $(this).attr("href");
        var offset = 70;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 500);
        event.preventDefault();
    });
  }
  else {
    $(window).scroll(function() {
      if ($(window).scrollTop() > 220) {
        $('.main_h').addClass('sticky');
      } else {
        $('.main_h').removeClass('sticky');
      }
    });
  }
});