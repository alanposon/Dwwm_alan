<?php

$liste = ArticleManager::getList();
?>
<div class="espaceHorizon "></div>
<div id="contenu">
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href='<?php echo serverRoot."?action=ajout"; ?>' ><?php echo TexteManager::getTexte("NouvelArticle"); ?> </a>
</div>
<?php
if ($liste!=null) {
	?>
		<div id="crudTableau">
		<table id="crud" class="avectri">
			<thead class="crudEntete">
                <th class="crudColonne"  ><?php echo TexteManager::getTexte("Description"); ?></th>
                <th class="crudColonne"  ><?php echo TexteManager::getTexte("Prix"); ?></th>
			</thead>
			<?php 
			foreach ($liste as $elt) {
			    echo '<tr class="crudLigne">';
    			echo '<td class="crudColonne">' . $elt->getDescription() . '</td>';
    			echo '<td class="crudColonne">' . $elt->getPrixArticle() . '</td>';
				echo '<td class="crudColonneBtn">';
                echo '<a class=" crudBtn crudBtnEdit" href="'.serverRoot.'?action=edit&id='.$elt->getIdArticle().'">'. TexteManager::getTexte("Afficher").' </a>';
				echo '<a class=" crudBtn crudBtnModif"  href="'.serverRoot.'?action=modif&id='.$elt->getIdArticle().'" >'. TexteManager::getTexte("Modifier").'</a>';
				echo '<a class=" crudBtn crudBtnSuppr" href="'.serverRoot.'?action=delete&id='.$elt->getIdArticle().'" >'. TexteManager::getTexte("Supprimer").'</a></td>';
				echo '</tr>';
			}
			?>

		</table>
	</div>
		<?php } ?>

</div>
<div class="espaceHorizon "></div>
<div class="espaceHorizon "></div>
