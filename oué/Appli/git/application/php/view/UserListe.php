<?php
$affichage = '<div class="liste"><h2>Liste des Utilisateurs</h2>
        <div class="entete">
      
        <div class="titre_entete">pseudo</div>
        <div class="titre_entete">mot_de_passe</div>
   
        </div>';
$listeUser = UserManager::getList();
foreach ($listeUser as $User)
{
    $affichage .= '<div class="contenuListe">
    <a href="index.php?action=UserForm&id='.$User->getIdUser().'&act=modif">   <div class="contenu"> MODIF </div></a>
    <a href="index.php?action=UserForm&id='.$User->getIdUser().'&act=suppr">   <div class="contenu"> SUPPR </div></a>
    <div class="contenu">' . $User->getPseudo() . '</div>
   
                <div class="contenu">' . $User->getMdp() . '</div>
          
            </div>';

}

$affichage .= '<a class="btncentre" href="index.php?action=UserForm&act=ajout">Ajoutez un utilisateur</a></div>  ';

echo $affichage;
