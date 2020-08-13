<?php
// var_dump($_POST);

$p = new Personnage($_POST);
// var_dump($p);
switch ($_GET["act"])
{
    case "ajout":
        PersonnageManager::add($p);
        break;
    case "modif":
        PersonnageManager::update($p);
        break;
    case "suppr":
        PersonnageManager::delete($p);
        break;
}
header("location:index.php?action=confirmation");
