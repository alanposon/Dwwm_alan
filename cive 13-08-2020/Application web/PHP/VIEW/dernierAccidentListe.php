<?php

$temps = TempsSansAccidentManager::getList();

$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$dateDernierAccident = (isset($_SESSION['dateDernierAccident'])) ? $_SESSION['dateDernierAccident'] : '';

?>

<div class="contenuDernier basPoly">

    <img class="logoDate" src="IMAGE/logoCive.png">

    <div class="dernierAContenu fondOrange">

        <h3>Date du dernier accident :</h3>

        <div class="dateDernier">

            <?php
            foreach ($temps as $elt) {
            ?>
                <div class="ligne">
                    <?php echo $elt->getDateDernierAccident() ?>

                    <?php } ?>
                </div>

        </div>
        <a href="index.php?action=dernierAccidentForm&act=ajout&id=<?php echo $elt->getIdTempsSansAccident() ?>">
            <div class="boutonModif">Modifier</div>
        </a>

    </div>
</div>

</div>