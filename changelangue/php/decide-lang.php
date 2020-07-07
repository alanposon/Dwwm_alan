<?php

	 if(isset($_COOKIE['lang'])) {
     	     $lang = $_COOKIE['lang'];
    	 } else {
     	     // si aucune langue n'est déclarée on tente de reconnaitre la langue par défaut du navigateur
    	     $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); 
 	 }
    	 
 	 
  	 if ($_GET['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
  	 include('lang/fr-lang.php');
  	 } 
  	 
  	 else if ($_GET['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
  	 include('lang/en-lang.php');
  	 }
 	 
 	
        	 //définition de la durée du cookie (1 an)
       	 $expire = 365*24*3600; 
       	 
       	 //enregistrement du cookie au nom de lang
       	 setcookie('lang', $lang, time() + $expire); 
        	 
       	 ?>