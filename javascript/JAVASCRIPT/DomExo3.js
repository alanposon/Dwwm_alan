var fille;
// on ouvre la fenete de la fille par l'id de la fille 
document.getElementById("ouvrirFenetre").addEventListener("click",function(){ // elle s'ouvre quand on click 

    fille = window.open('fenetreFille.html','',200,200); // ouvrir la fenetre fille et definir la taille 

});

document.getElementById("fermerFenetre").addEventListener("click",function(){ // on clique sa ferme lma fenetre 

    fille.close(); // on ferme la fille 

});

document.getElementById("deplacerFenetre").addEventListener("click",function(){ // on deplace la fenetre en cliquant 

    fille.moveBy(100,100); // deplace la nouvelle fenetre 
    fille.focus(); // on force a prendre la fille 

});

