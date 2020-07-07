<?php
var_dump($_POST);


$p=new OffreEmploi($_POST);
var_dump($p);
OffreEmploiManager::add($p);

//header("location:index.php?action=confirmation");
header("refresh:3;url=index.php?action=confirmation");