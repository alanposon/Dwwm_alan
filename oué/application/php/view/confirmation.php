<h3>Vos données ont été enregistrées</h3>
<?php
if ($lvl == 1) {
   echo '<a href="index.php?action=ClientListe">retour</a>';
} elseif ($lvl > 1) {
   echo '<a href="index.php?action=ChoixListe">retour</a>';
}
