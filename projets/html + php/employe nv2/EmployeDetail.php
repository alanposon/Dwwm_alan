<?php 
function chargerClasse($classe){
    require "controller/".$classe . ".class.php";
}
spl_autoload_register("chargerClasse");

$niveau="detail";

require 'controller/Affichages.class.php';
require 'view/head.php';
require 'view/header.php';
echo Affichages::AffichageDetail(3);
require 'view/footer.php';
