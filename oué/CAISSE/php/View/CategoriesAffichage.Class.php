<?php 
class CategoriesAffichage
{
public static function AffichageListeCategories()
{
$categorie = CategoriesManager::getList();
?>
<div class="ligne">
<div class="bloc titre">LibelleCategorie</div>
</div>
<?php
foreach ($categorie as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getLibelleCategorie() ?></div>
</div>
<?php
}
}

public static function AffichageDetailCategories($id)
{
$categorie = CategoriesManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">LibelleCategorie</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "libelleCategorie : " . $categorie->getLibelleCategorie() ?></div>
</div>
<?php
}
}