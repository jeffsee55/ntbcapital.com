<?php

if( have_rows('content') ):

    while ( have_rows('content') ) : the_row();

      if( get_row_layout() == 'slider' ): ?>

        <?php get_template_part('templates/front', 'slider'); ?>

        <?php get_template_part('templates/header'); ?>

      <?php elseif( get_row_layout() == 'section' ): ?>

        <div class="section">

          <h1><?php the_sub_field('title'); ?></h1>

          <?php get_template_part('templates/dots'); ?>

          <div data-sr class="section-content"><?php the_sub_field('content'); ?></div>

        </div>

      <?php elseif( get_row_layout() == 'plain_text_section' ): ?>

        <div class="section plain-text-section">

          <h1><?php the_sub_field('title'); ?></h1>

          <?php get_template_part('templates/dots'); ?>

          <div class="section-content"><?php the_sub_field('content'); ?></div>

        </div>


      <?php elseif( get_row_layout() == 'image' ): ?>

        <div class="image-section parallax-window" data-parallax="scroll" data-image-src="<?php the_sub_field('image'); ?>"></div>

      <?php elseif( get_row_layout() == 'quote' ): ?>

        <div class="section quote-section"><blockquote><?php the_sub_field("quote_text"); ?></blockquote></div>

      <?php elseif( get_row_layout() == 'grid' ): ?>

        <?php get_template_part('templates/front', 'grid'); ?>

      <?php elseif( get_row_layout() == 'team_grid' ): ?>

        <?php get_template_part('templates/front', 'team'); ?>

      <?php endif;


    endwhile;

else :

    // no layouts found

endif;

?>
