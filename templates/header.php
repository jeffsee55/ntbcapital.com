<?php
  $args = array(
    'menu'              => 'primary_navigation',
    'theme_location'    => 'primary_navigation',
    'menu_class'        => 'navlist',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ); ?>

<header class="navigation <?php if( !is_front_page() ) : echo "fixed-nav"; endif; ?>">
  <div id="mask"></div>
  <div class="container-fluid">
    <button class="navbar-toggler hidden-sm-up" type="button" data-target="collapsingnavlist">
      <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32"><g transform="translate(0, 0)"> <line fill="none" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="2" y1="16" x2="30" y2="16" stroke-linejoin="round"></line> <line fill="none" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="2" y1="7" x2="30" y2="7" stroke-linejoin="round"></line> <line fill="none" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="2" y1="25" x2="30" y2="25" stroke-linejoin="round"></line> </g></svg>
    </button>
    <div class="row">
      <?php get_template_part('templates/logo'); ?>
      <div class="nav-container">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu( $args );
          endif;
        ?>
        <div class="profile-link dropdown">
            <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </span>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <?php if( is_user_logged_in() ) : ?>
                <a class="profile-signin-link dropdown-item" href="/profile">Profile</a>
                <a class="dropdown-item" href="/wp-admin/admin-post.php?action=ss_signout&data=<?php echo get_current_user_id(); ?>">Sign out</a>
              <?php else : ?>
                <a class="profile-signin-link dropdown-item" href="/profile">Sign in</a>
                <a class="dropdown-item" href="/">Become an investor</a>
              <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="modal fade contact-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="contact-card card">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <h1 class="header">Get in Touch</h1>
      <div class="map-container">
        <div id="map">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/indo.jpg">
        </div>
      </div>
      <div class="text-container">
        <h2 class="text-center">Inquiries</h2>
        <div class="row">
          <div class="col-sm-4 text-center">
            <p>For investment inquiries<br>Contact Chris</p>
            <a href="#">+1 2345 6789</a>
            <a class="btn btn-primary btn-block"href="#">Email Chris</a>
          </div>
          <div class="col-sm-4 text-center">
            <p>For account inquiries<br>Contact David</p>
            <a href="#">+1 2345 6789</a>
            <a class="btn btn-primary btn-block"href="#">Email David</a>
          </div>
          <div class="col-sm-4 text-center">
            <p>For general inquiries<br>Contact us</p>
            <a href="#">+1 2345 6789</a>
            <a class="btn btn-primary btn-block"href="#">Email Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
