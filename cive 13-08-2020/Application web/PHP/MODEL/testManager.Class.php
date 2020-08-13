<?php
function ChargerClasse($classe)
{ /* si le fichier existe */ 
    if (file_exists("../MODEL/" . $classe . ".Class.php"))
    { /* on l'utilise */ 
        require "../MODEL/" . $classe . ".Class.php";
    }
    else
    { /* sinon on charge la Class */ 
        require "../CONTROLLER/" . $classe . ".Class.php";
    }

} /* on appel la fonction */ 
spl_autoload_register("ChargerClasse");

/* initialisation de la base de données */ 
DbConnect::init();

//*********************************UserManager**************************** *//

// ADD UserManager : ok
// $m = new User(["nom"=>"test","prenom"=>"Alan","mail"=>"alan.poson@gmail.com","matricule"=>0001,"motDePasse"=>"test","posteEntreprise"=>1]);
// var_dump($m);
// UserManager::add($m);

// Update UserManager : ok
// $m = UserManager::findById(5);
// var_dump($m);
// $m->setNom("cassiau");
// var_dump($m);
// UserManager::update($m);

// Delete UserManager : ok
// $m = UserManager::findById(5);
// UserManager::delete($m);

//Get Liste UserManager : ok
// $tableau = UserManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************PosteEntrepriseManager**************************** *//
// TEST OK *****

// ADD PosteEntrepriseManager :
// $m = new PosteEntreprise(["LibellePosteEntreprise"=>"soudeur"]);
// var_dump($m);
// PosteEntrepriseManager::add($m);

// Update PosteEntrepriseManager :
// $m = PosteEntrepriseManager::findById(1);
// var_dump($m);
// $m->setLibellePosteEntreprise("Employe");
// var_dump($m);
// PosteEntrepriseManager::update($m);

// Delete PosteEntrepriseManager :
//  $m = PosteEntrepriseManager::findById(5);
//  PosteEntrepriseManager::delete($m);

// Get Liste PosteEntrepriseManager :
// $tableau = PosteEntrepriseManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************ChantierManager**************************** *//
// TEST OK *****

// ADD ChantierManager :
// $m = new Chantier(["adresseChantier"=>"19 rue franklin","activiteChantier"=>"peche","dateChantier"=>"2020-06-06","idVille"=>23]);
// var_dump($m);
// ChantierManager::add($m);

// Update ChantierManager :
// $m = ChantierManager::findById(1);
// var_dump($m);
// $m->setAdresseChantier("249 rue du bohernold");
// var_dump($m);
// ChantierManager::update($m);

// Delete ChantierManager :
// $m = ChantierManager::findById(4);
// ChantierManager::delete($m);

// Get Liste ChantierManager :
// $tableau = ChantierManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************ImgSliderManager**************************** *//
// TEST OK *****

// ADD ImgSliderManager :
// $m = new ImgSlider(["libelleImgSlider"=>"entreprise"]);
// var_dump($m);
// ImgSliderManager::add($m);

// Update ImgSliderManager :
// $m = ImgSliderManager::findById(1);
// var_dump($m);
// $m->setLibelleImgSlider("atelier");
// var_dump($m);
// ImgSliderManager::update($m);

// Delete ImgSliderManager :
// $m = ImgSliderManager::findById(2);
// ImgSliderManager::delete($m);

// Get Liste ImgSliderManager :
// $tableau = ImgSliderManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


// *********************************OffreEmploiManager*****************************//
// TEST OK *****

// ADD OffreEmploiManager :
// $m = new OffreEmploi(["numeroOffreEmploi"=>"123456", 
// "entrepriseOffreEmploi"=>"CIVE", "dateOffreEmploi"=>"2020-07-22", 
// "descriptionOffreEmploi"=>"mission de soudure de 4 mois en atelier "]);
// var_dump($m);
// OffreEmploiManager::add($m);

// Update OffreEmploiManager :
// $m = OffreEmploiManager::findById(1);
// var_dump($m);
// $m->setNumeroOffreEmploi("010101");
// var_dump($m);
// OffreEmploiManager::update($m);

// Delete OffreEmploiManager :
// $m = OffreEmploiManager::findById(2);
// OffreEmploiManager::delete($m);

// Get Liste OffreEmploiManager :
$tableau = OffreEmploiManager::getList();
foreach ($tableau as $info)
{
    echo $info->toString();
}

//*********************************PlanningManager**************************** *//
// TEST OK *****

// ADD PlanningManager :
// $m = new Planning(["libellePlanning"=>"semaine 24", "dateChantier"=>"2020-07-25", "activiteChantier"=>"soudure", "adresseChantier"=>"13 rue du general laurent"]);
// var_dump($m);
// PlanningManager::add($m);

// Update PlanningManager :
// $m = PlanningManager::findById(2);
// var_dump($m);
// $m->setLibellePlanning("semaine 22");
// var_dump($m);
// PlanningManager::update($m);

// Delete PlanningManager :
// $m = PlanningManager::findById(2);
// PlanningManager::delete($m);

// Get Liste PlanningManager :
// $tableau = PlanningManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************TempsSansAccidentManager**************************** *//
// TEST OK *****

// ADD TempsSansAccidentManager :
// $m = new TempsSansAccident(["dateDernierAccident"=>"2020-06-25"]);
// var_dump($m);
// TempsSansAccidentManager::add($m);

// Update TempsSansAccidentManager :
// $m = TempsSansAccidentManager::findById(1);
// var_dump($m);
// $m->setDateDernierAccident("2020-08-26");
// var_dump($m);
// TempsSansAccidentManager::update($m);

// Delete TempsSansAccidentManager :
// $m = TempsSansAccidentManager::findById(2);
// TempsSansAccidentManager::delete($m);

// Get Liste TempsSansAccidentManager :
// $tableau = TempsSansAccidentManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************VilleManager**************************** *//
// TEST OK *****

// ADD VilleManager :
// $m = new Ville(["libelleVille"=>"Malo", "codePostal"=>59140]);
// var_dump($m);
// VilleManager::add($m);

// Update VilleManager :
// $m = VilleManager::findById(4);
// var_dump($m);
// $m->setCodePostal("59280");
// var_dump($m);
// VilleManager::update($m);

// Delete VilleManager :
// $m = VilleManager::findById(4);
// VilleManager::delete($m);

// Get Liste VilleManager :
// $tableau = VilleManager ::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************InteractionManager**************************** *//
// TEST OK *****

// ADD InteractionManager :
// $m = new Interaction(["idOffreEmploi"=>"1","idUser"=>"1","CV"=>"Poson Alan", "reponse"=>"je vous fait parvenir mon cv pour le poste de soudeur"]);
// var_dump($m);
// InteractionManager::add($m);

// Update InteractionManager :
// $m = InteractionManager::findById(1);
// var_dump($m);
// $m->setCV("voici mon nouveau cv ");
// var_dump($m);
// InteractionManager::update($m);

// Delete InteractionManager :
// $m = InteractionManager::findById(2);
// InteractionManager::delete($m);

// Get Liste InteractionManager :
// $tableau = InteractionManager ::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************ActiviteManager**************************** *//
// TEST OK *****

// ADD ActiviteManager :
// $m = new Activite(["libelleActivite"=>"nucleaire"]);
// var_dump($m);
// ActiviteManager::add($m);

// Update ActiviteManager :
// $m = ActiviteManager::findById(2);
// var_dump($m);
// $m->setLibelleActivite("tuyauterie");
// var_dump($m);
// ActiviteManager::update($m);

// Delete ActiviteManager :
// $m = ActiviteManager::findById(4);
// ActiviteManager::delete($m);

// Get Liste ActiviteManager :
// $tableau = ActiviteManager ::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }