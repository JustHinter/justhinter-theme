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