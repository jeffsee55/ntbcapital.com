<section class="section grid-section">

  <?php $count = count( get_sub_field('grid_item') ); ?>

  <h1><?php the_sub_field('title'); ?></h1>

  <?php get_template_part('templates/dots'); ?>

  <?php if( have_rows('grid_item') ):

    if( ($count == 3) || ($count == 6) || ($count == 9)) {
      $class = "three-columns grid-item";
    } elseif ( ($count == 2) || ($count == 4) || ($count == 8)) {
      $class = "four-columns grid-item";
    } ?>

    <div class="container">
      <div class="row">
        <?php while ( have_rows('grid_item') ) : the_row(); ?>
          <div class="<?php echo $class; ?>">
            <h4><?php the_sub_field('grid_title'); ?></h4>
            <?php the_sub_field('grid_content'); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
