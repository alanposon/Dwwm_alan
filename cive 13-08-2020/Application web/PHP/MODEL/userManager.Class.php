<?php
class UserManager
{
    public static function add(User $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO user ( nom , prenom , mail , matricule , motDePasse , posteEntreprise ) VALUES (:nom , :prenom , :mail , :matricule , :motDePasse ,  :posteEntreprise )");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":mail", $obj->getMail());
        $q->bindValue(":matricule", $obj->getMatricule());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":posteEntreprise", $obj->getPosteEntreprise());
        $q->execute();
    }

    public static function update(User $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE user SET nom = :nom , prenom = :prenom , mail = :mail , matricule = :matricule , motDePasse = :motDePasse, posteEntreprise = :posteEntreprise WHERE idUser = :idUser");
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":mail", $obj->getMail());
        $q->bindValue(":matricule", $obj->getMatricule());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":posteEntreprise", $obj->getPosteEntreprise());
        $q->execute();
    }

    public static function delete(User $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM user WHERE idUser =". $obj->getIdUser());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM user WHERE idUser=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new User($results);
        } else {
            return false;
        }
    }

    public static function getByMatricule($matricule)
    {
        $db = DbConnect::getDb();
        $id = (int) $matricule;
        $q = $db->query("SELECT * FROM user WHERE matricule=" . $matricule);
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
        $user = [];
        $q = $db->query("SELECT * FROM user ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $user[] = new User($donnees);
            }
        }
        return $user;
    }
}
