<?php use Roots\Sage\Titles; ?>

<?php
  if(has_post_thumbnail()) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
    $thumb_url = $thumb_url_array[0];
  };
?>


<div class="page-header hero" data-parallax="scroll" data-image-src="<?php echo $thumb_url; ?>">
  <div data-sr="wait 0.2s">
    <h1 class="header"><?= Titles\title(); ?></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
</div>
