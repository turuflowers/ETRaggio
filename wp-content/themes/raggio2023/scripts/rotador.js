$(document).ready(function () {
  $('.slides').slick({
    dots: true,
    adaptiveHeight: true
  });
	$('#hero').slick({
		dots: true,
    autoplay: true,
    useAutoplayToggleButton:false
	  });
});