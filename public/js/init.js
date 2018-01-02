(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.carousel').carousel({
      dist: 0,
      padding: 5
    });
    $('.slider').slider({indicators: false});
    $('.modal').modal();
    $('.parallax').parallax();
    $('.materialboxed').materialbox();
    $('.collapsible').collapsible();
    $(".search-icon").click(function() {
      $("#search").focus();
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space