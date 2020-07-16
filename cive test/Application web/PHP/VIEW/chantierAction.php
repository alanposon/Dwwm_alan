<?php
// var_dump($_POST);

$p = new Chantier($_POST);
// var_dump($p);
switch ($_GET["act"])
{
    case "1":
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