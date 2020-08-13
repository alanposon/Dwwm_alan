<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/Model/" . $classe . ".Class.php"))
    {
        require "PHP/Model/" . $classe . ".Class.php";
    }
     if (file_exists("PHP/Controller/" . $classe . ".Class.php"))
     {
        require "PHP/Controller/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

DbConnect::init(); 

function AfficherPage($nom)
{

include "PHP/View/head.php";
include "PHP/View/header.php";

include 'PHP/View/' . $nom . '.php';
include "PHP/View/footer.php";
}


if (isset($_GET["action"]))
{
    switch ($_GET["action"])
    {
        case "confirmation":
            AfficherPage("confirmation");
            break;
        
        case "accueil":
            AfficherPage("formulaire");
            break;

            case "PersonneForm":
            AfficherPage("PersonneForm");
            break;

            case "PersonneAction":
                AfficherPage("PersonneAction");
                break;
    }
}
else
{
    AfficherPage("liste");
}