<?php
 var_dump($_POST);

$p = new TempsSansAccident($_POST);
 var_dump($p);
switch ($_GET["act"])
{
    case "ajout":
        TempsSansAccidentManager::add($p);
        break;
    case "modif":
        TempsSansAccidentManager::update($p);
        break;
    case "suppr":
        TempsSansAccidentManager::delete($p);
        break;
}
header("location:index.php?action=confirmation");
//header("refresh:3;url=index.php?action=confirmation");