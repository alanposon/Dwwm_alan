<?php

// if ($lvl == 3) {
//     header("Location: index.php");
// }

$p = new User($_POST);

/* Les options ajouter, modifier, supprimer ne sont accessible que par l'administrateur dont le niveau est égal à 3 */
switch ($_GET["act"]){
    case "ajout":
        // if ($lvl == "administrateur"){
            UserManager::add($p);
        break;
    case "modif":
        // if ($lvl == "administrateur"){
            UserManager::update($p);
        break;
    case "suppr":
        //  if ($lvl ==3) {
         //   $p->setIdUser($_GET["id"]);
            UserManager::delete($p);
         
        break;
}
header("location:index.php?action=confirmation");
