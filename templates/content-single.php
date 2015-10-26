<?php get_template_part('templates/page', 'hero'); ?>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php
        wp_reset_query();
        //for use in the loop, list 5 post titles related to first tag on current post
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
          $first_tag = $tags[0]->term_id;
          $args=array(
          'tag__in' => array($first_tag),
          'post__not_in' => array($post->ID),
          'posts_per_page'=>5,
          'caller_get_posts'=>1
          );
          $my_query = new WP_Query($args);
          if( $my_query->have_posts() ) { ?>
            <div class="row">
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-sm-4">
                  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php }
        }
        ?>
      </footer>
    </article>
  <?php endwhile; ?>
</div>

<?php get_template_part('templates/newsletter', 'signup'); ?>
