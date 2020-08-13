<?php //
function chargerClasse($classe)
{
    require "Controller/".$classe . ".class.php";
}
spl_autoload_register("chargerClasse");
$niveau="liste"; 
$blague="oui";
require "View/head.php";

require "View/header.php";
//echo AffichageEmploye::AffichageListeEmploye();
echo AffichageEmploye::AffichageDetail(0);

require "View/footer.php";
