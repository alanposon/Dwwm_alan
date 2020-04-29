<?php 
class PuissanceAffichage
{
public static function AffichageListePuissance()
{
$puissance = PuissanceManager::getList();
?>
<div class="ligne">
<div class="bloc titre">Id</div>
<div class="bloc titre">Nom</div>
<div class="bloc titre">Prenom</div>
<div class="bloc titre">Puissance</div>
</div>
<?php
foreach ($puissance as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getId() ?></div>
<div class="bloc contenu"><?php echo $elt->getNom() ?></div>
<div class="bloc contenu"><?php echo $elt->getPrenom() ?></div>
<div class="bloc contenu"><?php echo $elt->getPuissance() ?></div>
</div>
<?php
}
}

public static function AffichageDetailPuissance($id)
{
$puissance = PuissanceManager::findById($id);
?>
<div class="ligne">
<div class="bloc titre">Id</div>
<div class="bloc titre">Nom</div>
<div class="bloc titre">Prenom</div>
<div class="bloc titre">Puissance</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "id : " . $puissance->getId() ?></div>
<div class="bloc contenu"><?php echo "nom : " . $puissance->getNom() ?></div>
<div class="bloc contenu"><?php echo "prenom : " . $puissance->getPrenom() ?></div>
<div class="bloc contenu"><?php echo "puissance : " . $puissance->getPuissance() ?></div>
</div>
<?php
}
}