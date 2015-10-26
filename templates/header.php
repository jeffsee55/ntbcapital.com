<?php
  $args = array(
    'menu'              => 'primary_navigation',
    'theme_location'    => 'primary_navigation',
    'menu_class'        => 'navlist',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ); ?>

<?php if( !is_front_page() ) : $fixed = "fixed-nav"; endif; ?>
<header class="navigation <?php echo $fixed; ?>">
<div class="container-fluid">
  <button class="navbar-toggler hidden-sm-up" type="button" data-target="collapsingnavlist">
    &#9776;
  </button>
  <div class="row">
    <?php get_template_part('templates/logo'); ?>
    <div class="nav-container">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu( $args );
        endif;
      ?>
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
      <h1 class="header">Contact Us</h1>
      <div class="row">
        <div class="col-sm-6">
          <strong>Lombok Office</strong><br>
          Jalan Pariwisata Kuta<br>
          Kuta - Pujut, Lombok Tengah<br>
          Nusa Tenggara Barat<br>
          Indonesia 83573<br>
          (in front of Segare Anak Bungalows & Restaurant)<br>
          <em>Please note this is not a postal address</em>
        </div>
        <div class="col-sm-6">
          <strong>Bali Office</strong><br>
          JaIan Raya Semat<br>
          Gang Giri Sunia<br>
          Villa Mata Indah<br>
          Berawa, Canggu<br>
          Badung, Bali<br>
          Indonesia 80361<br>
          <em>Postal address</em>
        </div>
      </div>
      <hr>
      <div class="row">
        <label class="col-sm-4"><strong>General Inquiries</strong></label>
        <div class="col-sm-6">
          info@ntbcapital.com<br>
          +62 (370) 6158 033
        </div>
      </div>
      <div class="row">
        <label class="col-sm-4"><strong>Investment | Sales & Marketing Inquires</strong></label>
        <div class="col-sm-6">
          chris@ntbcapital.com<br>
          Chris Berney +62 (0) 821 4633 0111 +61 (0) 405 081 088 (Australia) +852 6909 7525 (Hong Kong)
        </div>
      </div>
      <div class="row">
        <label class="col-sm-4"><strong>Investment Inquires</strong></label>
        <div class="col-sm-6">
          simon@ntbcapital.com
          Simon Barnes +852 6053 5031 (Hong Kong)
        </div>
      </div>
      <div class="row">
        <label class="col-sm-4"><strong>Community Relations | Press & Media Inquires</strong></label>
        <div class="col-sm-6">
          tamara@ntbcapital.com
          Tamara Cox +62 (0) 821 4424 8722
        </div>
      </div>
      <div class="row">
        <label class="col-sm-4"><strong>Accounts | Local Inquires (Bahasa)</strong></label>
        <div class="col-sm-6">
          kartini@ntbcapital.com
          Kartini L Raja +62 (0) 813 1949 0943 
        </div>
      </div>
    </div>
  </div>
</div>
