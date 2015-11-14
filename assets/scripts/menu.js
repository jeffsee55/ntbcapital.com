$(document).ready(function(){
  $("#sublist").on( 'show.bs.collapse', function() {
    $(this).siblings(".has-more").find("i").addClass("flip");
  });
  $("#sublist").on( 'hide.bs.collapse', function() {
    $(this).siblings(".has-more").find("i").removeClass("flip");
  });

  removeMask = function() {
    $("#menu-primary-navigation").removeClass('show');
    $("body").removeClass('no-scroll');
    $("#mask").removeClass("on");
  };

  $('button.navbar-toggler').click(function() {
    var nav = document.getElementById(this.dataset.target);
    $("#menu-primary-navigation").addClass('show');
    $("#mask").addClass("on");
  });

  $('#mask').click(function() {
    removeMask();
  });

  // Detect resize only on horizontal for responsive purposes
  // Mobile screens will resize vertically when browser nav disappears
  //var windowWidth = $(window).width();
  //$(window).resize(function() {
    //if(this !== windowWidth) {
      //$("#menu-primary-navigation").removeClass('show');
      //removeMask();
    //}
  //});

  $('.close').on('click',function(){
    $('.navigation .collapse').collapse('hide');
  });

  $('.menu-item a[href="/#section12"]').click(function() {
    $('.navigation .collapse').collapse('hide');
    removeMask();
  });
});
