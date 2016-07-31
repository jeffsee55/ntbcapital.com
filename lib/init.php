<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add theme logo
  add_theme_support( 'custom-logo' );

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  //add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  //add_editor_style(Assets\asset_path('styles/editor-style.css'));

}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer Right', 'sage'),
    'id'            => 'footer-right',
    'before_widget' => '<div class="widget %1$s %2$s">',
    'after_widget'  => '</div>',
  ]);

  register_sidebar([
    'name'          => __('Footer Left', 'sage'),
    'id'            => 'footer-left',
    'before_widget' => '<div class="widget %1$s %2$s">',
    'after_widget'  => '</div>',
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

function ntb_customize_register($wp_customize){

  $wp_customize->add_section(
    'site_images', 
    array(
      'title' => __('Site Images', 'ntb'),
    )
  );

  $wp_customize->add_setting(
    'site_image'
  );

  $wp_customize->add_control( new \WP_Customize_Image_Control($wp_customize, 'site_image', array(
    'label'    => __('Site Image', 'ntb'),
    'section'  => 'site_images',
    'settings' => 'site_image',
  )));

  $wp_customize->add_setting(
    'navbar_logo'
  );

  $wp_customize->add_control( new \WP_Customize_Image_Control($wp_customize, 'navbar_logo', array(
    'label'    => __('Navbar Logo', 'ntb'),
    'section'  => 'site_images',
    'settings' => 'navbar_logo',
  )));
 
}
 
add_action('customize_register', __NAMESPACE__ . '\\ntb_customize_register');
