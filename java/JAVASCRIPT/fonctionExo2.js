function multiplication(){

    var n = prompt("entrez le nombre de multiple a calculer : "); 
    var x = prompt("entrez le nombre entier auquel on va calculer les multiples: "); 
    document.write("voici la table de "+x+" : <br>"); 
    for (i=0; i<n; i++)
    {
        console.log((parseInt(i) +1) +"x" + x + " = " + (parseInt(i)+1) * x +"<br>" );
        document.write((parseInt(i) +1) +" x " + x + " = " + (parseInt(i)+1) * x +"<br>" );
        alert((parseInt(i) +1) +"x" + x + "=" + (parseInt(i)+1) * x +"<br>" );
    }

}

multiplication(); 



// function multi(nb)
// {console.log("voici la table de "+x+" : ");
//     for( i=1 ; i<=10; i++){

//         table = nb * i ;

//         console.log(nb+" x "+i+" = "+table);
//     }
// }

// multi(7);