<?php

$clients = ClientManager::getList();
?>

<h1>Liste</h1>
    <div class="conteneur-1">
    <div class="conteneur-tab">
        <div class="text-tab"> <a>Modifier</a></div>
        <div class="text-tab"> <a>Supprimer</a></div>
        <div class="text-tab">Nom</div>
        <div class="text-tab">Prenom</div>
        <div class="text-tab">Adresse</div>
        <div class="text-tab">CodePostal</div>
        <div class="text-tab">Email</div>
        <div class="text-tab">Ville</div>
    </div>
<?php
foreach ($clients as $elt) {
?>
  <div class="conteneur-tab-2">
        <div class="text-tab-2"> <a href="index.php?action=ClientForm&m=modif&id=<?php echo $elt->getIdClient() ?>">Modifier</a></div>
        <?php 
            if ($lvl==3){
                echo '<div class="text-tab-2"> <a href="index.php?action=ClientForm&m=suppr&id=<?php echo $elt->getIdClient() ?>">Supprimer</a></div>';
            }?>    
        <div class="text-tab-2"><?php echo $elt->getNom() ?></div>
        <div class="text-tab-2"><?php echo $elt->getPrenom() ?></div>
        <div class="text-tab-2"><?php echo $elt->getAdresse() ?></div>
        <div class="text-tab-2"><?php echo $elt->getCodePostal() ?></div>
        <div class="text-tab-2"><?php echo $elt->getEmail() ?></div>
        <div class="text-tab-2"><?php echo $elt->getVille() ?></div>
    </div>
<?php } ?>
</div>
<a href="index.php?action=ClientForm&m=ajout">
    <div class="bouton"> Ajouter un client</div>
</a>