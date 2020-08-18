<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','twentytwenty-style','twentytwenty-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), null, true);
    wp_enqueue_script('wow-script', get_stylesheet_directory_uri() . '/js/wow.js');
    wp_enqueue_style( 'custom-css',  get_stylesheet_directory_uri()  . '/css/style.css');
    wp_enqueue_style( 'animate-css',  get_stylesheet_directory_uri()  . '/css/animate.css');
    wp_enqueue_style( 'font-awesome-css',  get_stylesheet_directory_uri()  . '/css/webfonts/all.css');

    
}
// END ENQUEUE PARENT ACTION
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDMgF511slbsIhC1tIJrdFuectm3ccGFas';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDMgF511slbsIhC1tIJrdFuectm3ccGFas');
}
add_action('acf/init', 'my_acf_init');