<?php
class OffreEmploiManager
{
    public static function add(OffreEmploi $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO offreemploi ( numeroOffreEmploi, entrepriseOffreEmploi, dateOffreEmploi, descriptionOffreEmploi ) VALUES ( :numeroOffreEmploi, :entrepriseOffreEmploi, :dateOffreEmploi, :descriptionOffreEmploi)");
        $q->bindValue(":numeroOffreEmploi", $obj->getNumeroOffreEmploi());
        $q->bindValue(":entrepriseOffreEmploi", $obj->getEntrepriseOffreEmploi());
        $q->bindValue(":dateOffreEmploi", $obj->getDateOffreEmploi());
        $q->bindValue(":descriptionOffreEmploi", $obj->getDescriptionOffreEmploi());
        $q->execute();
    }

    public static function update(OffreEmploi $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE offreemploi SET numeroOffreEmploi = :numeroOffreEmploi, entrepriseOffreEmploi = :entrepriseOffreEmploi, dateOffreEmploi = :dateOffreEmploi, descriptionOffreEmploi = :descriptionOffreEmploi WHERE idOffreEmploi = :idOffreEmploi");
        $q->bindValue(":idOffreEmploi", $obj->getIdOffreEmploi());
        $q->bindValue(":numeroOffreEmploi", $obj->getNumeroOffreEmploi());
        $q->bindValue(":entrepriseOffreEmploi", $obj->getEntrepriseOffreEmploi());
        $q->bindValue(":dateOffreEmploi", $obj->getDateOffreEmploi());
        $q->bindValue(":descriptionOffreEmploi", $obj->getDescriptionOffreEmploi());
        $q->execute();
    }

    public static function delete(OffreEmploi $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM offreemploi WHERE idOffreEmploi=" . $obj->getIdOffreEmploi());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM offreemploi WHERE idOffreEmploi=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new OffreEmploi($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $offreEmploi = [];
        $q = $db->query("SELECT * FROM offreemploi");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $offreEmploi[] = new OffreEmploi($donnees);
            }
        }
        return $offreEmploi;
    }
}
