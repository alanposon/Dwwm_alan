<?php
class TempsSansAccidentManager
{
    public static function add(TempsSansAccident $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO tempssansaccident ( dateDernierAccident ) VALUES ( :dateDernierAccident )");
        $q->bindValue(":dateDernierAccident", $obj->getDateDernierAccident());
        $q->execute();
    }

    public static function update(TempsSansAccident $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE tempssansaccident SET dateDernierAccident = :dateDernierAccident WHERE idTempsSansAccident = :idTempsSansAccident");
        $q->bindValue(":idTempsSansAccident", $obj->getIdTempsSansAccident());
        $q->bindValue(":dateDernierAccident", $obj->getDateDernierAccident());

        $q->execute();
    }

    public static function delete(TempsSansAccident $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM tempssansaccident WHERE idTempsSansAccident=" . $obj->getIdTempsSansAccident());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM tempssansaccident WHERE idTempsSansAccident=" .$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new TempsSansAccident($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tempssansaccident = [];
        $q = $db->query("SELECT * FROM tempssansaccident");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tempssansaccident[] = new TempsSansAccident($donnees);
            }
        }
        return $tempssansaccident;
    }

}
