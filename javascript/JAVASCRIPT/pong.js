'use strict';

var canvas;
var game; // le jeu

const Joueur_Droite = 100; // la taille des joueurs
const Joueur_Gauche = 5;

function draw() {
    var context = canvas.getContext('2d');  // avec le get context on dit que le canvas sera en 2 dimensions 
    //dessiné le terrain 
    context.fillStyle = 'black'; // la couleur du context ( terrain ) sera noir . 
    context.fillRect(0, 0, canvas.width, canvas.height);  // dessine un rectangle plein qui debute aux coordonnées 0,0 

    // dessiné la ligne du milieu 
    context.strokeStyle = 'white';  // on demande que la ligne soit blanche 
    context.beginPath(); // premet de partir de nouvelle valeur par default ( recommencer au debut )
    // on utilise les valeurs pour que notre zone s'adapte a notre canvas 
    context.moveTo(canvas.width / 2, 0);// on indique ta taille de la ligne du milieu
    context.lineTo(canvas.width / 2, canvas.height); // connect le dernier point en cours aux coordonnée x,y du terrain  
    context.stroke(); // dessine le chemin donné 

    // dessin du joueur 
    context.fillStyle = 'white';
    context.fillRect(0, game.player.y, Joueur_Droite, Joueur_Gauche);
    context.fillRect(canvas.width - Joueur_Droite, game.ordinateur.y,
        Joueur_Droite, Joueur_Gauche);
    // dessin de la ball 
    context.beginPath();
    context.fillStyle = 'white'; // on colore en blanc 
    context.arc(game.ball.x, game.ball.y, game.ball.r, 0, Math.PI * 2, false); // definit les mouvement de la balle 
    context.fill();
}
// // evenement quand la souris bouge 
// canvas.addEventListener('mousemove', playerMove); 


// function moveJoueur(event){
//     // quand la souris passe sur le canvas 
//     var canvasLocation = canvas.getBoundingClientRect(); // la direction du canvas 
//     var mouseLocation = event.clientY - canvasLocation.y;  // la direction de ma souris 

// game.player.y = mouseLocation - Joueur_Droite / 2; 
// }


function play(){ 
    game.ball.x += game.ball.speed.x; //  les deplacement dans la balle 
    game.ball.y += game.ball.speed.y; 
    draw(); 

    requestAnimationFrame(play); 

}

document.addEventListener('DOMContentLoaded', function () {
    canvas = document.getElementById('canvas');
    game = {
        player: {
            y: canvas.height / 2 - Joueur_Gauche / 2
        },
        ordinateur: {
            y: canvas.height / 2 - Joueur_Gauche / 2 // on definit la position des joueurs
        },
        ball: {
            x: canvas.width / 2,
            y: canvas.height / 2,  // on definit la position de la ball 
            r: 5,
            speed: {
                x: 2,
                y: 2
            }
        }

    }
    game.ball.x += 2;
    game.ball.y += 2;
    draw();// on va chercher le canvas et on appel la fonction dessinnée 
    play(); 

}); 
