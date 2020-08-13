<?php

class JeuxManager
{
    public static function findById($id)
    {
        $db = DbConnect::getDb(); // fonction qui permet de chercher par id 
        $requete = "SELECT idJeux, nomJeux, styleJeux FROM nintendo where idJeux = " . $id; 
        $result = $db->query($requete);
        $donnees = $result->fetch(PDO::FETCH_ASSOC);
        return new JeuxVideo($donnees);

    }

    public static function add(JeuxVideo $v)
    {
        $db = DbConnect::getDb(); // fonction qui permet d'ajouter dans la base de donner 
        $requete = $db->prepare("INSERT INTO nintendo ( nomJeux, styleJeux) VALUES ( :nomJeux, :styleJeux)");
        $requete->bindValue(":nomJeux", $v->getNomJeux());
        $requete->bindValue(":styleJeux", $v->getStyleJeux());
        $requete->execute();
    }
    public static function update(JeuxVideo $v)
    {
        $db = DbConnect::getDb(); // fonction qui permet de modifier une donner de la base de donnée 
        $requete = $db->prepare("UPDATE  nintendo set  nomJeux=:nomJeux, styleJeux = :styleJeux where idJeux = :idJeux");
        $requete->bindValue(":idJeux", $v->getIdJeux());
        $requete->bindValue(":nomJeux", $v->getNomJeux());
        $requete->bindValue(":styleJeux", $v->getStyleJeux());
        $requete->execute();
    }
    public static function delete($id)
    {
        $db = DbConnect::getDb(); // fonction qui permet de suprimer une donnée presente dans la base de donnée 
        $db->exec("Delete from nintendo where idJeux=" . $id);
    }

    public static function getList()
    {
        $db = DbConnect::getDb(); // fonction qui permet d'afficher la liste des choses presentes dans la base de donnée 
        $requete = "SELECT idJeux, nomJeux, styleJeux FROM nintendo ";
        $result = $db->query($requete);
        while ($donnees = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab[] = new JeuxVideo($donnees);
        }
        return $tab;
    }
}
