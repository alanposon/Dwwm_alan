<?php
class ClientManager
{
    public static function add(Client $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO client (nom,prenom,adresse,codePostal,email,idVille) VALUES (:nom,:prenom,:adresse,:codePostal,:email,:idVille)");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":adresse", $obj->getAdresse());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->bindValue(":email", $obj->getEmail());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->execute();
    }

    public static function update(Client $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE client SET nom= :nom, prenom= :prenom, adresse= :adresse, codePostal= :codePostal, email= :email, idVille= :idVille WHERE idClient = :idClient");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":adresse", $obj->getAdresse());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->bindValue(":email", $obj->getEmail());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM client WHERE idClient = $id");
    }


    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM client WHERE idClient = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Client($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $client = [];
        $q = $db->query("SELECT * FROM client");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $client[] = new Client($donnees);
            }
        }
        return $client;
    }

}
