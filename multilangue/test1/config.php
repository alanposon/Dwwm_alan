<?php
if(empty($_GET['lang'])){
    $_SESSION['lang'] = "fr";
}else{
    switch($_GET['lang']){
        case "fr":
        $_SESSION['lang'] = "fr";
        break;
        case "en":
        $_SESSION['lang'] = "en";
        break;
        case "it":
        $_SESSION['lang'] = "it";
        break;
        default :
        $_SESSION['lang'] = "fr"; //au cas ou quelqu'un rentre autre chose que fr/en ou it
        break;
    }
}
 
switch($_SESSION['lang']){
        case "fr":
        $fichier_langage = "lang/fichier_fr.php";
        break;
        case "en":
        $fichier_langage = "lang/fichier_en.php";
        break;
        case "it":
        $fichier_langage = "lang/fichier_it.php";
        break;
}
include($fichier_langage);
?>