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

// Custom Function to Include
function meta_seo_links() {
    echo '<meta name="description" content="Just hinter is the is the collection of techniques, skills, methods." >' . "\n";
    echo '<meta name="keywords" content="coding,programming websites,online programs,code for free">' . "\n";
}
add_action( 'wp_head', 'meta_seo_links' );
