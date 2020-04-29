<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/controller/" . $classe . ".Class.php"))
    {
        require "PHP/controller/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/model/" . $classe . ".Class.php"))
    {
        require "PHP/model/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

function afficherPage($chemin, $page, $titre) {
	require  'php/View/Head.php';
	require  'php/View/Header.php';
    require $chemin . $page.'.php';
	require 'php/View/Footer.php';
}


DbConnect::init($base);
session_start();

if (isset ( $_GET ['action'] )) {

	
	switch ($_GET ['action']) {
		
		case 'nouveauUser' :
			{
				afficherPage ( 'Php/View/', 'FormEnregistrement', "Nouvel Utilisateur" );
				break;
			}
		case 'connect' :
			{
				afficherPage ( 'Php/View/', 'FormConnection', "Connection" );
				break;
			}
		case 'deconnect' :
			{
				afficherPage ( 'Php/View/', 'FormDeconnection', "Deconnection" );
				break;
			}
        case "ClientAction":
            AfficherPage('Php/View/',"ClientAction","");
            break;
        case "ClientForm":
            AfficherPage('Php/View/',"ClientForm","Gestion du client");
            break;
        case "ClientListe":
            AfficherPage('Php/View/',"Clientliste","Liste des clients");
            break;
	}
} else { // Sinon, on affiche la page principale du site
	afficherPage ( 'Php/View/', 'FormConnection', "Connection" );
} 