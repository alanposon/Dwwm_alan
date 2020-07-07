<?php

$p = new TempsSansAccident($_POST);

/* Les options ajouter, modifier, supprimer ne sont accessible que par l'administrateur dont le niveau est égal à 3 */
switch ($_GET["act"]){

    case "modif":

            TempsSansAccidentManager::update($p);
        break;
  
}
header("location:index.php?action=confirmation");
