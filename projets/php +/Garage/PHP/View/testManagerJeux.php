<?php
function ChargerClasse($classe)
{
    if (file_exists("../Model/" . $classe . ".Class.php"))
    {
        require "../Model/" . $classe . ".Class.php"; // auto load permet de chercher dans les classe les informations utiles 
    }
    else
    {
        require "../Controller/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

DbConnect::init();  // on initialise avec la fonction init dans db connect 
$v1 = JeuxManager::findById(1);  // on cree une varible qui prend la fonction find by id dans la table model manager 
echo $v1->toString();
// $v1->setMarque("fiat"); 
// $v1->setModel("multi-plat");
// $v1->setCouleur("turquoise") ;// on ajoute une marque dans la colonne marque 
//ModelManager::add($v1); // on ajoute la marque 
//VoitureManager::update($v1);
$tableau = JeuxManager::getList(); // on demande un tableau contenant la liste des models 
 foreach ($tableau as $unJeux)
 {
     echo $unJeux->toString();
 }