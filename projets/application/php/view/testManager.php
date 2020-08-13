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

//*********************************VillageManager**************************** *//

// ADD VilleManager :
// $m= new Ville(["libelleVille"=>"test"]);
// var_dump($m);
// VilleManager::add($m);

// Update VilleMannager :
// $m = VilleManager::findById(12);
// $m->setLibelleVille("PeutEtre");
// var_dump($m);
// VilleManager::update($m);


// Delete VilleManager :
// VilleManager::delete(10);

// Get Liste VilleManager :
// $tableau = VilleManager::getList();
// foreach ($tableau as $ville)
// {
//     echo $ville->toString();
// }



//*********************************UserMannager**************************** *//

// ADD UserManager :
// $m = new User(["pseudo"=>"Gabi","mdp"=>"Yes","role"=>1]);
// var_dump($m);
// UserManager::add($m);

// Update UserManager :
// $m = UserManager::findById(9);
// $m->setPseudo("GabiLeSurvivant");
// var_dump($m);
// UserManager::update($m);


// Delete UserManager :
// UserManager::delete(9);

// Get Liste UserManager :
// $tableau = UserManager::getList();
// foreach ($tableau as $ville)
// {
//     echo $ville->toString();
// }



//*********************************ClientManager**************************** *//

// ADD ClientManager :
// $m = new Client(["nom"=>"Gabi","prenom"=>"lesurvivant","adresse"=>"aubar","codepostal"=>"666","email"=>"aubar@afpa.fr","idVille"=>1,"ville"=>"Dk"]);
// var_dump($m);
// ClientManager::add($m);

// Update UserManager :
// $m = ClientManager::findById(8);
// $m->setNom("Gab");
// var_dump($m);
// ClientManager::update($m);

// Delete ClientManager :
// ClientManager::delete(8);

// Get Liste ClientManager :
// $tableau = ClientManager::getList();
// foreach ($tableau as $ville)
// {
//     echo $ville->toString();
// }

