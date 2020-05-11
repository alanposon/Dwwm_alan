<?php
//on inclu la definition du widget
include_once plugin_dir_path( __FILE__ ).'/hellowidget.php';  
// pn inclu une fois la fonction qui va chercher le fichier hellowidget 


class HelloClass{
    // on cree la class hello
public function __construct(){
    // on cree le contenu 
// on déclare le widget
add_action('widgets_init', function(){register_widget('HelloWidget');});
// on ajoute une action qui quand l'initialisation du widget se produit 
// ouvre la fonction qui prend le registre du widget ( helloWidget)
add_action('wp_enqueue_scripts',array($this,'persoCSS'),15);
// fonction qui permet de charger le css en meme temps que le css de word press
add_action('wp_loaded', array($this, 'save_comm'));
}
function persoCSS() // connect notre css perso
{
wp_enqueue_style('Hellocss', plugins_url('helloworld/design.css'));
}

public static function install()
{//méthode déclenchée à l'activation du plug-in
global $wpdb;
$wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}helloworld_commentaire (id INT
AUTO_INCREMENT PRIMARY KEY, comm VARCHAR(255) NOT NULL);");
} // fonction qui inser tout les commentaire dans une table dans la base de donnée 

public function save_comm() // sauvegarde des commentaires
{
if (isset($_POST['helloworld_comm']) && !empty($_POST['helloworld_comm']))
{
global $wpdb;
$comm = $_POST['helloworld_comm'];
$row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}helloworld_commentaire WHERE

comm = '$comm'");

if (is_null($row)) {
$wpdb->insert("{$wpdb->prefix}helloworld_commentaire", array('comm' =>

$comm));

}
} // on ajoute l'action de sauvegarde au chargement du widget

}
}