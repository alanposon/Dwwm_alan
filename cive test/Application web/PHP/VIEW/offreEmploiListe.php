
<?php

$listeOffreEmploi = OffreEmploiManager::getList(); 

$affichage = '
<div class="hautOffre">';


$affichage .= ' <div class="recherche"> <label for="rechercheSite">Recherche rapide :</label>
        <input type="search" id="rechercheSite" name="rechercheSite" aria-label="Search through site content">

        <button>Recherche</button></div>
        <div class="fondOrange"><h2>Offre d emploi</h2> </div>
      
        <a class="bouton" href="index.php?action=offreEmploiForm&act=ajout">Ajoutez une offre d\'emploi</a></div>  
        </div></div>';

foreach ($listeOffreEmploi as $offre) {
  
    $affichage .= ' 
    <div class="basOffre">
     <div class="offre">
    <div class="inter">
    <img class="LC" src="IMAGE/logoCive.png" alt="logo">
  
    <div class="contenu">' . $offre->getNumeroOffreEmploi() . '</div>
    <div class="contenu">' . $offre->getEntrepriseOffreEmploi() . '</div>
                <div class="contenu">' . $offre->getDateOffreEmploi() . '</div>
                <div class="contenu long">' . $offre->getDescriptionOffreEmploi() . '</div>
                <a href="index.php?action=offreEmploiForm&id=' . $offre->getIdOffreEmploi() . '&act=modif">   <div class="bouton"> modifier </div></a>
                <a href="index.php?action=offreEmploiForm&id=' . $offre->getIdOffreEmploi() . '&act=suppr">   <div class="bouton"> supprimer</div></a>
            </div>';
}



echo $affichage;
