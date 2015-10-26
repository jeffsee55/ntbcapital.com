/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
          // scrollTo: Smooth scrolls to target id
          function scrollTo(target) {
            var offset;
            var scrollSpeed = 600;
            var wheight = $(window).height();
            //var targetname = target;
            //var windowheight = $(window).height();
            //var pagecenterH = windowheight/2;
            //var targetheight = document.getElementById(targetname).offsetHeight;
            offset = $(target).offset().top;

            $('html, body').animate({scrollTop:offset}, scrollSpeed);
          }
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


          $(this).parent('.panel').css('margin-bottom', $(this).data('height'));
          //$("html, body").animate({ scrollTop: offset }, 500);
        })
        $('.panel-collapse').on('hide.bs.collapse', function () {
          console.log("Hide");
          $(this).parent('.panel').css('margin-bottom', 0);
        });

        // JavaScript to be fired on all pages
        $('button.navbar-toggler').click(function() {
          var nav = document.getElementById(this.dataset.target);
          $("#menu-primary-navigation").addClass('show');
          $("html").append("<div id='mask'></div>");

          $('#mask').click(function(){
            $("#menu-primary-navigation").removeClass('show');
            $(this).remove();
            console.log("clicked");
          });
        });

        $(window).resize(function() {
          $("#menu-primary-navigation").removeClass('show');
          $("#mask").remove();
        });
        $('.close').on('click',function(){
          $('.collapse').collapse('hide');
        })
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        var height = $(window).height();
        $(".carousel-item .container").height(height);
        var distance = $('.navigation').offset().top,
        $window = $(window);

        $window.scroll(function() {
          if ( $window.scrollTop() >= distance ) {
            $('.navigation').addClass('fixed-nav');
          } else {
            $('.navigation').removeClass('fixed-nav');
          }
        });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.