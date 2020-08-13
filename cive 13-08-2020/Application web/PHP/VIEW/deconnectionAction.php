<?php

session_destroy();
$_SESSION = array();
$titre="Déconnexion";


echo '<div class="messageDeco">Vous êtes à présent déconnecté </div><br />';
echo '<p><a href="index.php">Revenir au menu</a></p>';
header("refresh:5,url=index.php?action=accueil");
echo '</div></body></html>';
?>