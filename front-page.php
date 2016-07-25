<?php

$index = 0;

if( have_rows('content') ):

    while ( have_rows('content') ) : the_row(); $index++;

      if( get_row_layout() == 'slider' ): ?>

        <?php get_template_part('templates/front', 'slider'); ?>

        <?php get_template_part('templates/header'); ?>

      <?php elseif( get_row_layout() == 'section' ): ?>

        <div class="section" id="<?php echo "section" . $index; ?>">

          <h1><?php the_sub_field('title'); ?></h1>

          <?php get_template_part('templates/dots'); ?>

          <div class="scroll-reveal section-content"><?php the_sub_field('content'); ?></div>

        </div>

      <?php elseif( get_row_layout() == 'plain_text_section' ): ?>

        <div class="scroll-reveal section plain-text-section" id="<?php echo "section" . $index; ?>">

          <h1><?php the_sub_field('title'); ?></h1>

          <?php get_template_part('templates/dots'); ?>

          <div class="section-content"><?php the_sub_field('content'); ?></div>

        </div>


      <?php elseif( get_row_layout() == 'image' ): ?>
        <?php $image_url = get_sub_field( 'image' )['sizes']['large'];?>

        <div class="image-section parallax-window" data-parallax="scroll" data-image-src="<?php echo $image_url; ?>"></div>

      <?php elseif( get_row_layout() == 'quote' ): ?>

        <div class="section quote-section" id="<?php echo "section" . $index ?>"><blockquote><?php the_sub_field("quote_text"); ?></blockquote></div>

      <?php elseif( get_row_layout() == 'grid' ):

        get_template_part('templates/front', 'grid');

      elseif( get_row_layout() == 'team_grid' ):

        get_template_part('templates/front', 'team');

      endif;


    endwhile;

else :

    // no layouts found

endif;

?>
