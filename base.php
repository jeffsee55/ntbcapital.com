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
            <title  id="logo_title">Delightful Demonstrations by Codrops</title>
            <polygon opacity="0.4" fill="#29ABE2" stroke="#29ABE2" stroke-miterlimit="10" points="79.4,107.9 228.8,5.6 223.4,95.7 "/>
            <polygon opacity="0.4" fill="#29ABE2" stroke="#29ABE2" stroke-miterlimit="10" points="50.3,82.6 213.7,27.8 196.1,107.9 "/>
            <polygon opacity="0.4" fill="#29ABE2" stroke="#29ABE2" stroke-miterlimit="10" points="26,55.9 164.4,116.1 191.2,53.9 "/>
            <text transform="matrix(1 0 0 1 13.3985 152.1455)" opacity="0.39" fill="#29ABE2" stroke="#29ABE2" stroke-miterlimit="10" font-family="'Lato-Light'" font-size="31.9326" letter-spacing="9">NTBCAPITAL</text>
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
