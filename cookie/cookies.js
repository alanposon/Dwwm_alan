function creerCookie(nom, valeur, jour) {
    // Si les jours ont biens été definis 
    if (jour) {
        // on cree un objet qui stock la date actuelle 
        var date = new Date();
        // on definit la date d'expiration du cookie 
        date.setTime(date.getTime()+(jour*24*60*60*1000)); // heure , minute , seconde , milliseconde 
        // on met la date au bon format 
        var expires = '; expires='+date.toGMTString();
    }
    // si les jours n'ont pas etait definit on a pas besoin de calcule 
    else {
        var expires = ''; // dire qu'il n'y a pas d'expiration presente 
    }
    document.cookie = nom+'='+valeur+expires+';path=/'; // on ecrit le nom , la valeur et la date d'expiration du cookie 
} // path = sur tout le nom du domaine 
function lireCookie(nom) {
    // on recupere le nom du cookie et le signe egal 
    var nomEtEgal = nom + '=';
    // on recupere tout les cookie dans un tableau 
    var cookieTab = document.cookie.split(';');
    // parcourt du tableau 
    for (var i=0; i < cookieTab.length; i++) {
        // on recupere tous les noms et les variables des cookies  
        var cookies = cookieTab[i]
        // on supprime les espaces dans cookies jusqu'a tomber sur un cookie 
        while (cookies.charAt(0) ==' ') {
            // La méthode charAt() renvoie une nouvelle chaîne contenant le caractère à la position indiquée en argument.
            cookies = cookies.substring(1, cookies.length)
            // on prend les cookie a partir du deuxieme 
        } 
        if (cookies.indexOf(nomEtEgal) == 0) { //  on recherche le 1 er cookie            
            return cookies.substring(nomEtEgal.length, cookies.length); // on prend les carracteres egal a la taille de    

        }
    }
    // si nom du cookie n'est pas trouver , c'est que le cookie n'existe pas 
    return null
}
function supprimerCookie(nom) {
    //On donne le nom du cookie a supprimer 
    // on utilise la function cree cookie pour mettre une date expirée
    creerCookie(nom,'', -1); // 

}
// on cree 2 cookies 
creerCookie('Cookie1', 'je suis le premier cookie', 7); 
creerCookie('Cookie2', 'Je suis un autre cookie', 7);

var affiche = document.getElementById('cook'); // on affiche les donner dans cook  
affiche.innerHTML = 'Valeur : ' + lireCookie('Cookie1'); //on affiche l'html present dans la valeur 