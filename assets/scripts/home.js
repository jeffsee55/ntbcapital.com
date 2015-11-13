$(document).ready(function() {
  var height = $(window).height();
  $(".carousel-item .container").height(height);
  var distance = $('.navigation').offset().top;
  $window = $(window);
  $("span#slider-scroll i").click(function() {
    $('html, body').animate(
      { scrollTop: $("#section2").offset().top},
      1500,
      "easeInOutQuad"
      );
  });
  $window.scroll(function() {
    if ( $window.scrollTop() >= distance ) {
      $('.navigation').addClass('fixed-nav');
    } else {
      $('.navigation').removeClass('fixed-nav');
    }
  });

  scrollToEl = function(element) {
    $("html, body").animate({scrollTop: element.offset().top}, 600);
  };

  $("a.team-member").click(function() {
    var index = $(this).data('index');
    var name = $(this).find('h4.team-member-name').text();
    var title = $(this).find('h6.team-member-title').text();
    var bio = $(this).find('span.team-member-bio').text();
    var avatar = $(this).find('img.team-member-avatar').attr('src');
    $("#expanded-name-" + index).text(name);
    $("#expanded-title-" + index).text(title);
    $("#expanded-content-" + index).text(bio);
    $("#expanded-avatar-" + index).attr('src', avatar);
  });

  $('.panel-collapse').on('show.bs.collapse', function () {
    var expanded_height = $(this).find('.expanded-bio-content').height();
    var offset = $(this).parent('.panel').offset().top;
    $(this).attr("data-height", $(this).height());
    $(this).parent('.panel').css('margin-bottom', $(this).data('height') + 50);
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).parent('.panel').css('margin-bottom', 0);
  });
});
