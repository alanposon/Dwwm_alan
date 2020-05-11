<?php
class hellowidget extends WP_Widget
// on cree la class hellowidget 
{
   
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
add_action('wp_loaded', array($this, 'save_comm'));
    }
public function __construct()
{ // on cree son constructeur 
parent::__construct('helloworld', 'Hello World', array('description' => 'Un plug-in
qui écrit Hello World'));
// on prend le construct du parent et tout se quil y a dedans 
}
public function widget($args, $instance)
{ // formulaire afficher à l'écran pour l'utilisateur
// on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
echo $args['before_widget'];
// on affiche avant le widget 
echo $args['before_title'];
// on affiche avant le titre 
echo apply_filters('widget_title', $instance['title']);
// on applique un filtre sur le widget du titre 
echo $args['after_title'];
// on affiche apres le titre 
// corps du widget
?>
<h1>rendez nous Gabriel</h1> <!--  se qui aura d'afficher  -->
<form action="" method="post">
<p>
<label for="helloworld_comm">Votre commentaire :</label>
<input id="helloworld_comm" name="helloworld_comm" type="texte"/>
</p>
<input type="submit"/>
</form>


<?php
echo $args['after_widget'];
}
}
