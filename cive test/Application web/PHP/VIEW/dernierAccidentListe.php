<?php

$temps = TempsSansAccidentManager::getList();
?>


<div class="bas">
    <div class="formIdent">
        <div class="formulaire"><div class="fondOrange">

    <div class="bloc titre">Date du dernier accident </div>
    

<?php
foreach ($temps as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenu"><?php echo $elt->getDateDernierAccident() ?></div>
       
        <a href="index.php?action=dernierAccidentForm&m=modif&id=<?php echo $elt->getIdTempsSansAccident() ?>">
            <div class="bouton">Modifier</div>
        </a>
        <?php 
      
                echo    '<a href="index.php?action=dernierAccidentForm&m=suppr&id='.$elt->getIdTempsSansAccident() .'">
                            <div class="bouton">Supprimer</div>
                        </a>';
            ?>
    </div>
<?php } ?>
</div></div>

<div class="idenCIVE">
            <img src="IMAGE/logoCive.png">
            <div class="coord">
                <br><strong>CIVE</strong>
                <br> 2 rue de l'industrie
                <br> 59820 Gravelines
                <br> France
                <br> Tél. 03 28 66 06 49
                <br> Mail. cive@orange.fr
            </div>
        </div>
    </div>