<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/controller/" . $classe . ".Class.php")) {
        require "PHP/controller/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/model/" . $classe . ".Class.php")) {
        require "PHP/model/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function afficherPage($chemin, $page, $titre)
{
    require 'php/View/head.php';
    require 'php/View/header.php';
    require $chemin . $page . '.php';
    require 'php/View/footer.php';
}
DbConnect::init();
session_start();

if (isset($_GET['action']) || isset($_GET['m']) || isset($_GET['id'])) {

    switch ($_GET['action']) {
        case 'connect': {
                afficherPage('Php/View/', 'FormConnection', "Connection");
                break;
            }
        case 'deconnect': {
                afficherPage('Php/View/', 'HtmlDeconnection', "Deconnection");
                break;
            }
        case 'fondCaisse': {
                afficherPage('Php/View/', 'FormFondCaisse', "Fond de caisse");
                break;
        }
        case 'InterfacePrincipal': {
            afficherPage('Php/View/', 'InterfaceForm', "Interface");
            break;
    }
    case 'TicketAffichage': {
        afficherPage('Php/View/', 'TicketAffichage', "Affichage Ticket");
        break;
    
}
        case 'ChoixListe':{ 
        afficherPage('PHP/View/','ChoixListe','Choix Liste');
        break;
        }
        case 'ListeArticle':{
            afficherPage('PHP/View/','ListeArticle','Liste Article');
            break;
        }
               case 'ListeUser':{
            afficherPage('PHP/View/','ListeUser','Liste User');
            break;
        }
               case 'ListeCaisse':{
            afficherPage('PHP/View/','ListeCaisse','Liste Caisse');
            break;
        }
               case 'ListeCategorie':{
            afficherPage('PHP/View/','ListeCategorie','Liste Categorie');
            break;
        }
    }
} else { // Sinon, on affiche la page principale du site
    afficherPage('Php/View/', 'ChoixListe', "Choix Liste");
}
