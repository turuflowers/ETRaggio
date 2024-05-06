$(document).ready(function () {
  $('.slides').slick({
    dots: true,
    autoplay: true,
    useAutoplayToggleButton:false,
    adaptiveHeight: true
  });
	$('#hero .rotador').slick({
		dots: true,
    autoplay: true,
    useAutoplayToggleButton:false
	  });
});