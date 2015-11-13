<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="container">
  <div class="row">
    <?php $investor_posts = new WP_Query( array( 'category_name' => 'ebuak-bay' ) ); ?>
      <?php if ( $investor_posts->have_posts() ) : ?>
        <div class="col-sm-12 col-md-6">
          <div class="row">
            <h2 class="header">Ebuak Bay</h2>
            <?php while( $investor_posts->have_posts() ) { $investor_posts->the_post(); ?>
              <div class="col-sm-12">
                <a class="card investment-card" href="#" style="background-image: url(http://placehold.it/400x400)">
                  <h1>Ebuak Bay</h1>
                  <h2><?php the_title(); ?></h2>
                </a>
              </div>
            <?php }; ?>
          </div>
        </div>
      <?php endif; ?>
      <?php $investor_posts = new WP_Query( array( 'category_name' => 'serangan-headland' ) ); ?>
      <?php if ( $investor_posts->have_posts() ) : ?>
        <div class="col-sm-12 col-md-6">
          <div class="row">
            <h2 class="header">Serangan Headland</h2>
            <?php while( $investor_posts->have_posts() ) { $investor_posts->the_post(); ?>
              <div class="col-sm-12">
                <a class="card investment-card" href="#" style="background-image: url(http://placehold.it/400x400)">
                  <h1>Serangan Headland</h1>
                  <h2><?php the_title(); ?></h2>
                </a>
              </div>
            <?php }; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  <?php wp_reset_postdata(); ?>
</div>

<?php get_template_part('templates/newsletter', 'signup'); ?>
