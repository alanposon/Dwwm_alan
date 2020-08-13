<?php
//  var_dump($_POST);

$p = new OffreEmploi($_POST);
//  var_dump($p);
switch ($_GET["act"])
{
    case "ajout":
        OffreEmploiManager::add($p);
        break;
    case "modif":
        OffreEmploiManager::update($p);
        break;
    case "suppr":
        OffreEmploiManager::delete($p);
        break;
}
header("location:index.php?action=confirmation");
//header("refresh:3;url=index.php?action=confirmation");