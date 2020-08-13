<?php 
class NintendoAffichage
{
public static function AffichageListeNintendo()
{
$nintendo = NintendoManager::getList();
?>
<div class="ligne">
<div class="bloc titre">NomJeux</div>
<div class="bloc titre">StyleJeux</div>
</div>
<?php
foreach ($nintendo as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getNomJeux() ?></div>
<div class="bloc contenu"><?php echo $elt->getStyleJeux() ?></div>
</div>
<?php
}
}

public static function AffichageDetailNintendo($id)
{
$nintendo = NintendoManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">NomJeux</div>
<div class="bloc titre">StyleJeux</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "nomJeux : " . $nintendo->getNomJeux() ?></div>
<div class="bloc contenu"><?php echo "styleJeux : " . $nintendo->getStyleJeux() ?></div>
</div>
<?php
}
}