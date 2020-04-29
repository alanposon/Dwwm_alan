<?php
class UserManager
{
    public static function add(User $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO users (pseudo,mdp,role) VALUES (:pseudo,:mdp, :role)");
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":role", $obj->getRole());
        $q->execute();
        $q->CloseCursor();
    }

    static public function get($pseudo)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT pseudo, mdp, idUser Role FROM users WHERE pseudo = :pseudo');

        // Assignation des valeurs .
        $q->bindValue(':pseudo', $pseudo);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new User();
        } else {
            return new User($donnees);
        }
    }

    public static function update(User $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE users SET pseudo= :pseudo, mdp= :mdp, role= :role WHERE idUser = :idUser");
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM users WHERE idUser = $id");
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM users WHERE idUser = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new User($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $users = [];
        $q = $db->query("SELECT * FROM users");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $users[] = new User($donnees);
            }
        }
        return $users;
    }

    static public function getById($id)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT Pseudo, Mdp, IdUser Role FROM users WHERE idUser = :id');

        // Assignation des valeurs .
        $q->bindValue(':id', $id);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new User();
        } else {
            return new User($donnees);
        }
    }
}
