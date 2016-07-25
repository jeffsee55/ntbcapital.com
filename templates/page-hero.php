<?php use Roots\Sage\Titles; ?>

<?php
  if(has_post_thumbnail()) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
    $thumb_url = $thumb_url_array[0];
    $bg_size = 'cover';
  } else {
    $thumb_url = site_url() . '/wp-content/uploads/2016/03/butler-logo-batak.jpg';
    $bg_size = 'auto';
  };
?>


<div class="page-header hero" data-parallax="scroll" data-image-src="<?php echo $thumb_url; ?>" style="background-size: <?php echo $bg_size ?>">
  <div class="scroll-reveal">
    <h1 class="header"><?= Titles\title(); ?></h1>
  </div>
</div>
