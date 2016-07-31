<?php use Roots\Sage\Titles; ?>

<?php
if( has_post_thumbnail() ) {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
  $thumb_url = $thumb_url_array[0];
  $header_type = 'hero';
  $bg_size = 'cover';
  $scroll_reveal = 'scroll-reveal';
} elseif( get_post_meta( $post->ID, 'hero', true ) == 1 ) {
  $thumb_url = get_theme_mod( 'site_image' );
  $header_type = 'hero';
  $bg_size = 'cover';
  $scroll_reveal = 'scroll-reveal';
} else {
  $header_type = 'no-hero';
  $scroll_reveal = null;
  $thumb_url = null;
  $bg_size = null;
};

echo '<div class="page-header ' . $header_type . '" data-parallax="scroll" data-image-src="' . $thumb_url . '"' . ' style="background-size: ' . $bg_size . '">';
  echo '<div class="' . $scroll_reveal . '">';
    echo '<h1 class="header">' . Titles\title() . '</h1>';
  echo '</div>';
echo '</div>';

