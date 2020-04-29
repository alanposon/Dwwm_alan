<?php
$mode = $_GET["m"];
$p = new User($_POST);
switch ($mode)
{
    case "ajout":
        UserManager::add($p);
        break;
    case "modif":
        UserManager::update($p);
        break;
    case "suppr":
        if ($lvl==2)
        {
            UserManager::delete($p);
        }
        break;
}
header("location:index.php?action=Confirmation");
