<?php
/**
 * Created by PhpStorm.
 * User: raoasifraza
 * Date: 27/07/2017
 * Time: 11:43 AM
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

/** register meta tags */
function register_meta_tags() {
    echo '<meta name="description" content="Just hinter is the is the collection of techniques, skills, methods." >' . "\n";
    echo '<meta name="keywords" content="coding,programming websites,online programs,code for free">' . "\n";
}
add_action( 'wp_head', 'register_meta_tags');

/** register more css */
function reg_more_css(){
    wp_register_style( 'registration-styles', get_stylesheet_directory_uri() . '/css/registration-styles.css' );

}

function add_registration_styles(){
    if (is_page('login-page')){
        wp_enqueue_style('registration-styles');
    }

}
add_action('init', 'reg_more_css');
add_action('wp_enqueue_scripts', 'add_registration_styles');

/** register more js */
function reg_more_js(){
    wp_register_script('registration-script', get_stylesheet_directory_uri() . '/js/registration-script.js');
}

function add_registration_script(){
    if(is_page('login-page'))
        wp_enqueue_script('registration-script');
}
add_action('init', 'reg_more_js');
add_action('wp_enqueue_scripts', 'add_registration_script');


/** Redirection on logout */
function logout_page() {
    $login_page  = home_url('login-page');
    wp_redirect( $login_page );
    exit;
}
add_action('wp_logout','logout_page');
