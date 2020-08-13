<?php

class ModelManager
{
    public static function findById($id)
    {
        $db = DbConnect::getDb(); // fonction qui permet de chercher par id 
        $requete = "SELECT id_model, model, couleur, marque FROM model where id_model = " . $id; 
        $result = $db->query($requete);
        $donnees = $result->fetch(PDO::FETCH_ASSOC);
        return new model($donnees);

    }

    public static function add(model $v)
    {
        $db = DbConnect::getDb(); // fonction qui permet d'ajouter dans la base de donner 
        $requete = $db->prepare("INSERT INTO model ( model, couleur, marque) VALUES ( :model, :couleur, :marque)");
        $requete->bindValue(":model", $v->getModel());
        $requete->bindValue(":couleur", $v->getCouleur());
        $requete->bindValue(":marque", $v->getMarque());
        $requete->execute();
    }
    public static function update(model $v)
    {
        $db = DbConnect::getDb(); // fonction qui permet de modifier une donner de la base de donnée 
        $requete = $db->prepare("UPDATE  model set  model=:model, couleur = :couleur, marque=:marque where id_model = :id_model");
        $requete->bindValue(":id_model", $v->getId_model());
        $requete->bindValue(":model", $v->getModel());
        $requete->bindValue(":couleur", $v->getCouleur());
        $requete->bindValue(":marque", $v->getMarque());
        $requete->execute();
    }
    public static function delete($id)
    {
        $db = DbConnect::getDb(); // fonction qui permet de suprimer une donnée presente dans la base de donnée 
        $db->exec("Delete from model where id_model=" . $id);
    }

    public static function getList()
    {
        $db = DbConnect::getDb(); // fonction qui permet d'afficher la liste des choses presentes dans la base de donnée 
        $requete = "SELECT id_model, couleur, model, marque FROM model ";
        $result = $db->query($requete);
        while ($donnees = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab[] = new model($donnees);
        }
        return $tab;
    }
}
