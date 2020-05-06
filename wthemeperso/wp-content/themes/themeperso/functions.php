<?php



//namespace App; // evite les colision 


// ************* mon theme support 
function monThemeSupports()
{
    add_theme_support('title-tag');
}

function monTheme_register_style()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'); // charger la partie css
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false , true ); // cherger la partie js
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true); // hcarger les pop up , quand les 3 sont a true sa permet de les mettre dans le footer 
    wp_deregister_script('jquery'); // je remplace par mon jquery a moi 
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' ,[] ,false , true ); // []pas de dependance , flase = pas de version , true = in footer 
    wp_enqueue_style('bootstrap'); // rajouter dans la liste un style qu'on a definit 
    wp_enqueue_script('bootstrap'); // charge les script dans un ordre 
}

add_action('after_setep_theme', 'monThemeSupports');
add_action('wp_enqueue_scripts', 'monTheme_register_style');

//add_action('after_setup_theme', function (){

//});


// add_action('wp_head', function (){
//     die('salut toi labas '); 

// }); // le die sera executer a chaque fois que le do action est utiliser 

// add_action('wp_head', function (){
//     die('a terre toi labas '); 

// }, 5); // 5 priorite inferieur pour le passer prioritaire 
