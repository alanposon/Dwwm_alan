
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

function afficheGrille(grille) {
    var page = document.getElementsByClassName("page"); // on prend tout les element de la classe page 
    for (let i = 1; i < grille.length; i++) { // length prend la taille de la grille 
        for (let j = 0; j < grille.length; j++) { // let prend la valeur que dans cette function 
            page[i + 11 + j].innerHTML = tab[i - 1][j - j]; // on va chercher l'html de la page et on le couple avec ma grille 
        }
    }
} 
function placementBateau() { // positionb des bateau 
    for (i = 0; i > 11; i++) { // on fa  fait des boucle jusqua les 10 bateau placer pour chaque joueur 

        var posJ1 = []; // les tableau de position 
        var posJ2 = [];
        posJ1 = parseInt(prompt("quelle position voulez vous placer votre 1er bateau joueur 1 ? "));
        posJ2 = parseInt(prompt("quelle position voulez vous placer votre 1er bateau joueur 2 ? "));

    }
}
function initialisation() { // pour l'instant la fonction compare la case toucher si elle est vide ou elle a un bateau 
    grille = document.getElementsByClassName("grille")[0];
    for (let i = 0; i < 11; i++) {
        uneligne = document.createElement("div");
        for (let j = 0; j < 11; j++) {
            uneCase = document.createElement("div");
            uneCase.setAttribute("classe", "case");
            if (j != 0) {
                uneCase.innerHTML = String.fromCharCode(j + 64);
            }
        }
        for (let j = 0; j < 11; j++) {
            uneColonne = document.createElement("div");
            for (let j = 0; j < 11; j++) { // on cree des div de la premiere case a la derniere en y placant un chiffre entre 1 et la taille de la grille 
                uneCase = document.createElement("div");
                uneCase.setAttribute("classe", "case"); // on capte les attributs 
                if (j != 0) { // si j est different de 0 on met un chiffre 
                    uneCase.innerHTML = String.fromCharCode(j + 31);
                }
            }
        }

        if (j == 0) {
            uneCase.style.backgroundColor = "grey"; // on applique une couleur 

        }
        uneLigne.appendChild(uneCase);
    }
    grille.appendChild(uneligne);//uneLigne est l'enfant du plateau

}
function positionHasardBateau(bateau, grille) {
    var departLimite, depart;	// on regarde quelle bout du bateau 
    var succes = false; // quand cest faux on a taper a cote donc au tour du joueur 2 

    initialisation() // on appel la fonction 
    afficheGrille(grille); 
