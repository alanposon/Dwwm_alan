function retourne(elt,recto){
    id= elt.id; // on recupere l'id de l'image
    // on construit le nom de la nouvelle image 
    if (recto) nomImage = "../image/"+id+"v.jpg"; 
    else nomImage = "../image/"+id+"r.jpg"; 
    elt.src = nomImage; 

}
var image = document.getElementsByTagName("image"); // on recupere toutes les images
for (let i = 0; i<image.length; i++ ){
    image[i].addEventListener("mouseover", function(){
        retourne(image[i],true); 
    }); 
    image[i].addEventListener("mouseout",function(){ retourne(image[i]=false)});  

};