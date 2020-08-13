<?php
$affichage = '<div class="liste"><h2>Liste des personnes</h2>
        <div class="entete">
      
        <div class="titre_entete">pseudo</div>
        <div class="titre_entete">mot_de_passe</div>
   
        </div>';
$listePersonne = PersonnageManager::getList();
foreach ($listePersonne as $personne)
{
    $affichage .= '<div class="contenuListe">
    <a href="index.php?action=PersonnageForm&id='.$personne->getIdPerso().'&act=modif">   <div class="contenu"> MODIF </div></a>
    <a href="index.php?action=PersonnageForm&id='.$personne->getIdPerso().'&act=suppr">   <div class="contenu"> SUPPR </div></a>
    <div class="contenu">' . $personne->getPseudo() . '</div>
   
                <div class="contenu">' . $personne->getMot_de_passe() . '</div>
          
            </div>';

}

$affichage .= '<a class="btncentre" href="index.php?action=PersonnageForm&act=ajout">Ajoutez un personnage</a></div>  ';

echo $affichage;
