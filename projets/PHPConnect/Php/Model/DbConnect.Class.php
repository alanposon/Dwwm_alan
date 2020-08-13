<?php

// Ce fichier sera inclus à chaque fois que l'on aura besoin d'acceder à la base de donn�es.
// Il permet d'ouvrir la connection à la base de données
class DbConnect {
	private static $db;
	
	public static function getDb() {
		return DbConnect::$db;
	}

	public static function init() {
		try {
			// On se connecte à MySQL
			self::$db= new PDO ( 'mysql:host=localhost;dbname=PhpExemple;charset=utf8', 'root', '' );
		} catch ( Exception $e ) {
			// En cas d'erreur, on affiche un message et on arrête tout
			die ( 'Erreur : ' . $e->getMessage () );
		}
		
	}
}