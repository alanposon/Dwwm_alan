<?php 
class ModesPaiementsAffichage
{
public static function AffichageListeModesPaiements()
{
$modepaiement = ModesPaiementsManager::getList();
?>
<div class="ligne">
<div class="bloc titre">TypePaiement</div>
</div>
<?php
foreach ($modepaiement as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getTypePaiement() ?></div>
</div>
<?php
}
}

public static function AffichageDetailModesPaiements($id)
{
$modepaiement = ModesPaiementsManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">TypePaiement</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "typePaiement : " . $modepaiement->getTypePaiement() ?></div>
</div>
<?php
}
}