<?php

class PersonneManager
{
	  
	static public function add(Personne $p)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO test(nom, prenom, adresse, ville, codePostal, sexe) VALUES(:nom, :prenom, :adresse, :ville, :codePostal, :sexe)');
		
		// Assignation des valeurs pour le nom, le pr�nom.
		$q->bindValue(':nom', $p->getNom());
		$q->bindValue(':prenom', $p->getPrenom());
		$q->bindValue(':adresse', $p->getAdresse());
		$q->bindValue(':ville', $p->getVille());
		$q->bindValue(':codePostal', $p->getCodePostal());
		$q->bindValue(':sexe', $p->getSexe());
		
		// Ex�cution de la requ�te.
		$q->execute();
		
	}
	
	static public function delete(Personne $p)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type DELETE.
		$db->exec('DELETE FROM test WHERE idPersonne = '.$p->getIdPersonne());
	}
	
	static public function getById($id)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Personne.
		$id = (int) $id;
		
		$q = $db->query('SELECT idPersonne,nom, prenom, adresse, ville, codePostal, sexe FROM test WHERE idPersonne = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return new Personne($donnees);
	}
	
	static public function getList()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les personnes.
		
		$q = $db->query('SELECT idPersonne,nom, prenom, adresse, ville, codePostal, sexe FROM test ORDER BY nom');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$ps[] = new Personne($donnees);
		}
		
		return $ps;
	}
	
	static public function update(Personne $p)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE test SET nom=:nom, prenom=:prenom , adresse=:adresse, ville=:ville, codePostal=:codePostal,  sexe=:sexe WHERE idPersonne = :idPersonne');
		
		// Assignation des valeurs � la requ�te.
		$q->bindValue(':idPersonne', $p->getIdPersonne());
		$q->bindValue(':nom', $p->getNom());
		$q->bindValue(':prenom', $p->getPrenom());
		$q->bindValue(':adresse', $p->getAdresse());
		$q->bindValue(':ville', $p->getVille());
		$q->bindValue(':codePostal', $p->getCodePostal());
		$q->bindValue(':sexe', $p->getSexe());
		
		// Ex�cution de la requ�te.
		$q->execute();
	}
	
	
}