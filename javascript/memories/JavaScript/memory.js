
// **********************mes cartes 
var deck = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8]
    // **************** ma fonction aleatoire pou melanger 
    .map(tab => [tab, Math.random()]) // on melange notre tableau 
    .sort((deck, place) => deck[1] - place[1]) // on le trie 
    .map(tab => tab[0]) // et on recupere un tableau aleatoirement trier 

// on demande a voir dans la console les places 
console.log(deck);

//  ******************on prend tout les elements img 
var image = document.getElementsByTagName('img');

// pour chaque element on affiche l'image jusqua la taille du tableau 
for (let i = 0; i < image.length; i++) {
    // a chaque tour de boucle on affiche une carte differente 
    image[i].src2 = '../Image/m' + deck[i] + '.jpg';
    // quand on clique sa active la fonction retournement de la carte 
     image[i].addEventListener('click', carteClick); 

 }
function carteClick(e){
//    de la source 1 a la source 2 donc recto verso 
     e.target.src = e.target.src2;
     image[i].removeEventListener('click', carteClick); 
    }

    var action = 1; // 
    var p1, p2; 
    document.addEventListener('click', function(e){
        switch(action){ // si l'action est egal a 1 on fait ceci 
            case 1: 
            if( e.target.tagName=='IMG'){ // si le name est egal a l'image actuel 
                e.target.src = e.target.src2; // si les deux image sont les meme on verouille ses images
                p1 = e.target.src2;  // placement 1 
                action = 2 ; 
              }
              break; 
            case 2: 
            if( e.target.tagName=='IMG'){
                e.target.src = e.target.src2; 
                p2 = e.target.src2;
                action = 3 ; 
              }
              case 3 : 
              if (p1==p2){
    
              }else {
    
              }
              break; 
        }
    
    });
    
    
    
// var image = document.getElementById("test"); 

// image.addEventListener('click', function(e){
//     image.src = '../Image/sangoku.jpg';
// })