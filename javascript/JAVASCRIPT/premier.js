

function nbrPremier(nbr) {
    for(var i = 2; i < nbr; i++)
      if(nbr%i === 0) return false;
    return nbr > 1;
  }
  if (nbrPremier()==true){
      alert("Cest un nombre premier");
  }
console.log(nbrPremier(32));
   
    //    var reste;
    //     var flag = true;
    //     var nbr = 7;

    //     for ( i = 2; i<=nbr/2; i++)
    //     {

    //         reste = nbr % i;
    //               nbr>1 ;

    //         if (reste == 0) {
    //             flag = false;
    //             break;
    //         }
    //     }

    //     if (flag==false){ 
    //         console.log(nbr + " est un nombre premier");
    //     }
    //         else {
    //         console.log(nbr + " n'est pas un nombre premier");
    // }
        
