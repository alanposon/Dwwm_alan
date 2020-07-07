<?php

session_destroy();
$_SESSION = array();
$titre="Déconnexion";


echo '<p>Vous êtes à présent déconnecté</p> <br />';
echo '<p><a href="index.php">Revenir au menu</a></p>';
header("refresh:5,url=index.php");
echo '</div></body></html>';
?>