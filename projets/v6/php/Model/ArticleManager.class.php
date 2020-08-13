<?php
class ArticleManager
{
    public static function add(Article $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO article (libelleArticle, prixHt, codeBarre, idCategorie, idTva) VALUES (:libelleArticle, :prixHt, :codeBarre, :idCategorie, :idTva)");
        $q->bindValue(":libelleArticle", $obj->getLibelleArticle());
        $q->bindValue(":prixHt", $obj->getPrixHT());
		$q->bindValue(":codeBarre", $obj->getCodeBarre());
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->bindValue(":idTva", $obj->getIdTVA());
        $q->execute();
    }

    public static function update(Article $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE article SET  libelleArticle=:libelleArticle, prixHT=:prixHT, codeBarre=:codeBarre, idCategorie=:idCategorie, idTVA=:idTVA WHERE idArticle=:idArticle");
        $q->bindValue(":idArticle", $obj->getIdArticle());
        $q->bindValue(":libelleArticle", $obj->getLibelleArticle());
        $q->bindValue(":prixHT", $obj->getPrixHT());
        $q->bindValue(":codeBarre", $obj->getCodeBarre());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->bindValue(":idTVA", $obj->getIdTVA());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM article WHERE idArticle= $id");
    }

    static public function getById($id) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE idArticle = :idArticle' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':idArticle', $id );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
    }

    static public function getlib($libelle) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE libelleArticle = :libelleArticle' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':libelleArticle', $libelle );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
    }
    
    static public function getcodeB($codeBarre) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE codeBarre = :codeBarre' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':codeBarre', $codeBarre );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
    }
    
    static public function getCateg($idCategorie) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE codeBarre = :codeBarre' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':idCategorie', $idCategorie );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
	}

    public static function getList()
    {
        $db = DbConnect::getDb();
        $article = [];
        $q = $db->query("SELECT * FROM article");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $article[] = new Article($donnees);
            }
        }
        return $article;
    }

}