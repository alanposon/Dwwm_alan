<?
if (!$HTTP_COOKIE_VARS["monsite_lang"])
{
include("lang_fr.php"); // si pas de cookie pour include la langue, on inclue une langue par défuat, le français par exemple.
}
else
{
$lang = $HTTP_COOKIE_VARS["monsite_lang"];
include("lang_" . $lang . ".php");
}
?>