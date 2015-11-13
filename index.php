<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php 
$index = 0; 
$columns = "";
?>

<div class="container">
  <div class="row article-row">
    <?php while (have_posts()) : the_post(); ?>
    <?php if($index == 0 || $index == 1) {
        $columns = "6";
      } else {
        $columns = "4";
      }
    ?>
      <div class="col-sm-<?php echo $columns; ?>">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
      <?php $index++; ?>
    <?php endwhile; ?>
  </div>

</div>
<?php get_template_part('templates/newsletter', 'signup'); ?>
