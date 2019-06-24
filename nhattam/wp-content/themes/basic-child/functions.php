<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'ms_theme_editor_parent_css' ) ):
    function ms_theme_editor_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'themify-common' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'ms_theme_editor_parent_css', 11 );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style> body.post-type-page #postdivrich{display:none;}</style>';
}

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-2.2.1.min.js", array(), '2.2.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

// END ENQUEUE PARENT ACTION
wp_enqueue_style ('hamburger-style', get_stylesheet_directory_uri().'/css/jquery.fatNav.min.css', array('theme-style'));
wp_enqueue_style ('vt-custom-style', get_stylesheet_directory_uri().'/vt-custom.css', array('theme-style'));
wp_enqueue_script( 'hamburger-jquery', get_stylesheet_directory_uri().'/js/jquery.fatNav.min.js', array('jquery'));
wp_enqueue_script( 'vt-custom-jquery', get_stylesheet_directory_uri().'/page.js', array('jquery'), '1.0.0', true );

function mce_mod( $init ) {
  $init['apply_source_formatting'] = false;
  return $init;
}
add_filter('tiny_mce_before_init', 'mce_mod', 99);