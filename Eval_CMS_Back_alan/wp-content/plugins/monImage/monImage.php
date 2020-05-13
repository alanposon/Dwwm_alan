<?php

/*
Plugin Name: monImage
Description: Plugin qui change d'image 
Author: ALAN 
Version: 1.0
*/
// l'image sera apres les articles 

//add_action('wp_head', 'switchImage');
add_filter('the_content', 'switchImage');
add_filter('the_content', 'switchMot'); 

// je vais chercher le sript 
//add_action('wp_enqueue_scripts', array($this, 'designCss'));
function switchImage(){

    $image .= '<img src="goku.jpg">'; 
   
    echo $image; 
}

 function designCss()
    { // active mon fichier css 
        wp_enqueue_style('imageCss', plugins_url('monImage/design.css'));
    }


 // test avec de l'ecrit 
 function switchMot(){

    $mot .= '<p>le titre sera remplacer par celui ci !</p>'; 
    return $mot ; 
 }
