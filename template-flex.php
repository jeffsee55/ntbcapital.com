<?php
/**
 * Template Name: Flex Template
 */
$index = 0;

if( have_rows('content') ):

    while ( have_rows('content') ) : the_row(); $index++;

      switch( get_row_layout() ) {
      case ( 'slider' ) :
        get_template_part('templates/front', 'slider');
        get_template_part('templates/header');
        break;

      case ( 'section' ) :
        echo '<div class="section" id="section' . $index . '">';
          echo '<h1>' . get_sub_field('title') . '</h1>';
          echo get_template_part('templates/dots');
          echo '<div class="scroll-reveal section-content">' . get_sub_field('content') . '</div>';
        echo '</div>';
        break;

      case ( 'image' ) :
        $image_array = get_sub_field( 'image' );
        if( is_array( $image_array ) && ! empty( $image_array ) ) :
          $image_url = $image_array['sizes']['large'];
          echo '<div class="image-section parallax-window" data-parallax="scroll" data-image-src="' . $image_url . '"></div>';
        endif;
        break;

      case ( 'quote' ) :
        echo '<div class="section quote-section" style="background-image: url(' . get_theme_mod( 'site_image' ) . ')" id="section"' . $index .'"><blockquote>' . get_sub_field("quote_text") . '</blockquote></div>'; 
        break;

      case ('grid'):
        get_template_part('templates/front', 'grid');
        break;

      case( 'team_grid' ) :

        get_template_part('templates/front', 'team');
        break;

      default :
        echo '';

      }
    endwhile;

else :

    // no layouts found

endif;

?>
