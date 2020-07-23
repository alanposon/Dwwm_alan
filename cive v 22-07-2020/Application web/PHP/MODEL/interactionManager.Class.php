<?php
class InteractionManager
{
    public static function add(Interaction $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO interaction ( idOffreEmploi, idUser, CV, reponse ) VALUES ( :idOffreEmploi, :idUser, :CV, :reponse)");
        $q->bindValue(":idOffreEmploi", $obj->getIdOffreEmploi());
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->bindValue(":CV", $obj->getCV());
        $q->bindValue(":reponse", $obj->getReponse());
        $q->execute();
    }

    public static function update(Interaction $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE interaction SET idOffreEmploi = :idOffreEmploi, idUser = :idUser, CV = :CV, reponse = :reponse WHERE idInteraction = :idInteraction");
        $q->bindValue(":idInteraction", $obj->getIdInteraction());
        $q->bindValue(":idOffreEmploi", $obj->getIdOffreEmploi());
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->bindValue(":CV", $obj->getCV());
        $q->bindValue(":reponse", $obj->getReponse());
        $q->execute();
    }

    public static function delete(Interaction $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM interaction WHERE idInteraction=" . $obj->getIdInteraction());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM interaction WHERE idInteraction=" .$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Interaction($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $interaction = [];
        $q = $db->query("SELECT * FROM interaction");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $interaction[] = new Interaction($donnees);
            }
        }
        return $interaction;
    }

}
