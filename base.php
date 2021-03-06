<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <div class="loader"></div>
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
    <script>
      window.sr = ScrollReveal();
    </script>
  </body>
</html>
