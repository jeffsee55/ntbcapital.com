$(document).ready(function(){
  $("#sublist").on( 'show.bs.collapse', function() {
    $(this).siblings(".has-more").find("i").addClass("flip");
  });
  $("#sublist").on( 'hide.bs.collapse', function() {
    $(this).siblings(".has-more").find("i").removeClass("flip");
  });

  removeMask = function() {
    $("#menu-primary-navigation").removeClass('show');
    $("html").removeClass('no-scroll');
    $("#mask").remove();
    console.log('remove fired');
  };
  $('button.navbar-toggler').click(function() {
    var nav = document.getElementById(this.dataset.target);
    $("#menu-primary-navigation").addClass('show');
    $("html").append("<div id='mask'></div>");
    $("html").addClass('no-scroll');
  });

  $('#mask').click(function() {
    console.log('clicked mask');
    removeMask();
  });

  $(window).resize(function() {
    $("#menu-primary-navigation").removeClass('show');
    $("#mask").remove();
  });
  $('.close').on('click',function(){
    $('.navigation .collapse').collapse('hide');
  });

  $('.menu-item a[href="/#section12"]').click(function() {
    $('.navigation .collapse').collapse('hide');
    removeMask();
  });
});
