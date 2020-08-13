<?php
class PersonnageManager
{
    public static function add(Personnage $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO personnage(pseudo, mot_de_passe, role) VALUES (:pseudo,:mot_de_passe, :role)");
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":mot_de_passe", $obj->getMot_de_passe());
        $q->bindValue(':role', $obj->getRole());
        $q->execute();
     
    }

    public static function update(Personnage $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE personnage SET pseudo= :pseudo, mot_de_passe= :mot_de_passe, WHERE idPerso = :idPerso");
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":mot_de_passe", $obj->getMot_de_passe());
        $q->bindValue(":idPerso", $obj->getIdPerso());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM personnage WHERE idPerso = $id");
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query('SELECT * FROM personnage WHERE idPerso = ' . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Personnage($results);
        } else {
            return false;
        }
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT pseudo,mot_de_passe,idPerso FROM personnage WHERE idPerso = :id');

        // Assignation des valeurs .
        $q->bindValue(':id', $id);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new personnage();
        } else {
            return new personnage($donnees);
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $personnage = [];
        $q = $db->query("SELECT * FROM personnage ORDER BY pseudo ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $personnage[] = new Personnage($donnees);
            }
        }
        return $personnage;
    }

    public static function get($pseudo)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT pseudo, mot_de_passe, IdPerso, Role FROM personnage WHERE pseudo = :pseudo');

        // Assignation des valeurs .
        $q->bindValue(':pseudo', $pseudo);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new personnage();
        } else {
            return new personnage($donnees);
        }
    }
}
