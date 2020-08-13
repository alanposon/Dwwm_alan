<?php

class PersonneManager
{
    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = "SELECT idPersonne, nom, prenom, date_de_naissance, adresse, ville, code_postal, e_mail FROM personne where idPersonne= " . $id;
        $result = $db->query($requete);
        $donnees = $result->fetch(PDO::FETCH_ASSOC);
        return new Personne($donnees);

    }

    public static function add(Personne $ma)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO personne (nom, prenom, date_de_naissance, adresse, ville, code_postal, e_mail) VALUES ( :nom, :prenom, :date_de_naissance, :adresse, :ville, :code_postal, :e_mail)");
        $requete->bindValue(":nom", $ma->getNom());
        $requete->bindValue(":prenom", $ma->getPrenom());
        $requete->bindValue(":date_de_naissance", $ma->getDate_de_naissance());
        $requete->bindValue(":adresse", $ma->getAdresse());
        $requete->bindValue(":ville", $ma->getVille());
        $requete->bindValue(":code_postal", $ma->getCode_postal());
        $requete->bindValue(":e_mail", $ma->getE_mail());
        $requete->execute();
    }
    public static function update(Personne $ma)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE Personne set nom=:nom, prenom:prenom, date_de_naissance:date_de_naissance, adresse:adresse, ville:ville, code_postal:code_postal, e_mail:e_mail where idPersonne = :idPersonne");
        $requete->bindValue(":idPersonne", $ma->getIdPersonne());
        $requete->bindValue(":nom", $ma->getNom());
        $requete->bindValue(":prenom", $ma->getPrenom());
        $requete->bindValue(":date_de_naissance", $ma->getDate_de_naissance());
        $requete->bindValue(":adresse", $ma->getAdresse());
        $requete->bindValue(":ville", $ma->getVille());
        $requete->bindValue(":code_postal", $ma->getCode_postal());
        $requete->bindValue(":e_mail", $ma->getE_mail());
        $requete->execute();
    }
    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $result = $db->prepare("DELETE from Personne where idPersonne=" .$perso->getIdPersonne);
        $result->execute();
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $requete = "SELECT idPersonne,nom, prenom, date_de_naissance, adresse, ville, code_postal, e_mail  FROM Personne ";
        $result = $db->query($requete);
        while ($donnees = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab[] = new Personne($donnees);
        }
        return $tab;
    }
}