<?php
$affichage = '<div class="liste"><h2>Liste de personnes</h2>
        <div class="entete">
        <div class="titre_entete">IdPersonne</div>
        <div class="titre_entete">Nom</div>
        <div class="titre_entete">Prenom</div>
            <div class="titre_entete">Date de naissance</div>
            <div class="titre_entete long">adresse</div>
            <div class="titre_entete">ville</div>
            <div class="titre_entete">code postal</div>
            <div class="titre_entete long">e-mail</div>
        </div>';
$listePersonne = PersonneManager::getList();
foreach ($listePersonne as $personne)
{
    $affichage .= '<div class="contenuListe">
    <a href="index.php?action=PersonneForm&id='.$personne->getIdPersonne().'&act=modif">   <div class="contenu"> MODIF </div></a>
    <a href="index.php?action=PersonneForm&id='.$personne->getIdPersonne().'&act=suppr">   <div class="contenu"> SUPPR </div></a>
    <div class="contenu">' . $personne->getNom() . '</div>
    <div class="contenu">' . $personne->getPrenom() . '</div>
                <div class="contenu">' . $personne->getDate_de_naissance() . '</div>
                <div class="contenu long">' . $personne->getAdresse() . '</div>
                <div class="contenu">' . $personne->getVille() . '</div>
                <div class="contenu">' . $personne->getCode_postal() . '</div>
                <div class="contenu long">' . $personne->getE_mail() . '</div>
            </div>';

}

$affichage .= '<a class="btncentre" href="index.php?action=PersonneForm&act=ajout">Ajoutez une personne</a></div>  ';

echo $affichage;
