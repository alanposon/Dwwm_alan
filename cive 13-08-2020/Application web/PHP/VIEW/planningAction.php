<?php
// var_dump($_POST);

$p = new Planning($_POST);
// var_dump($p);
switch ($_GET["act"])
{
    case "ajout":
       PlanningManager::add($p);
        break;
    case "modif":
        PlanningManager::update($p);
        break;
    case "suppr":
        PlanningManager::delete($p);
        break;
}
header("location:index.php?action=confirmation");
//header("refresh:3;url=index.php?action=confirmation");