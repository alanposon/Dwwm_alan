function deplace(dx, dy) {
    var styleHomme = window.getComputedStyle(document.getElementById('homme'), null);
    var t = styleHomme.top;
    var l = styleHomme.left;
    document.getElementById('homme').style.top = parseInt(t) + dy + 'px';
    document.getElementById('homme').style.left = parseInt(l) + dx + 'px';
    //gerer la sortie de l'ecran
}
setInterval(() => {
      deplace(15,0); 
}, 200);


 