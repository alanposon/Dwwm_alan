<?php 

function chargerClasse($classe){
    require "controller/".$classe . ".class.php";
}
spl_autoload_register("chargerClasse");

$niveau="liste";

require 'controller/Affichages.class.php';
require 'view/head.php';
require 'view/header.php';
echo Affichages::Affichage();
require 'view/footer.php';
