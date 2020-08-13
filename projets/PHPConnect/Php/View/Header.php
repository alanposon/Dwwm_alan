<!DOCTYPE html>
<html>
<head>
<?php
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> sans titre </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" media="screen" type="text/css" title="Design" href='CSS/design.css' />
</head>
<?php

//Attribution des variables de session
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

?>

