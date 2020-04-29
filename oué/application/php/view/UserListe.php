<?php
if ($lvl >= 3){
$affichage = '<div class="conteneur-1">
<div class="conteneur-tab">
    <div class="text-tab"> <a>Modifier</a></div>
    <div class="text-tab"> <a>Supprimer</a></div>
    <div class="text-tab">Pseudo</div>>
    <div class="text-tab">Role</div>
</div>';
$listeUser = UserManager::getList();
foreach ($listeUser as $user) {
    $affichage .= '<div class="conteneur-tab-2">
    <div class="text-tab-2"><a href="index.php?action=nouveauUser&m=modif&id=' . $user->getIdUser() . '">Modifier</a></div>
    <div class="text-tab-2"> <a href="index.php?action=nouveauUser&m=suppr&id=' . $user->getIdUser() . '">Supprimer</a></div>
    <div class="text-tab-2">' . $user->getPseudo() . '</div>
    <div class="text-tab-2">' . $user->getRole() . '</div>
</div>
</div>';
}

$affichage .= '<div class="contenue-deconnect">
<a href="index.php?action=nouveauUser&m=ajout&id=' . $user->getIdUser() . '">
    <div class="deconnect">Ajouter un utilisateur</div>
</a>
<div class="espace"></div>
<div class="espace"></div>
<a href="index.php?action=deconnect">
    <div class="deconnect">Deconnexion</div>
</a>
</div>';

echo $affichage;
}