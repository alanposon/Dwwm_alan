<?php
class PosteEntrepriseManager
{
    public static function add(PosteEntreprise $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO posteentreprise ( libellePosteEntreprise ) VALUES ( :libellePosteEntreprise )");
        $q->bindValue(":libellePosteEntreprise", $obj->getLibellePosteEntreprise());
        $q->execute();
    }

    public static function update(PosteEntreprise $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE posteentreprise SET libellePosteEntreprise = :libellePosteEntreprise WHERE idPosteEntreprise = :idPosteEntreprise");
        $q->bindValue(":idPosteEntreprise", $obj->getIdPosteEntreprise());
        $q->bindValue(":libellePosteEntreprise", $obj->getLibellePosteEntreprise());

        $q->execute();
    }

    public static function delete(PosteEntreprise $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM posteentreprise WHERE idPosteEntreprise=" . $obj->getIdPosteEntreprise());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM posteentreprise WHERE idPosteEntreprise=" .$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new PosteEntreprise($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $posteEntreprise = [];
        $q = $db->query("SELECT * FROM posteentreprise");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $posteEntreprise[] = new PosteEntreprise($donnees);
            }
        }
        return $posteEntreprise;
    }

}
