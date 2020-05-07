<?php

// mon theme enfant

// je met 15 pour aller chercher ma feuille de style 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' ,15);
function theme_enqueue_styles() {
// la feuille de style parent 
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// la feuille de style enfant 
wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
}
