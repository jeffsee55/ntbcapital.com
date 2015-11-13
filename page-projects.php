<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'projects'); ?>
  <a class="btn btn-default" href="javascript:void(0)" id="loadPosts">Load More</a>
  <?php get_template_part('templates/investor', 'cta'); ?>
<?php endwhile; ?>


<?php
wp_reset_postdata();

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
