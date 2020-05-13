<?php
/*
Plugin Name: horraire
Description: Plugin qui presente les horraires d'ouvertures
Author: ALAN 
Version: 1.0
 */
class HorrairePlugin
{
    public function __construct()
    { // j'inclue les fichier du plugin si ils sont pas deja charger 
        include_once plugin_dir_path(__FILE__) . '/horraireclass.php';
        // fonction d'enrtegistrement du plugin pour l'horraire 
        register_activation_hook(__FILE__, array('horraireclass', 'instalHorraire'));
        // fonction de desactivation du pluggin 
        register_desactivation_hook(__FILE__, array('horraireclass', 'desinstalHorraire'));
               // fonction de suppression du plugin 
        register_suppression_hook(__FILE__, array('horraireclass', 'suppresHorraire'));
        // ON va chercher nos fonctions 

        new horraireClass();
        
    }
}
new HorrairePlugin();