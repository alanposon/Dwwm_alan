<?php

$clients = ClientManager::getList();
?>
            <div class="contenue-deconnect">
            <div class="espace"></div>
            <a href="index.php?action=deconnect">
                <div class="deconnect">Deconnexion</div>
            </a>
        </div>
<div class="conteneur-1">
    <div class="conteneur-tab">
        <?php
        if ($lvl > 1) {
            echo '<div class="text-tab"> <a>Modifier</a></div>';
        } 
        if ($lvl >= 3) {
          echo '<div class="text-tab"> <a>Supprimer</a></div>';
        }
        ?>
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
            <?php
            if ($lvl > 1) {
                echo '<div class="text-tab-2"> <a href="index.php?action=ClientForm&m=modif&id=' . $elt->getIdClient() . '">Modifier</a></div>';
            }
            if ($lvl >= 3) {
                echo '<div class="text-tab-2"> <a href="index.php?action=ClientForm&m=suppr&id=' . $elt->getIdClient() . '">Supprimer</a></div>';
            } ?>
            <div class="text-tab-2"><?php echo $elt->getNom() ?></div>
            <div class="text-tab-2"><?php echo $elt->getPrenom() ?></div>
            <div class="text-tab-2"><?php echo $elt->getAdresse() ?></div>
            <div class="text-tab-2"><?php echo $elt->getCodePostal() ?></div>
            <div class="text-tab-2"><?php echo $elt->getEmail() ?></div>
            <div class="text-tab-2"><?php echo $elt->getidVille() ?></div>
        </div>
    <?php } ?>
</div>
<?php
if ($lvl > 1) {
    echo '<a href="index.php?action=ClientForm&m=ajout&id=' . $elt->getIdClient() . '">
    <div class="bouton"> Ajouter un client</div>
</a>';
}
?>