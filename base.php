<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
		<div id="ip-container" class="ip-container">
      <div class="ip-loader-static"></div>
			<!-- initial header -->
			<header class="ip-header">
				<h1 class="ip-logo">
					<svg class="ip-inner" width="100%" height="100%" viewBox="0 0 300 160" preserveAspectRatio="xMidYMin meet" aria-labelledby="logo_title">
            <rect x="39.7" y="7.5" fill="#0B1033" stroke="#DBB963" stroke-width="3" stroke-miterlimit="10" width="210.8" height="216.4"/>
            <polygon fill="#0B1033" stroke="#DBB963" stroke-width="2" stroke-miterlimit="10" points="56.8,228 196.4,134.5 250.3,228 "/>
            <polygon fill="#0B1033" stroke="#DBB963" stroke-width="2" stroke-miterlimit="10" points="55.6,198.3 226.3,149.1 250.3,228 
              41.7,228 "/>
            <polygon fill="#0B1033" stroke="#DBB963" stroke-width="2" stroke-miterlimit="10" points="250.5,230 250.3,175.9 40,198.5 
              39.7,230 "/>
            <g>
              <path fill="#DBB963" d="M113.2,38.8V90c-0.3-0.4-1-1.1-2.1-2.2s-2.4-2.4-4-3.9c-1.6-1.5-3.3-3.2-5.2-5c-1.9-1.8-3.8-3.6-5.8-5.5
                c-2-1.9-3.9-3.7-5.8-5.5c-1.9-1.8-3.6-3.4-5.1-4.9c-1.5-1.5-2.8-2.8-3.9-3.8c-1.1-1.1-1.7-1.8-2-2.2c0-0.1-0.2-0.3-0.5-0.7
                c-0.3-0.4-0.6-0.7-0.8-1l0.2,2.1v30.3H70V36.6c0.3,0.4,1,1.1,2.1,2.2c1.1,1.1,2.4,2.3,4,3.8c1.6,1.5,3.3,3.1,5.2,4.8
                c1.9,1.7,3.8,3.5,5.8,5.3c2,1.8,3.9,3.6,5.8,5.4c1.9,1.8,3.6,3.4,5.2,4.8c1.6,1.5,2.9,2.7,3.9,3.7c1.1,1,1.7,1.7,2,2.1l1.3,1.9
                l-0.2-2.3V38.8H113.2z"/>
              <path fill="#DBB963" d="M167.3,38.8v7.9h-12.1v41.1h-8.3V46.6h-11.8v-7.9H167.3z"/>
              <path fill="#DBB963" d="M189.2,87.7V38.8h13.4c2.4,0,4.6,0.2,6.6,0.7c2,0.5,3.6,1.2,5,2.2c1.4,1,2.5,2.3,3.2,4
                c0.7,1.6,1.1,3.6,1.1,5.9c0,1.3-0.1,2.5-0.4,3.7c-0.2,1.2-0.6,2.3-1.2,3.3c-0.6,1-1.3,1.9-2.2,2.7c-0.9,0.8-2,1.3-3.4,1.7
                c1.1,0.2,2.2,0.6,3.4,1.1s2.2,1.3,3.1,2.2c0.9,0.9,1.6,2.1,2.2,3.4s0.8,3,0.8,4.8c0,2.4-0.5,4.4-1.4,6.1c-0.9,1.7-2.1,3.1-3.6,4.1
                c-1.5,1.1-3.2,1.9-5.2,2.3c-2,0.5-4,0.7-6.1,0.7H189.2z M197.4,46.2v13.3h6.2c2.3,0,4-0.7,5.1-2c1.1-1.3,1.6-3,1.6-4.8
                c0-2.2-0.7-3.8-2-4.9c-1.3-1.1-3.2-1.6-5.4-1.6H197.4z M197.4,66.5v13.8h6.4c1.2,0,2.3-0.1,3.4-0.4c1.1-0.3,2-0.7,2.8-1.3
                c0.8-0.6,1.4-1.3,1.9-2.1c0.4-0.9,0.7-1.9,0.7-3.1c0-1.3-0.3-2.4-0.8-3.3c-0.5-0.9-1.3-1.6-2.1-2.1c-0.9-0.5-1.9-0.9-3.1-1.1
                c-1.1-0.2-2.3-0.3-3.5-0.3H197.4z"/>
            </g>
            <line fill="none" stroke="#DBB963" stroke-width="2" stroke-miterlimit="10" x1="67" y1="103" x2="222" y2="103"/>
          </svg>
				</h1>
				<div class="ip-loader">
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					</svg>
				</div>
			</header>
        <!--[if lt IE 9]>
          <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
          </div>
        <![endif]-->
        <?php
          do_action('get_header');
          if( !is_front_page() ) :
            get_template_part('templates/header');
          endif;
        ?>
        <div class="wrap" role="document">
          <div class="content">
            <main class="main" role="main">
              <?php include Wrapper\template_path(); ?>
              <?php get_template_part('templates/footer'); ?>
            </main><!-- /.main -->
          </div><!-- /.content -->
        </div><!-- /.wrap -->
        <?php
          do_action('get_footer');
          wp_footer();
        ?>
      </div>
    <script>
      var config = {
        mobile: true
      }
      window.sr = new scrollReveal( config );
    </script>
  </body>
</html>
