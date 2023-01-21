<?php

function apd_theme_styles()
{

  // internal style sheet
  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');

  ///from the css folder
  wp_enqueue_style('reset_css', get_template_directory_uri() . '/assets/css/reset.css');

  //this is the compiled sass
  wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');

  //font-awesome
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');


  ///google fonts
  wp_enqueue_style('gfonts_css', 'https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700|Raleway:300,300i,400,400i,500,500i,600');

  //font-awesome
  // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

///AND DON’T FORGET TO CALL IT
add_action('wp_enqueue_scripts', 'apd_theme_styles');

function apd_theme_js()
{

  ///for your basic app.js
  wp_enqueue_script('app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true);

  /// for another .js script
  // wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
  //
}

///AND DON’T FORGET TO CALL IT
add_action('wp_enqueue_scripts', 'apd_theme_js');

////add theme support
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support("title-tag");


// turn off guttenburg use classic editor
add_filter('gutenberg_can_edit_post' . '__return_false', 5);
add_filter('use_block_editor_for_post' . '__return_false', 5);


///////Custom Functions
require('inc/apd_widget.php');
require('inc/apd_menus.php');
require('inc/apd_excerpt.php');
