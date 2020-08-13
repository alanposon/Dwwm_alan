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

var_dump($_POST);
$p= new Personne($_POST); 
var_dump($p);
PersonneManager::add($p);