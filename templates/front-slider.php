<section class="slider-section">
  <?php
    $counter_index = 0;
    $slide_index = 0;
  ?>
  <div id="carousel-slider" class="carousel slide" data-ride="carousel" data-wrap="true">
    <ol class="carousel-indicators">
      <?php while( have_rows( 'slide_item' ) ) : the_row();
        if($counter_index == 0) {
          $counter_class = "active";
        } else {
          $counter_class = "";
        }; ?>
        <li data-target="#carousel-slider" data-slide-to="0" class="<?php echo $counter_class; ?>"></li>
        <?php $counter_index++; ?>
      <?php endwhile; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php while( have_rows( 'slide_item' ) ) : the_row();
        if($slide_index == 0) {
          $slide_class = "active";
        } else {
          $slide_class = "";
        }; ?>
        <?php if( !empty( get_sub_field('image') ) ) :
        ?>
          <div class="carousel-item <?php echo $slide_class; ?>" style="background-image: url(<?php echo get_sub_field( 'image' )['sizes']['large'];?>)">
        <?php else : ?>
          <div class="carousel-item <?php echo $slide_class; ?>">
        <?php endif; ?>
          <div class="container">
            <div class="carousel-content"><?php the_sub_field('caption'); ?></div>
          </div>
        </div>
      <?php $slide_index++; ?>
      <?php endwhile; ?>
    </div>
    <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <span id="slider-scroll"><img src="<?php echo get_template_directory_uri() . '/dist/images/arrow-down.png'; ?>"></span>
  </div>
</section>
