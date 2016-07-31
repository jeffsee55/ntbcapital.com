<?php
/**
 * Template Name: Card Template
 */
while (have_posts()) : the_post();
  get_template_part('templates/page', 'header');
  get_template_part('templates/content', 'projects');
  get_template_part('templates/investor', 'cta');
endwhile;
