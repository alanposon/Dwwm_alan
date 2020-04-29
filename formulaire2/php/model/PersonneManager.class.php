<?php

class PersonneManager
{
	  
	static public function add(Personne $perso)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO personne(nom, prenom, dateNaissance, adresse, ville, code, email) VALUES(:nom, :prenom, :dateNaissance, :adresse, :ville, :code, :email)');
		
		// Assignation des valeurs pour le nom, le pr�nom.
		$q->bindValue(':nom', $perso->getNom());
        $q->bindValue(':prenom', $perso->getPrenom());
        $q->bindValue(':dateNaissance', $perso->getDateNaissance());
		$q->bindValue(':adresse', $perso->getAdresse());
		$q->bindValue(':ville', $perso->getVille());
        $q->bindValue(':code', $perso->getCode());
        $q->bindValue(':email', $perso->getEmail());
		
		// Ex�cution de la requ�te.
		$q->execute();
		
	}
	
	static public function delete(Personne $perso)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de  type DELETE.
		$db->exec('DELETE FROM personne WHERE idPersonne = '.$perso->getIdPersonne());
	}
	
	static public function getById($id)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Personne.
		$id = (int) $id;
		
		$q = $db->query('SELECT idPersonne, nom, prenom, dateNaissance, adresse, ville, code, email FROM personne WHERE idPersonne = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return new Personne($donnees);
	}
	
	static public function getList()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les personnes.
		
		$q = $db->query('SELECT idPersonne, nom, prenom, dateNaissance, adresse, ville, code, email FROM personne ORDER BY nom');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$persos[] = new Personne($donnees);
		}
		
		return $persos;
	}
	
	static public function update(Personne $perso)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE personne SET nom=:nom, prenom=:prenom ,dateNaissance=:dateNaissance ,adresse=:adresse, ville=:ville, code=:code, email=:email WHERE idPersonne = :idPersonne');
		
        // Assignation des valeurs � la requ�te.
        $q->bindValue(':idPersonne', $perso->getIdPersonne());
		$q->bindValue(':nom', $perso->getNom());
        $q->bindValue(':prenom', $perso->getPrenom());
        $q->bindValue(':dateNaissance', $perso->getDateNaissance());
		$q->bindValue(':adresse', $perso->getAdresse());
		$q->bindValue(':ville', $perso->getVille());
        $q->bindValue(':code', $perso->getCode());
        $q->bindValue(':email', $perso->getEmail());
		
		// Ex�cution de la requ�te.
		$q->execute();
	}
	
	
}