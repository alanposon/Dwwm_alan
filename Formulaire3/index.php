<?php
function ChargerClasse($classe)
{
    if (file_exists("php/Controller/" . $classe . ".Class.php")) {
        require "php/Controller/" . $classe . ".Class.php";
    }

    if (file_exists("php/Model/" . $classe . ".Class.php")) {
        require "php/Model/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");
function AfficherPage($nom)
{
    include 'php/view/head.php';
    include 'php/view/header.php';
    include 'php/view/' . $nom . '.php';
    include 'php/view/footer.php';
}

DbConnect::init();
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "PersonneAction":
            AfficherPage("PersonneAction");
            break;
        case "confirmation":
            AfficherPage("confirmation");
            break;
        case "PersonneForm":
            AfficherPage("PersonneForm");
            break;
        case "accueil":
            AfficherPage("personneliste");
            break;
    }
} else {
    AfficherPage("personneliste");
}
