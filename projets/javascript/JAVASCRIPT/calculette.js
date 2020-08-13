var c1 = prompt("donnez moi votre premier chiffre :");
var c2 = prompt("donnez moi votre second chiffre :");
var calc = prompt("quel type de calcule souhaitez vous faire :");


if ( calc =="+")
{ add = parseFloat(c1)+parseFloat(c2) ;
 console.log("voici le total de l'addition : "+add);
}
else if ( calc =="-")
{ sou = c1-c2 ;
 console.log("voici le total de la soustraction : "+sou);
}
else if ( calc =="/")
{
    if (c2== 0 ){
        console.log("division impossible");
    }
    else{
     div = c1/c2 ;
 console.log("voici le total de la division : "+div);}
}
else if( calc =="*")
{ mul = c1*c2 ;
 console.log("voici le total de la multiplication : "+mul);
}
else
{
 console.log("pas de données" );
}