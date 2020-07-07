<?php

if ($_GET['langue']=='Fr') {           // si la langue est 'fr' (français) on inclut le fichier langueFr.php
    include('LANGUE/langueFr.php');
}

else if ($_GET['langue']=='An') {      // si la langue est 'en' (anglais) on inclut le fichier langueAn.php
    include('LANGUE/langueAn.php');
}

else {                                 // si aucune langue n'est déclarée on inclut le fichier langueFr.php par défaut
    include('LANGUE/langueFr.php');
}
?>