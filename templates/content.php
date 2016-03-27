<?php if(has_post_thumbnail()) {
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
  $thumb_url = $thumb_url_array[0];
}; ?>

<a class="card article-card" href="<?php the_permalink(); ?>">
  <img class="card-img-top" src="<?php echo $thumb_url ?>" alt="">
  <div class="card-block">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <hr>
    <div class="card-text entry-summary">
      <?php the_excerpt(); ?>
    </div>
    <span class="read-more">Read More</span>
  </div>
</a>
