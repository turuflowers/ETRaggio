$(document).ready(function () {
  $('.tabs-buttons button').on('click', function(){
    $('.tabs-buttons button').removeClass('active');
    $(this).addClass('active');
    
    var tab = $(this).data('tab');
    var target = $("#" + tab);

    target.parent().find('.tab-content').removeClass('active');
    target.addClass('active');
  });
});