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
