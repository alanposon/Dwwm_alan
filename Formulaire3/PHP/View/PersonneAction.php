<?php
$mode = $_GET["mode"];



$p=new Personne($_POST);
switch ($mode){
    case "ajout" : PersonneManager::add($p); break;
    case "modif" : PersonneManager::update($p); break;
    case "suppr" : PersonneManager::delete($p); break;
}
header("location:index.php?action=confirmation");
//header("refresh:3;url=index.php?action=confirmation");