
function getInteger(message) {

    return parseInt(prompt(message));
}

function initTab() {
    var taille = parseInt(getInteger("taille tableau :"));

    return new Array(taille);
}

function saisiTab(tab) {

    for (let i = 0; i < tab.length; i++) {
        tab[i] = getInteger("valeur numero  " + (i + 1) + ":");
    }
    return tab;
}

function afficheTab() {

    for (let i = 0; i < tab, length; i++) {
        document.write(tab[i] + " ");

    }
    document.write("</br>");
}

function rechercheTab(tab, i) {

    document.write("A la position : " + i + " il y a la valeur " + tab[i] + "</br>");

}

function maxTab(tab) {
    var max = tab[0];
    for (let i = 0; i < tab.length; i++) {
        if (tab[i] > max) {
            max = tab[i];

        }

    }
    return max;
}
function moyenneTab(tab) {
    var somme = 0;
    for (let i = 0; i < tab.length; i++) {
        somme += tab[i];

    } return (somme / tab.length);
}
function infoTab() {

    document.write("voici la valeur maximal : " + maxTab(tab) + "</br>");
    document.write("voici la moyenne du tableau : " + moyenneTab(tab) + "</br>");
}

var tab = initTab();
tab = saisiTab(tab);
afficheTab(tab);
rechercheTab(tab, getInteger("Index à chercher:"));
infoTab(tab);