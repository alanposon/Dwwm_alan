<?php
function chargerClasse($classe)
{
    require "Controller/".$classe . ".class.php";
}
spl_autoload_register("chargerClasse");

require "View/head.php";
require "View/header.php";
/*echo AffichageEmploye::AffichageListeEmploye();*/
echo AffichageEmploye::AffichageDetailEmploye(0);

require "View/footer.php";
