<?php
class VilleManager
{
    public static function add(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO ville (libelleVille) VALUES (:libelleVille)");
        $q->bindValue(":libelleVille", $obj->getLibelleVille());
        $q->execute();
    }

    public static function update(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE ville SET libelleVille= :libelleVille WHERE idVille = :idVille");
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":libelleVille", $obj->getLibelleVille());
        $q->execute();
    }


    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM ville WHERE idVille = $id");
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM ville WHERE idVille = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Ville($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $ville = [];
        $q = $db->query("SELECT * FROM ville");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ville[] = new Ville($donnees);
            }
        }
        return $ville;
    }

    static public function get($libelleVille)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT libelleVille FROM ville WHERE idVille = :idVille');

        // Assignation des valeurs .
        $q->bindValue(':libelleVille', $libelleVille);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new Ville();
        } else {
            return new Ville($donnees);
        }
    }
}
