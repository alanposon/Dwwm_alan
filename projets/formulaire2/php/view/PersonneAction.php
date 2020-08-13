<?php
// test 
var_dump($_POST);
/* creation d'un nouvel objet "personne" */
$p = new Personne($_POST);
// test
var_dump($p);
// suivant l'action a realiser 
switch ($_GET["act"]) {
    case "ajout":
        PersonneManager::add($p);
        break;
    case "modif":
        PersonneManager::update($p);
        break;
    case "suppr":
        PersonneManager::delete($p);
        break;
}
// redirection vers une confirmation 
header("location:index.php?action=confirmation");
