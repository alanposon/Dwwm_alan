
<?php

$listeChantier = ChantierManager::getList();
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;

$matriculeChantier = (isset($_SESSION['matriculeChantier'])) ? $_SESSION['matriculeChantier'] : '';

$affichage = '
<div class="hautOffre">';


$affichage .= ' <div class="recherche"> <label for="rechercheSite">Recherche rapide :</label>
        <input type="search" id="rechercheSite" name="rechercheSite" aria-label="Search through site content">

        <button>Recherche</button></div>
        <div class="fondOrange"><h2>Chantier</h2> </div>';

if ($lvl > 2) {

    $affichage .= '<a class="bouton" href="index.php?action=chantierForm&act=ajout">Ajoutez un chantier</a></div>  
         ';
} else {
}

foreach ($listeChantier as $chan) {

    $affichage .= ' 
    <div class="basOffre">
     <div class="offre">
    <div class="inter">
    <img class="LC" src="IMAGE/logoCive.png" alt="logo">
  
    <div class="contenu">' . $chan->getMatriculeChantier() . '</div>
    <div class="contenu">' . $chan->getAdresseChantier() . '</div>
                <div class="contenu">' . $chan->getIdActivite() . '</div>
                <div class="contenu">' . $chan->getDateChantier() . '</div>
                <div class="contenu">' . $chan->getIdVille() . '</div>';

    if ($lvl > 2) {

        $affichage .= '<a href="index.php?action=chantierForm&id=' . $chan->getIdChantier() . '&act=modif">   <div class="bouton"> modifier </div></a>
                <a href="index.php?action=chantierForm&id=' . $chan->getIdChantier() . '&act=suppr">   <div class="bouton"> supprimer</div></a>
            </div>';
    } else {
       $affichage .= '<a  href="index.php?action=chantierForm"> <div class="bouton">chantier</div></a></div>  
        ';
    };
}



echo $affichage;
