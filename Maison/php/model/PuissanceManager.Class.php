<?php
class PuissanceManager
{
public static function add(Puissance $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO puissance (nom,prenom,puissance) VALUES (:nom,:prenom,:puissance)");

$q->bindValue(":nom", $obj->getNom());
$q->bindValue(":prenom", $obj->getPrenom());
$q->bindValue(":puissance", $obj->getPuissance());
 $q->execute();
}

public static function update(Puissance $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE puissance SET  nom= :nom, prenom= :prenom, puissance= :puissance, WHERE id = :id");
$q->bindValue(":id", $obj->getId());
$q->bindValue(":nom", $obj->getNom());
$q->bindValue(":prenom", $obj->getPrenom());
$q->bindValue(":puissance", $obj->getPuissance());

 $q->execute();
}

public static function delete(id $id)
{
$db = DbConnect::getDb();
$db->exec('DELETE FROM puissance WHERE id = '.$id->getId());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM puissance WHERE id = $id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Puissance ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$puissance = [];
$q = $db->query("SELECT * FROM puissance");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$puissance[] = new Puissance($donnees);
}
}
return $puissance;
 }

}