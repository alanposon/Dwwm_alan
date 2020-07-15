<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php")) {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php")) {
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");


function afficherPage($chemin, $page, $titre)
//function AfficherPage($nom)

{
    include 'PHP/VIEW/head.php';
    include 'PHP/VIEW/header.php';
    //include 'PHP/VIEW/' . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include $chemin . $page . '.php';
    include 'PHP/VIEW/footer.php';
}

//on active la connexion à la base de données
DbConnect::init();
session_start();




// fichier langue // 
if (isset($_GET['lang'])) {
    $_SESSION['langue'] = $_GET['lang'];
}


/*********** version xml  *************/

// if (!empty($_GET['lang'])) {
//     $lang = $_GET['lang'];
// } else {
//     $lang = 'fr';
// }
// $bibliotheque = simplexml_load_file('/XML/langues.xml');
// $langue = $bibliotheque->$lang;
// echo $tras100;


//Si une route est demandée
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {


            //Afficher la page correspondante

        case "acceuil":
            AfficherPage('Php/View/', 'acceuil', "acceuil");
            break;

        case "administration":
            AfficherPage('Php/View/', 'administration', "administration");
            break;

        case "ajoutModifOffreEmploi":
            AfficherPage('Php/View/', 'ajoutModifOffreEmploi', "ajoutModifOffreEmploi");
            break;


        case "chantierListe":
            AfficherPage('Php/View/', 'chantierListe', "chantierListe");
            break;
            //*********************************** */

        case "Liste":
            AfficherPage('Php/View/', 'Liste', "Liste");
            break;

            //****************************** */

        case "chantierForm":
            AfficherPage('Php/View/', 'chantierForm', "chantierForm");
            break;


        case "chantierAction":
            AfficherPage('Php/View/', 'chantierAction', "chantierAction");
            break;

        case "connectionAction":
            AfficherPage('Php/View/', 'connectionAction', "connectionAction");
            break;

        case "connectionForm":
            AfficherPage('Php/View/', 'connectionForm', "connectionForm");
            break;

        case "confirmation":
            AfficherPage('Php/View/', 'confirmation', "confirmation");
            break;

        case "confirmationChantier":
            AfficherPage('Php/View/', 'confirmationChantier', "confirmationChantier");
            break;

        case "contact":
            AfficherPage('Php/View/', 'contact', "contact");
            break;

        case "deconnectionAction":
            AfficherPage('Php/View/', 'deconnectionAction', "deconnectionAction");
            break;

        case "deconnectionForm":
            AfficherPage('Php/View/', 'deconnectionForm', "deconnectionForm");
            break;

        case "dernierAccidentForm":
            AfficherPage('Php/View/', 'dernierAccidentForm', "dernierAccidentAction");
            break;

        case "dernierAccidentAction":
            AfficherPage('Php/View/', 'dernierAccidentAction', "dernierAccidentAction");
            break;

        case "dernierAccidentListe":
            AfficherPage('Php/View/', 'dernierAccidentListe', "dernierAccidentListe");
            break;


        case "HCTS":
            AfficherPage('Php/View/', 'HCTS', "HCTS");
            break;

        case "htmlConnection":
            AfficherPage('Php/View/', 'htmlConnection', "htmlConnection");
            break;

        case "htmlInscription":
            AfficherPage('Php/View/', 'htmlInscription', "htmlInscription");
            break;

        case "inscriptionForm":
            AfficherPage('Php/View/', 'inscriptionForm', "inscriptionForm");
            break;

        case "legislation":
            AfficherPage('Php/View/', 'legislation', "legislation");
            break;

        case "nosActivitesCIVE":
            AfficherPage('Php/View/', 'nosActivitesCIVE', "nosActivitesCIVE");
            break;
        case "notreMetier":
            AfficherPage('Php/View/', 'notreMetier', "notreMetier");
            break;

        case "notreParcMachineCIVE":
            AfficherPage('Php/View/', 'notreParcMachineCIVE', "notreParcMachineCIVE");
            break;

        case "nosRealisationsCIVE":
            AfficherPage('Php/View/', 'nosRealisationsCIVE', "nosRealisationsCIVE");
            break;

        case "nosActivitesHCTS":
            AfficherPage('Php/View/', 'nosActivitesHCTS', "nosActivitesHCTS");
            break;

        case "notreParcMachineHCTS":
            AfficherPage('Php/View/', 'notreParcMachineHCTS', "notreParcMachineHCTS");
            break;

        case "nosRealisationsHCTS":
            AfficherPage('Php/View/', 'nosRealisationsHCTS', "nosRealisationsHCTS");
            break;

        case "offreEmploiFormAdmin":
            AfficherPage('Php/View/', 'offreEmploiFormAdmin', "offreEmploiFormAdmin");
            break;

        case "offreEmploiActionAdmin":
            AfficherPage('Php/View/', 'offreEmploiActionAdmin', "offreEmploiActionAdmin");
            break;

        case "offreEmploiListeAdmin":
            AfficherPage('Php/View/', 'offreEmploiListeAdmin', "offreEmploiListeAdmin");
            break;

        case "planning":
            AfficherPage('Php/View/', 'planning', "planning");
            break;

        case "postulerForm":
            AfficherPage('Php/View/', 'postulerForm', "postulerForm");
            break;

        case "rechercheEmploi":
            AfficherPage('Php/View/', 'rechercheEmploi', "rechercheEmploi");
            break;

        case "reponseOffreEmploi":
            AfficherPage('Php/View/', 'reponseOffreEmploi', "reponseOffreEmploi");
            break;

        case "rechercheEmploiAdmin":
            AfficherPage('Php/View/', 'rechercheEmploiAdmin', "rechercheEmploiAdmin");
            break;
        case "userListeAdmin":
            AfficherPage('Php/View/', 'userListeAdmin', "userListeAdmin");
            break;

        case "userActionAdmin":
            AfficherPage('Php/View/', 'userFormAdmin', "userFormAdmin");
            break;

        case "userFormAdmin":
            AfficherPage('Php/View/', 'userFormAdmin', "userFormAdmin");
            break;
    }
} else {  //Sinon afficher la page par defaut
    AfficherPage('Php/View/', 'acceuil', "acceuil");
}
