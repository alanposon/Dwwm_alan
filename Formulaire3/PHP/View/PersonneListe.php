<?php

$liste = PersonneManager::getList();
?>
	<div class="tableauliste">
		<table id="liste" class="triee">
			<thead class="entete">
                <th class="$colonne">Nom</th>
                <th class="$colonne">Prenom</th>
                <th class="$colonne">Adresse</th>
                <th class="$colonne">Ville</th>
                <th class="$colonne">Code postal</th>
                <th class="$colonne">Sexe</th>
			</thead>
            <?php foreach ($liste as $elt) 
            {
                echo '<tr class="ligne">';
                echo '<td class="colonne">' . $elt->getNom() . '</td>';
                echo '<td class="colonne">' . $elt->getPrenom() . '</td>';
                echo '<td class="colonne">' . $elt->getAdresse() . '</td>';
                echo '<td class="colonne">' . $elt->getVille() . '</td>';
                echo '<td class="colonne">' . $elt->getCodePostal() . '</td>';
                echo '<td class="colonne">' . $elt->getSexe() . '</td>';
                echo ' <td class="colonne">  <a href = "index.php?action=PersonneForm&mode=modif&id='.$elt->getIdPersonne() .  '">  Modifier</a></td>';
                echo ' <td class="colonne">  <a href = "index.php?action=PersonneForm&mode=suppr&id='.$elt->getIdPersonne() .  '">  Supprimer</a></td>';
            }
            ?>
		</table>
    </div>
    <a href="index.php?action=PersonneForm&mode=ajout">
        <button class="ajouter"> Ajouter une personne</button>
    </a>
