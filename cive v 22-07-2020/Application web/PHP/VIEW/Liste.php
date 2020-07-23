<?php

$liste = offreEmploiManager::getList();
?>
<div class="espaceHorizon "></div>
<div id="contenu">
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href='"index.php?action=offreEmploiActionAdmin=ajout"; ?>' ><?php echo TexteManager::getTexte("NouvelArticle"); ?> </a>
</div>
<?php
if ($liste!=null) {
	?>
		<div id="crudTableau">
		<table id="crud" class="avectri">
			<thead class="crudEntete">
                <th class="crudColonne"  ><?php echo TexteManager::getTexte("numeroOffreEmploi"); ?></th>
                <th class="crudColonne"  ><?php echo TexteManager::getTexte("entrepriseOffreEmploi"); ?></th>
				<th class="crudColonne"  ><?php echo TexteManager::getTexte("dateOffreEmploi"); ?></th>
                <th class="crudColonne"  ><?php echo TexteManager::getTexte("descriptionOffreEmploi"); ?></th>
		
			</thead>
			<?php 
			foreach ($liste as $elt) {
			    echo '<tr class="crudLigne">';
    			echo '<td class="crudColonne">' . $elt->getNumeroOffreEmploi() . '</td>';
				echo '<td class="crudColonne">' . $elt->getEntrepriseOffreEmploi() . '</td>';
				echo '<td class="crudColonne">' . $elt->getDateOffreEmploi()  . '</td>';
    			echo '<td class="crudColonne">' . $elt->getDescriptionOffreEmploi() . '</td>';
				echo '<td class="crudColonneBtn">';
                echo '<a class=" crudBtn crudBtnEdit" href="index.php?action=edit&id='.$elt->getIdOffreEmploi().'">'. TexteManager::getTexte("Afficher").' </a>';
				echo '<a class=" crudBtn crudBtnModif"  href="index.php?action=modif&id='.$elt->getIdOffreEmploi().'" >'. TexteManager::getTexte("Modifier").'</a>';
				echo '<a class=" crudBtn crudBtnSuppr" href="index.php?action=delete&id='.$elt->getIdOffreEmploi().'" >'. TexteManager::getTexte("Supprimer").'</a></td>';
				echo '</tr>';
			}
			?>

		</table>
	</div>
		<?php } ?>

</div>
<div class="espaceHorizon "></div>
<div class="espaceHorizon "></div>
