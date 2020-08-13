<?php
$affichage = '<div class="conteneur-1">
<div class="conteneur-tab">
    <div class="text-tab"> <a>Modifier</a></div>
    <div class="text-tab"> <a>Supprimer</a></div>
    <div class="text-tab">Nom</div>
    <div class="text-tab">Prenom</div>
    <div class="text-tab">Adresse</div>
    <div class="text-tab">CodePostal</div>
    <div class="text-tab">Email</div>
    <div class="text-tab">Ville</div>
</div>';
$listeUser = UserManager::getList();
foreach ($listeUser as $User) {
    $affichage .= '<div class="conteneur-tab-2">
    <div class="text-tab-2"> <a href="">Modifier</a></div>
    <div class="text-tab-2"> <a href="">Supprimer</a></div>
    <div class="text-tab-2">' . $user->getNom() . '</div>
    <div class="text-tab-2">' . $user->getPrenom() . '</div>
    <div class="text-tab-2">' . $user->getAdresse() . '</div>
    <div class="text-tab-2">' . $user->getCodePostal() . '</div>
    <div class="text-tab-2">' . $user->getEmail() . '</div>
    <div class="text-tab-2">' . $user->getVille() . '</div>
</div>
</div>';
}

$affichage .= '<div class="contenue-deconnect">
<a href="">
    <div class="deconnect">Ajouter un client</div>
</a>
<div class="espace"></div>
<div class="espace"></div>
<a href="">
    <div class="deconnect">Deconnexion</div>
</a>
</div>';

echo $affichage;
