
var compteurJeune = 0 ;
var compteurMature = 0 ; 
var compteurVieu = 0 ; 
do { 
    var age = prompt ("entrez votre age ( entrez un age > 100 pour arreter  la saisie) "); 
    if ( age <20 ){
        compteurJeune++; 
    }
    else if ( age <41 ){ 
        compteurMature++ ; 
    }
    else { compteurVieu++ ; 
    }
    }while (age< 100 ){
    document.writer("le nombre de jeune est de : "+ compteurJeune + "\n le nombre de femme mature : " + compteurVieu + "\n le nombre de vieu : " + compteurVieu); 
}