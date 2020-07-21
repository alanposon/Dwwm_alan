
var grille = [[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
[0, 5, 0, 0, 0, 0, 2, 2, 2, 2],
[0, 5, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // la grille de notre bataille navale 
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 0, 0, 0, 0, 3, 0, 0],
[4, 4, 4, 0, 0, 0, 0, 3, 0, 0],
[0, 0, 0, 0, 0, 0, 0, 3, 0, 0]];

var bateau = 0;
var joueur1 = 0;
var joueur2 = 0;
var entete = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function afficheGrille() {
    var page = document.getElementsByClassName("page"); // on prend tout les element de la classe page 
    for (let i = 0; i < grille.length; i++) { // length prend la taille de la grille 
        for (let j = 0; j < grille.length; j++) { // let prend la valeur que dans cette function 
            page[j].innerHTML += grille; // on va chercher l'html de la page et on le couple avec ma grille 
        }
    }
} function placementBateau() { // positionb des bateau 
    for (i = 0; i > 10; i++) { // on fa  fait des boucle jusqua les 10 bateau placer pour chaque joueur 

        var posJ1 = []; // les tableau de position 
        var posJ2 = [];
        posJ1 = parseInt(prompt("quelle position voulez vous placer votre 1er bateau joueur 1 ? "));
        posJ2 = parseInt(prompt("quelle position voulez vous placer votre 1er bateau joueur 2 ? "));

    }
}
function initialisation() { // pour l'instant la fonction compare la case toucher si elle est vide ou elle a un bateau 
    for (var position = grille.length - 1 ) {
        if (bateau == 1) {
            alert("toucher");
        }
        else {
            alert("c'est raté");
        }
    }
}

