<?php

class VoitureManager
{
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $requete = "SELECT idVoiture, Immatriculation, kilometrage, idModele FROM voiture where idVoiture = " . $id;
        $result = $db->query($requete);
        $donnees = $result->fetch(PDO::FETCH_ASSOC);
        return new Voiture($donnees);

    }

    public static function add(Voiture $v)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO voiture( Immatriculation, kilometrage, idModele) VALUES ( :Immatriculation, :kilometrage, :idModele)");
        $requete->bindValue(":Immatriculation", $v->getImmatriculation());
        $requete->bindValue(":kilometrage", $v->getKilometrage());
        $requete->bindValue(":idModele", $v->getIdModele());
        $requete->execute();
    }
    public static function update(Voiture $v)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE  voiture set  Immatriculation=:Immatriculation, kilometrage = :kilometrage, idModele=:idModele where idVoiture = :idVoiture");
        $requete->bindValue(":idVoiture", $v->getIdVoiture());
        $requete->bindValue(":Immatriculation", $v->getImmatriculation());
        $requete->bindValue(":kilometrage", $v->getKilometrage());
        $requete->bindValue(":idModele", $v->getIdModele());
        $requete->execute();
    }
    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("Delete from voiture where idVoiture=" . $id);
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $requete = "SELECT idVoiture, Immatriculation, kilometrage, idModele FROM voiture ";
        $result = $db->query($requete);
        while ($donnees = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab[] = new Voiture($donnees);
        }
        return $tab;
    }
}
