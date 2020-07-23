<?php
class PlanningManager
{
    public static function add(Planning $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO planning ( libellePlanning, dateChantier, activiteChantier, adresseChantier ) VALUES ( :libellePlanning, :dateChantier, :activiteChantier, :adresseChantier )");
        $q->bindValue(":libellePlanning", $obj->getLibellePlanning());
        $q->bindValue(":dateChantier", $obj->getDateChantier());
        $q->bindValue(":activiteChantier", $obj->getActiviteChantier());
        $q->bindValue(":adresseChantier", $obj->getAdresseChantier());
        $q->execute();
    }

    public static function update(Planning $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE planning SET libellePlanning = :libellePlanning, dateChantier = :dateChantier, activiteChantier = :activiteChantier, adresseChantier = :adresseChantier WHERE idPlanning = :idPlanning");
        $q->bindValue(":idPlanning", $obj->getIdPlanning());
        $q->bindValue(":libellePlanning", $obj->getLibellePlanning());
        $q->bindValue(":dateChantier", $obj->getDateChantier());
        $q->bindValue(":activiteChantier", $obj->getActiviteChantier());
        $q->bindValue(":adresseChantier", $obj->getAdresseChantier());
        $q->execute();
    }

    public static function delete(Planning $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM planning WHERE idPlanning =" . $obj->getIdPlanning());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM planning WHERE idPlanning=" .$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Planning($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $planning = [];
        $q = $db->query("SELECT * FROM planning");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $planning[] = new Planning($donnees);
            }
        }
        return $planning;
    }

}
