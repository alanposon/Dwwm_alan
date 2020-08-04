<?php

$user = UserManager::getList();
?>
<div class="ligne">
    <div class="bloc titre">Nom</div>
    <div class="bloc titre">Prenom</div>
    <div class="bloc titre">Mail</div>
    <div class="bloc titre">Matricule</div>
    <div class="bloc titre">Poste en entreprise </div>
    <div class="bloc titre"> </div>
</div>
<?php
foreach ($user as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenu"><?php echo $elt->getNom() ?></div>
        <div class="bloc contenu"><?php echo $elt->getPrenom() ?></div>
        <div class="bloc contenu"><?php echo $elt->getMail() ?></div>
        <div class="bloc contenu"><?php echo $elt->getMatricule() ?></div>
        <div class="bloc contenu"><?php echo $elt->getPosteEntreprise() ?></div>
        <a href="index.php?action=userFormAdmin&m=modif&id=<?php echo $elt->getIdUser() ?>">
            <div class="bouton">Modifier</div>
        </a>
        <?php 
            if ($lvl==3){
                echo    '<a href="index.php?action=userFormAdmin&m=suppr&id='.$elt->getIdUser() .'">
                            <div class="bouton">Supprimer</div>
                        </a>';
            }?>
    </div>
<?php } ?>
</div>
<a href="index.php?action=userFormAdmin&m=ajout">
    <div class="bouton"> Ajouter un client</div>
</a>