<?php
class ActiviteManager
{
    public static function add(Activite $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO activite ( libelleActivite ) VALUES ( :libelleActivite)");
        $q->bindValue(":libelleActivite", $obj->getLibelleActivite());
        $q->execute();
    }

    public static function update(Activite $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE activite SET libelleActivite = :libelleActivite WHERE idActivite = :idActivite");
        $q->bindValue(":idActivite", $obj->getIdActivite());
        $q->bindValue(":libelleActivite", $obj->getLibelleActivite());
        $q->execute();
    }

    public static function delete(Activite $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM activite WHERE idActivite =" . $obj->getIdActivite());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM activite WHERE idActivite=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Activite($results);
        } else {
            return false;
        }
    }

    public static function getByLibelleActivite($libelleActivite)
    {
        $db = DbConnect::getDb();
        $id = (int) $libelleActivite;
        $q = $db->query("SELECT * FROM activite WHERE libelleActivite=" . $libelleActivite);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Activite($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $activite = [];
        $q = $db->query("SELECT * FROM activite");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $activite[] = new Activite($donnees);
            }
        }
        return $activite;
    }
}
