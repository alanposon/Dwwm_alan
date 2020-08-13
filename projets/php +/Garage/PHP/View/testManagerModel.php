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
$v2 = ModelManager::findById(2);  // on cree une varible qui prend la fonction find by id dans la table model manager 
//echo $v2->toString();
$v2->setMarque("Mercedes"); 
 $v2->setModel("AMG");
 $v2->setCouleur("rose") ;// on ajoute une marque dans la colonne marque 
 //ModelManager::add($v2); // on ajoute la marque 
 //ModelManager::delete(6);
// //VoitureManager::update($v1);
 $tableau = ModelManager::getList(); // on demande un tableau contenant la liste des models 
 foreach ($tableau as $unModel)
 {
     echo $unModel->toString();
}