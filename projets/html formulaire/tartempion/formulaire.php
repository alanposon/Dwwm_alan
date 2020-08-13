<?php 

var_dump($_POST); 

function ChargerClasse($classe)
{
    if (file_exists( "PHP/Controller/".$classe.".Class.php"))  require  "PHP/Controller/".$classe.".Class.php";
    if (file_exists( "PHP/Model/".$classe.".Class.php"))  require  "PHP/Model/".$classe.".Class.php";
}
spl_autoload_register("ChargerClasse");
DbConnect::init();
$p=new Personne($_POST);
var_dump($p);
PersonneManager::add($p);