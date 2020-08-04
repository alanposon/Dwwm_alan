<?php
// Ce fichier sera inclus a chaque fois que l'on aura besoin d'acceder a la base de donnees.
// Il permet d'ouvrir la connection a la base de donnees
class DbConnect
{ /* variable */
	private static $db;
	/* fonction qui va chercher la base de données */
	public static function getDb()
	{
		return DbConnect::$db;
	}
	/* fonction initialisation */
	public static function init()
	{ /* essai */
		try {
			// On se connecte a MySQL 
			self::$db = new PDO('mysql:host=localhost;port=3306;dbname=cive;charset=utf8', 'root', '');
		} catch (Exception $e) {
			// En cas d'erreur, on affiche un message et on arrete tout
			die('Erreur : ' . $e->getMessage());
		}
	}
}
