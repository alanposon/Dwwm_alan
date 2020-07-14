Tout d'abord, nous allons créer donc deux fichiers, contenant les textes des deux langues : lang_fr.php et lang_en.php
lang_fr.php :
<?
$lang = array("welcome" => "Bienvenue",
"text1" => "Mon texte 1",
"text2" => "Mon texte 2",
);
?>

lang_en.php :
<?
$lang = array("welcome" => "Welcome",
"text1" => "My text 1",
"text2" => "My text 2",
);
?>

Très important : Il faut que les noms soit exactement les mêmes dans chaque fichiers...

Ensuite, voici par exemple votre page d'accueil, qui contiendra ces textes..

<html>
<?
include('lang_fr.php'); // include('lang_en.php') si vous voulez la langue anglaise.
echo $lang["welcome"] . "<br>" . $lang["text1"] . "<br>" . $lang["text2"];
?>
</html>

Le problème est que votre page est soit en Français, soit en Anglais. Nous allons donc demander dans une nouvelle page au visiteurs de choisir une langue, ca pourrait être la page d'accueil. Vous pouvez aussi faire la même chose dans la page principale, ou dans les pages secondaires... Par exemple :

<html>
Choisissez votre langue :<br>
<a href="choix_lang.php?lang=fr">Francais</a> ou <a href="choix_lang.php?lang=en">Anglais</a>
</html>

On dit que la page choix_lang.php est la page qui va envoyer un cookie chez le visiteur :

<?
if(!$_GET["lang"])
{
echo "Erreur, aucune langue n'a été choisie...";
}
else
{
SetCookie("monsite_lang",$_GET["lang"]); // on enregistre un cookie qui s'éffacera a la fermeture de la page. Si vous avez choisi langue française, alors $_GET["lang"] aura comme valeur "fr"...
Header( "Location: accueil.php");
}
?>

Ensuite, nous allons faire un fichier qui inclura le bon fichier de langue, selon le cookie. On pourra inclure ce fichier dans toutes les pages...
select_lang.php :

<?
if (!$HTTP_COOKIE_VARS["monsite_lang"])
{
include("lang_fr.php"): // si pas de cookie pour include la langue, on inclue une langue par défuat, le français par exemple.
}
else
{
$lang = $HTTP_COOKIE_VARS["monsite_lang"];
include("lang_" . $lang . ".php");
}
?>

Donc le code de la page d'accueil sera :

<html>
<?
include("select_lang.php");
echo $lang["welcome"] . "<br>" . $lang["text1"] . "<br>" . $lang["text2"];
?>
</html>