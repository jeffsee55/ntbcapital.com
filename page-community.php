<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="container">
  <?php if( have_rows( 'charities' ) ): ?>
    <div class="row projects">
      <?php while( have_rows ( 'charities' ) ) : the_row(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <a class="card project-card" href="<?php echo the_sub_field( 'link' ); ?>" style="background-image: url(<?php echo the_sub_field('image'); ?>)">
            <h1><?php the_sub_field('name'); ?></h1>
            <p><?php the_sub_field('description'); ?></p>
            <span>Learn More</span>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>

<?php get_template_part('templates/newsletter', 'signup'); ?>
