<?php
function ChargerClasse($classe)
{
    if (file_exists("../Model/" . $classe . ".Class.php"))
    {
        require "../Model/" . $classe . ".Class.php";
    }
    else
    {
        require "../Controller/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

DbConnect::init();
$v1 = VoitureManager::findById(1);
echo $v1->toString();
// $v1->setKilometrage(1000);
// //VoitureManager::add($v1);
// //VoitureManager::update($v1);
// $tableau = VoitureManager::getList();
// foreach ($tableau as $uneVoiture)
// {
//     echo $uneVoiture->toString();
// }

// DbConnect::init();
// $v1 = ModelManager::findById(1);
// //echo $v1->toString();
// $v1->setmodel("volk waggen");
// //VoitureManager::add($v1);
// //VoitureManager::update($v1);
// $tableau = ModelManager::getList();
// foreach ($tableau as $unModel)
// {
//     echo $unModel->toString();
// }