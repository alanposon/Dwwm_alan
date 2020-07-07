<?php

$temps = TempsSansAccidentManager::getList();
?>
<div class="ligne">
    <div class="bloc titre">Date du dernier accident </div>
    
</div>
<?php
foreach ($temps as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenu"><?php echo $elt->getDateDernierAccident() ?></div>
       
        <a href="index.php?action=dernierAccidentForm&m=modif&id=<?php echo $elt->getIdTe() ?>">
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