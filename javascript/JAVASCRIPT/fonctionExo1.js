function produit() {
    var sommes = 0;
    var cube = 0;
    var x = parseInt(prompt("donner moi un premier chiffre"));
    var y = parseInt(prompt("donner moi un deuxieme chiffre"));

    sommes = parseInt(x) * parseInt(y);
    cube = parseInt(x) * parseInt(x) * parseInt(x);
   // cube = parseInt(x) ** parseInt(x); meme calcule que au dessus mais avec des puissance 
    return alert(" Le cube de " +x+ " est egal a " + cube+" et le produit de " + x + " x " + y + " est egal a " + sommes);
   
}

// function affichage(){ 

//     return document.write(img/papillon.png); 

// }
// affichage(); 
produit(); 

