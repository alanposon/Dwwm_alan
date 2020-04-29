<?php
$affichage = '<div class="liste"><h2>Liste des Villes</h2>
        <div class="entete">
      
        <div class="titre_entete">LibelleVille</div>
      
   
        </div>';
$listeVille = VilleManager::getList();
foreach ($listeVille as $Ville)
{
    $affichage .= '<div class="contenuListe">
    <a href="index.php?action=VilleForm&id='.$Ville->getIdVille().'&act=modif">   <div class="contenu"> MODIF </div></a>
    <a href="index.php?action=VilleForm&id='.$Ville->getIdVille().'&act=suppr">   <div class="contenu"> SUPPR </div></a>
    <div class="contenu">' . $Ville->getLibelleVille() . '</div>
   
                <div class="contenu">' . $Ville->getLibelleVille() . '</div>
          
            </div>';

}

$affichage .= '<a class="btncentre" href="index.php?action=VilleForm&act=ajout">Ajoutez une ville</a></div>  ';

echo $affichage;
