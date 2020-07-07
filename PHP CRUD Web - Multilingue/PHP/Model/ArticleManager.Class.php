<?php

class ArticleManager
{
	  
	static public function add(Article $art)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO Articles(codeDescription,prixArticle) VALUES(:codeDescription, :prixArticle)');
		
		// Assignation des valeurs pour le nom, le pr�nom.
		$q->bindValue(':codeDescription', $art->getcodeDescription());
		$q->bindValue(':prixArticle', $art->getprixArticle());
		
		// Ex�cution de la requ�te.
		$q->execute();
		
	}
	
	static public function delete(Article $art)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type DELETE.
		$db->exec('DELETE FROM Articles WHERE idArticle = '.$art->getIdArticle());
	}
	
	static public function getById($id)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Article.
		$id = (int) $id;
		
		$q = $db->query('SELECT idArticle, codeDescription, prixArticle FROM Articles WHERE idArticle = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return new Article($donnees);
	}
	
	static public function getList()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les Articles.
		
		$q = $db->query('SELECT idArticle, codeDescription, prixArticle FROM Articles ');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$arts[] = new Article($donnees);
		}
		
		return $arts;
	}
	
	static public function update(Article $art)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE Articles SET codeDescription=:codeDescription,prixArticle=:prixArticle WHERE idArticle = :idArticle');
		
		// Assignation des valeurs � la requ�te.
		$q->bindValue(':codeDescription', $art->getcodeDescription());
		$q->bindValue(':prixArticle', $art->getprixArticle());
		$q->bindValue(':idArticle', $art->getIdArticle());
		
		// Ex�cution de la requ�te.
		$q->execute();
	}
	
	
}