document.getElementById(listeCSS).addEventListener(change, changerFeuilleDeStyle, true);
function changerFeuilleDeStyle()
{
 //On change la feuille de style en fonction du choix dans la liste déroulante.
 document.getElementById(css).href = this.value;
 //On crée le cookie
 var cookie = maFeuilleCSS= + this.value;
 //On crée un délai d'expiration d'une semaine pour le cookie.
 var date = new Date();
 date.setTime(date.getTime()+(7*24*60*60*1000)); /* La date est en millisecondes */
 cookie +=; expires=+date.toGMTString(); /* Les dates des cookies doivent être au format GMT */
 document.Cookie = cookie; /* Ajout du cookie */
}
//Au chargement de la page
document.addEventListener(load, chargerFeuileDeStyle, true);
function chargerFeuilleDeStyle()
{
 //On peut obtenir le cookie que l'on souhaite avec une expression régulière.
 var feuilleDeStyle = document.cookie.replace(/(?:(?:^|.*;s*)maFeuilleCSSs*=s*([^;]*).*$)|^.*$/, $1);
 //Il ne reste plus qu'à attribuer la feuille de style.
 document.getElementById(css).href = feuilleDeStyle;
}