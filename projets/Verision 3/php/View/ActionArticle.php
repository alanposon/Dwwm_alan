<?php
$mode = $_GET["m"];
$p = new Article($_POST);
switch ($mode)
{
    case "ajout":
        ArticleManager::add($p);
        break;
    case "modif":
        ArticleManager::update($p);
        break;
    case "suppr":
        if ($lvl==2)
        {
            ArticleManager::delete($p);
        }
        break;
}
header("location:index.php?action=Confirmation");
