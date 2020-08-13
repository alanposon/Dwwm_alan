<?php
class VilleManager
{
    public static function add(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO ville ( libelleVille, codePostal) VALUES ( :libelleVille , :codePostal)");
        $q->bindValue(":libelleVille", $obj->getLibelleVille());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->execute();
    }

    public static function update(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE ville SET libelleVille = :libelleVille , codePostal = :codePostal WHERE idVille = :idVille");
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":libelleVille", $obj->getLibelleVille());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->execute();
    }

    public static function delete(Ville $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM ville WHERE idVille=" . $obj->getIdVille());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM ville WHERE idVille=" .$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Ville($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $ville = [];
        $q = $db->query("SELECT * FROM ville");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ville[] = new Ville($donnees);
            }
        }
        return $ville;
    }

}
