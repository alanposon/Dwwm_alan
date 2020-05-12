<?php
//on inclu la definition du widget
include_once plugin_dir_path(__FILE__) . '/hellowidget.php';
// un inclu une fois la fonction qui va chercher le fichier hellowidget 


class HelloClass
{
    // on cree la class hello
    public function __construct()
    {
        // on cree le contenu 
        // on déclare le widget
        add_action('widgets_init', function () {
            register_widget('HelloWidget');
        });
        // on ajoute une action qui quand l'initialisation du widget se produit 
        // ouvre la fonction qui prend le registre du widget ( helloWidget)
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);
        // fonction qui permet de charger le css en meme temps que le css de word press
        add_action('wp_loaded', array($this, 'save_comm'));
        // enregistrement des paramettre 
        add_action('admin_init', array($this, 'register_settings'));
    }
    function persoCSS() // connect notre css perso
    {   // je vais chercher le css 
        wp_enqueue_style('Hellocss', plugins_url('helloworld/design.css'));

    }

    public static function install()
    { //méthode déclenchée à l'activation du plug-in
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}helloworld_commentaire (id INT
AUTO_INCREMENT PRIMARY KEY, comm VARCHAR(255) NOT NULL);");
    } // fonction qui inser tout les commentaire dans une table dans la base de donnée 

    public static function uninstall()
    { //méthode déclenchée à la suppression du module
        global $wpdb;
        
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}helloworld_commentaire;");
    }


    public function save_comm() // sauvegarde des commentaires
    { // si la methode post est en commentaire et si elle est differente de vide 
        if (isset($_POST['helloworld_comm']) && !empty($_POST['helloworld_comm'])) {
            global $wpdb; // la variable globale 
            $comm = $_POST['helloworld_comm']; // on met les commentaires dans la variable com 
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}helloworld_commentaire WHERE
comm = '$comm'");
                // la requete sql pour aller chercherle prefix devant les commentaires .
            if (is_null($row)) { // si c 'est nul 
                $wpdb->insert("{$wpdb->prefix}helloworld_commentaire", array('comm' =>
                         // on insert avant les commentaires le prefix   
                $comm));
            }
        } // on ajoute l'action de sauvegarde au chargement du widget
    }
    public function menu_html()
    { // le html du menu present sur la page !
        echo '<h1>' . get_admin_page_title() . '</h1>';
        // le titre de l'administrateur de la page 
?>
        <form method="post" action="options.php">
        
            <label>Couleur</label>
            <input type="text" name="helloworld_couleur" value="<?php echo
                                                                    get_option("helloworld_couleur") ?>" />
            <?php settings_fields('helloworld_settings')// les paramettres de mon plugin ?>
            <?php submit_button();  // la fonction d'activation de mon bouton  ?>

        </form>
<?php // 
    }
// enregistrement des paramettre 
    public function register_settings()
    { // enregistrer les paramettre 
        register_setting('helloworld_settings', 'helloworld_couleur');
        
    }
}
