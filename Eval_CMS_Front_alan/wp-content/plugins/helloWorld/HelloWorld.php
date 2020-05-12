<?php

 global $wpdb;

//*********** connecter le fichier avec le word press  ************/
 /* Plugin Name: hello world
Description: ecrit Hello World
Author: Alan
Version: 1.0 */

/****************test de fonction cree par alan ************/

/**** je cree alan dans le head  */
add_action('wp_head', 'fonctionAlan');
add_filter('default_content', 'contenu_par_defaut'); 
// j'ajoute un filtre qui preremplie 
add_filter('the_content','messageApresContenu');
// mettre un message apres les articles 
add_shortcode('nouveauShortcode','newShortcode');
// cree un shortcode 

function newShortcode(){

     echo ('<div class="test><p>shortcode de alan </p></div>');
     

}

function messageApresContenu(){
     $content .= '<p>alan aime ça !</p>'; 
     return $content; 
}

 function fonctionAlan(){
    // je veux afficher : 
    echo('<p> le test d alan </p>');

    // fonction qui changera la couleur de mon titre 

}

/************ je preremplie mes article ************ */

function contenu_par_defaut(){
     return "votre commentaire  
     
     titre : 
     
     commentaire : 
     
     signature : ";
}

// ************** hello world sous forme de widget ( )
 class HelloWorld_Plugin { // on inclut et instancie la classe 
   
     public function __construct()   {
  include_once plugin_dir_path(__FILE__) . '/helloClass.php';
       new HelloClass();
       // quand tu active sa importe dans la base de donner 
       register_activation_hook(__FILE__, array('helloclass', 'install'));
       // quand tu desactive sa sup de la base de donner 
       register_deactivation_hook(__FILE__, array('helloclass', 'uninstall'));
       //         //Instalation

       add_action('admin_menu', array($this, 'add_admin_menu'),20);
     }
   


     public function add_admin_menu()
{ //on ajoute une page dans le menu administrateur
add_menu_page('Hello World', 'Hello World plugin', 'manage_options',

'helloworld', array($this, 'menu_html'));

}
public function menu_html() {
echo '<h1>'.get_admin_page_title().'</h1>';
echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
// on marque sur la page d'acceuil 
}
 
 }
new HelloWorld_Plugin();
// // on cree le plugin 

