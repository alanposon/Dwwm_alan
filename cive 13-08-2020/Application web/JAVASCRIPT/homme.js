



function deplace(dx, dy) {
    /*  window.getComputedStyle : valeur calculée finale de toutes les propriétés CSS sur un élément */ 
    var styleHomme = window.getComputedStyle(document.getElementById('homme'), null);
    var t = styleHomme.top; /* placement en haut a gauche */ 
    var l = styleHomme.left;
    /* configuration du personnage */ 
    document.getElementById('homme').style.top = parseInt(t) + dy + 'px';
    document.getElementById('homme').style.left = parseInt(l) + dx + 'px';
}
/* gestion du deplacement */ 
setInterval(() => { deplace(15,0); }, 200);



 