<?php
/**
 * 
 * Theme Fucntions
 * 
 * @package Aquila 
 */


 function aquila_enqueue_scripts(){
     wp_enqueue_style('main-css', get_template_directory_uri() . '/main.css', ['stylesheet'] );
     wp_enqueue('stylesheet', get_stylesheet_uri());
 }

 add_action('wp_enqueue_scripts', 'aquila_enequeue_scripts');

 ?>