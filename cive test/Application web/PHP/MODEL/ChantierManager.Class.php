<?php
class ChantierManager
{
    public static function add(Chantier $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO chantier ( matriculeChantier, adresseChantier, activiteChantier, dateChantier, idVille ) VALUES ( :matriculeChantier, :adresseChantier, :activiteChantier, :dateChantier, :idVille )");
        $q->bindValue(":matriculeChantier", $obj->getMatriculeChantier());
        $q->bindValue(":adresseChantier", $obj->getAdresseChantier());
        $q->bindValue(":activiteChantier", $obj->getActiviteChantier());
        $q->bindValue(":dateChantier", $obj->getDateChantier());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->execute();
    }

    public static function update(Chantier $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE chantier SET matriculeChantier:matriculeChantier, adresseChantier = :adresseChantier, activiteChantier = :activiteChantier, dateChantier = :dateChantier, idVille = :idVille WHERE idChantier = :idChantier");
        $q->bindValue(":matriculeChantier", $obj->getMatriculeChantier());
        $q->bindValue(":idChantier", $obj->getIdChantier());
        $q->bindValue(":adresseChantier", $obj->getAdresseChantier());
        $q->bindValue(":activiteChantier", $obj->getActiviteChantier());
        $q->bindValue(":dateChantier", $obj->getDateChantier());
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->execute();
    }

    public static function delete(Chantier $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM chantier WHERE idChantier =" . $obj->getIdChantier());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM chantier WHERE idChantier=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Chantier($results);
        } else {
            return false;
        }
    }

    public static function getByMatriculeChantier($matriculeChantier)
    {
        $db = DbConnect::getDb();
        $id = (int) $matriculeChantier;
        $q = $db->query("SELECT * FROM chantier WHERE matriculeChantier=" . $matriculeChantier);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Chantier($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $chantier = [];
        $q = $db->query("SELECT * FROM chantier");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $chantier[] = new Chantier($donnees);
            }
        }
        return $chantier;
    }
}
