<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Add Theme Settings Page If ACF Is Enabled
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'position'    => '59.9'
  ));

}

// Post Thumbnail Support
add_theme_support('post-thumbnails');

// Add Styles and Scripts to Theme
add_action('wp_enqueue_scripts', 'mb_enque_files');
function mb_enque_files() {

  // Bootstrap CSS
  wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false, '4.1.3' );
  wp_enqueue_style( 'bootstrap-css' );

  // Open Sans
  wp_register_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i' );
  wp_enqueue_style( 'open-sans' );

  // FontAwesome
  wp_register_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', false, '5.2.0' );
  wp_enqueue_style( 'font-awesome' );

  // Theme CSS
  wp_enqueue_style('Theme', get_template_directory_uri() . '/assets/css/theme.css', array( 'bootstrap-css', 'font-awesome', 'open-sans' ), '1.0.0' );


  // Popper JS
  wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true );

  // Bootstrap JS
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.1.3', true );

  // Paralax JS
  wp_enqueue_script( 'paralax-js', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js', array('jquery'), '1.4.2', true );

  // Theme JS
  wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery', 'bootstrap-js'), '1.0.0', true );

  wp_enqueue_script( 'vv-js', 'https://www.votervoice.net/Scripts/1AwAAAAAAAA/Plugin.js?app=campaigns' );
  
}