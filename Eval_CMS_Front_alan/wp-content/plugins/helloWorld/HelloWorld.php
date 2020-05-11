<?php

 global $wpdb;

//*********** connecter le fichier avec le word press  ************/
 /* Plugin Name: hello world
Description: ecrit Hello World
Author: Alan
Version: 1.0 */


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
//         register_activation_hook(__FILE__, array('helloclass', 'install'));
//         //desinstalation
//         register_deactivation_hook(__FILE__, array('helloclass', 'uninstall'));
     }
     public static function uninstall()
{//méthode déclenchée à la suppression du module
global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}helloworld_commentaire;");
}
 }
new HelloWorld_Plugin();
// // on cree le plugin 

