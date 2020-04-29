<?php
$mode = $_GET["m"];
$p = new Ville($_POST);
switch ($mode)
{
    case "ajout":
        VilleManager::add($p);
        break;
    case "modif":
        VilleManager::update($p);
        break;
    case "suppr":
        if ($lvl==2)
        {
            VilleManager::delete($p);
        }
        break;
}
header("location:index.php?action=Confirmation");
