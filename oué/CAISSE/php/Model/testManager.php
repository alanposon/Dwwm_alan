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

//*********************************CategoriesManager**************************** *//

//ADD CategoriesManager :
// $m= new Categories(["libelleCategorie"=>"animaux"]);
// var_dump($m);
// CategoriesManager::add($m);

//Update CategoriesManager : a test il modifie pas dans ma base de donner 
// $m = CategoriesManager::findById(5);
// $m->setLibelleCategorie("boisson");
// var_dump($m);
// CategoriesManager::update($m);


// Delete CategoriesManager :
//CategoriesManager::delete(5);

// Get Liste CategoriesManager :
// $tableau = CategoriesManager::getList();
// foreach ($tableau as $categorie)
// {
//     echo $categorie->toString();
// }


// Get ListeCategorie CategoriesManager :
// $tableau = CategoriesManager::getListCategorie();
// foreach ($tableau as $categorie)
// {
//     echo $categorie->toStringCategorie();
// }


//*********************************ModesPaiementsManager**************************** *//

// ADD ModesPaiementsManager :
// $m = new ModesPaiements(["typePaiement"=>"Carte de paiement"]);
// var_dump($m);
// ModesPaiementsManager::add($m);

// Update ModesPaiementsManager :
// $m = ModesPaiementsManager::findById(1);
// $m->setTypePaiement("Espece");
// var_dump($m);
// ModesPaiementsManager::update($m);

// Delete ModesPaiementsManager :
// ModesPaiementsManager::delete(4);

// Get Liste ModesPaiementsManager :
// $tableau = ModesPaiementsManager::getList();
// foreach ($tableau as $paiement)
// {
//     echo   $paiement->toString();
// }

