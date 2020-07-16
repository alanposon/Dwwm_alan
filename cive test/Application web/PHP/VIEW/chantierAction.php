<?php

$p = new Chantier($_POST);

switch ($_GET["act"])
{
    case "ajout":
        ChantierManager::add($p);
        break;
    case "modif":
        ChantierManager::update($p);
        break;
    case "suppr":
        ChantierManager::delete($p);
        break;
}
header("location:index.php?action=confirmation");
//header("refresh:3;url=index.php?action=confirmation");