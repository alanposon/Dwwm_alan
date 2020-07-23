<?php
class ImgSliderManager
{
    public static function add(ImgSlider $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO imgslider ( libelleImgSlider ) VALUES ( :libelleImgSlider)");
        $q->bindValue(":libelleImgSlider", $obj->getLibelleImgSlider());
        $q->execute();
    }

    public static function update(ImgSlider $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE imgslider SET libelleImgSlider = :libelleImgSlider WHERE idImgSlider = :idImgSlider");
        $q->bindValue(":idImgSlider", $obj->getIdImgSlider());
        $q->bindValue(":libelleImgSlider", $obj->getLibelleImgSlider());
        $q->execute();
    }

    public static function delete(ImgSlider $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM imgslider WHERE idImgSlider=" . $obj->getIdImgSlider());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM imgslider WHERE idImgSlider=" .$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new ImgSlider($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $imgSlider = [];
        $q = $db->query("SELECT * FROM imgslider");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $imgSlider[] = new ImgSlider($donnees);
            }
        }
        return $imgSlider;
    }

}
