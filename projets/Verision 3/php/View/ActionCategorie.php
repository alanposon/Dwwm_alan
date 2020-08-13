<?php
$mode = $_GET["m"];
$p = new Categorie($_POST);
switch ($mode)
{
    case "ajout":
        CategorieManager::add($p);
        break;
    case "modif":
        CategorieManager::update($p);
        break;
    case "suppr":
        if ($lvl==2)
        {
            CategorieManager::delete($p);
        }
        break;
}
header("location:index.php?action=Confirmation");
