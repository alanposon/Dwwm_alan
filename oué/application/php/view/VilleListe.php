<?php
echo'
<div class="conteneur-tab">
    <div class="text-tab"> <a>Modifier</a></div>
    <div class="text-tab"> <a>Supprimer</a></div>
    <div class="text-tab">Ville</div>
</div>';
$listeVille = VilleManager::getList();
foreach ($listeVille as $ville) {
    echo '
    <div class="conteneur-tab-2">';
    if ($lvl >= 2) {
        echo '<div class="text-tab-2"> <a href="index.php?action=VilleForm&m=modif&id=' . $ville->getIdVille() . '">Modifier</a></div>';
    }
    if ($lvl >= 3) {
        echo '<div class="text-tab-2"> <a href="index.php?action=VilleForm&m=suppr&id=' . $ville->getIdVille() . '">Supprimer</a></div>';
    } 
    echo '<div class="text-tab-2">' . $ville->getLibelleVille() . '</div>
</div>
</div>';
}
if ($lvl >= 2) {
    echo '<a href="index.php?action=VilleForm&m=ajout&id=' . $ville->getIdVille() . '">
    <div class="bouton"> Ajouter une ville</div>
</a>';
}


echo '
<div class="contenue-deconnect">
<div class="espace"></div>
<a href="index.php?action=deconnect">
    <div class="deconnect">Deconnexion</div>
</a>
</div>';
