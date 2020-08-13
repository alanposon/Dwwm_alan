<?php
class NintendoManager
{
public static function add(Nintendo $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO nintendo (nomJeux,styleJeux) VALUES (:nomJeux,:styleJeux)");
$q->bindValue(":nomJeux", $obj->getNomJeux());
$q->bindValue(":styleJeux", $obj->getStyleJeux());
 $q->execute();
}

public static function update(Nintendo $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE nintendo SET nomJeux= :nomJeux, styleJeux= :styleJeux, WHERE idJeux = :idJeux");
$q->bindValue(":nomJeux", $obj->getNomJeux());
$q->bindValue(":styleJeux", $obj->getStyleJeux());
$q->bindValue(":id", $obj->getIdJeux());
 $q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM nintendo WHERE idJeux = $id");
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM nintendo WHERE idJeux = $id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Nintendo ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$nintendo = [];
$q = $db->query("SELECT * FROM nintendo");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$nintendo[] = new Nintendo($donnees);
}
}
return $nintendo;
 }

}