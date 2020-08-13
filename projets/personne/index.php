<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/Model/" . $classe . ".Class.php"))
    {
        require "PHP/Model/" . $classe . ".Class.php";
    }
    else
    {
        require "PHP/Controller/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

DbConnect::init(); 

require "PHP/View/head.php";
require "PHP/View/header.php";
require "PHP/View/formulaire.php";
require "resultat.php";
require "PHP/View/footer.php";

