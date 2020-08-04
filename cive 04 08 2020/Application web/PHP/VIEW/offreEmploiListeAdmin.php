
<?php

$listeOffreEmploi = OffreEmploiManager::getList();
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$posteEntreprise = (isset($_SESSION['posteEntreprise'])) ? $_SESSION['posteEntreprise'] : '';
$numeroOffreEmploi = (isset($_SESSION['numeroOffreEmploi'])) ? $_SESSION['numeroOffreEmploi'] : '';

$affichage = '
<div class="hautOffre basPoly">';


$affichage .= '  <div class="fondOrange"><h2>Offre d emploi</h2> </div>
    <div class="recheAjout"> 
    <form class ="RechercheOf" name="search" onSubmit="return findInPage(this.motcle.value);">
    <input name="motCle" type="text" onFocus="nbSearch=0; if (this.value=="Mot-cle") {this.value=""}" value="Mot-cle">
<input type="submit" value="OK">
</form>';


if ($lvl > 2) {

    $affichage .= '
    <a class="bouton" href="index.php?action=offreEmploiFormAdmin&act=ajout">Ajoutez une offre d\'emploi</a>
     </div>
         ';
} else {
    $affichage .= '</div>';
}

$affichage .= ' <div class="basOffre ">';

foreach ($listeOffreEmploi as $offre) {

    $affichage .= ' 
   
    <div class="offre">
        <div class="inter">
        <img class="LC" src="IMAGE/logoCive.png" alt="logo">
  
        <div class="contenu">' . $offre->getNumeroOffreEmploi() . '</div>
        <div class="contenu">' . $offre->getEntrepriseOffreEmploi() . '</div>
        <div class="contenu">' . $offre->getDateOffreEmploi() . '</div>
        <div class="contenu long">' . $offre->getDescriptionOffreEmploi() . '</div>';

    if ($lvl > 2) {

        $affichage .= '<a href="index.php?action=offreEmploiFormAdmin&id=' . $offre->getIdOffreEmploi() . '&act=modif">   <div class="bouton"> modifier </div></a>
                <a href="index.php?action=offreEmploiFormAdmin&id=' . $offre->getIdOffreEmploi() . '&act=suppr">   <div class="bouton"> supprimer</div></a></div>';
    } else {
        $affichage .= '</div> <a class="boutonPos" href="index.php?action=postulerForm"> <div class="bouton">Postuler</div></a>';
    };

    $affichage .= '</div> ';
}
echo $affichage;
