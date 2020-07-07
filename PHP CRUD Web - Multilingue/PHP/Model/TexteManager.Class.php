<?php

class TexteManager
{

    public static function getTexte($code)
    {
        if (isset($_SESSION['langue'])) {
            $lang = $_SESSION['langue'];
        } else {
            $lang = "FR";
        }
        $db = DbConnect::getDb(); // Instance de PDO.  
        // Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Texte.
        $q = $db->query('SELECT idTexte, codeTexte, codeLangue, Texte FROM Texte WHERE codeTexte = "' . $code. '" and codeLangue = "'.$lang.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return $donnees["Texte"];
    }

    

}
