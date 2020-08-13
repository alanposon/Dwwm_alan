<?php
class TexteManager
{ /*fonction traduction */
    public static function getTexte($code)
    { /* on choisis la langue */
        if (isset($_SESSION['langue'])) {
            $lang = $_SESSION['langue'];
        } else { /* par defaut c'est français */
            $lang = "FR";
        }
        $db = DbConnect::getDb(); // Instance de PDO.  
        // Execute une requete de type SELECT avec une clause WHERE, et retourne un objet Texte.
        $q = $db->query('SELECT idTexte, codeTexte, codeLangue, texte FROM texte WHERE codeTexte = "'
            . $code . '" and codeLangue = "' . $lang . '"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        /* on retourne le text qu'on a besoin */
        return $donnees["texte"];
    }
}
