var ajoutBouton = document.querySelector("button");  // commande pour crée le bouton ajout et le chercher dans le html button 

ajoutBouton.addEventListener("click",ajoutDessert); // on ajoute des que l'on clique dessus , fait appel a la fonction 

function modifieDessert(e){ 
    e.target.textContent = prompt ("quel dessert",e.target.textContent); 
} // commande pour modifier , ouvre la fenetre de modification ou ajout de dessert

function ajoutDessert (){ 
    var nouvLi = document.createElement("li");  // on cree un nouvelle element dans notre liste de dessert
    nouvLi.textContent = prompt("quel dessert"); // on pose la question 
    nouvLi.addEventListener("click",modifieDessert ); // quand on clique dessus sa ouvre la modification 
    document.getElementById("desserts").appendChild(nouvLi); // on ouvre une fenetre fille 

}
function modifieDessert(e){ // on pose la question pour la modification 
    e.target.textContent = prompt ("quel dessert",e.target.textContent); 
}