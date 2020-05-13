<?php


// post-scriptum : Martine je suis dsl du code que tu va voir 
// j'apprend encore aujourd'hui a m'en servir 
// dieu sait que je me mettrais a font dans mon projet de stage 
// pour poursuivre mon apprentissage 
// pour l'heure je suis pas fier de te presenter sa mais j'ai essayer de te 
// presenter au mieu se que j'ai compris des relation entre les differentes fonction 
// j'y travaille encore et je percevere ! 
// bonne lecture , ci je peux me permettre 

//on inclu la definition du widget
include_once plugin_dir_path(__FILE__) . '/horrairewidget.php';
class horraireClass
{
    public function __construct() // mon constructeur le moteur de mon widget
    {
        // on déclare/in initialise  le widget et on l'enregistre
        add_action('widgets_init', function () {register_widget('horrairewidget');});
        // on sauvegarde les horraires rentrer par la personne 
        add_action('wp_loaded', array($this, 'sauvegardeHorraire'));
    
    }

    public static function instalHorraire()
    { // cree une table dans la bdd 
        //des que j'active le plug-in
        global $wpdb;// declarer directement en fonction 
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}NouvHorraire(id INT
        AUTO_INCREMENT PRIMARY KEY, hor VARCHAR(255) NOT NULL);");  
    } // hor c'est se quil y a dans ma base de donner les horraire
    // nouveauHorraire c'est ma table 

    public static function desinstalHorraire()
    {//fonction de  desinstalation de la table  
    global $wpdb; // vide la table a base de donner 
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}desinstalHorraire_NouvHorraire;");
    }
    
    public static function suppresHorraire()
    {//fonction de supprime table  
    global $wpdb; // sup la table de la base de donner 
    $wpdb->query("DELETE TABLE IF EXISTS {$wpdb->prefix}suppresHorraire_NouvHorraire;");
    }
    public function sauvegardeHorraire()
    // je sauvegarde les horraires que la personne m'aura entrer 
    { // si il est paramettrer et remplie 
        if (isset($_POST['NouvHorraire']) && !empty($_POST['NouvHorraire'])) {
            global $wpdb;
            $hor = $_POST['NouvHorraire']; // on le met dans une variable 
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}NouvHorraire WHERE hor = '$hor'");
            // on compare 

            if (is_null($row)) { // si il est pas param et vide 
                $wpdb->insert("{$wpdb->prefix}NouvHorraire", array('hor' =>$hor)); 
                // insert un nouveau dans la bdd 

            }
        }
    }
