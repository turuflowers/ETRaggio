$(window).resize(function() {
    var w = $(window).width();
    if(w > 1197){
        $("header").removeClass('active');
        $('.hamburger').removeClass('active');
        $("nav").removeClass('active');
        $(".subnav").removeClass('active');
    }
});
$(document).ready(function () {
  $('.hamburger').on('click', function () {
      $("header").toggleClass('active');
      $(this).toggleClass('active');
      $("nav").toggleClass('active');
      $(".subnav").removeClass('active');
  });

  $('nav a').on('click', function(){
      $("header").removeClass('active');
      $('.hamburger').removeClass('active');
      $("nav").removeClass('active');
      $(".subnav").removeClass('active');
  });

  $('nav button').on('click', function(){
    
    var subnav = $(this).next();
    if(subnav.hasClass('active')){
      subnav.removeClass('active');

    }else{
      $('.subnav').removeClass('active');
      subnav.addClass('active');
    }
  });

});