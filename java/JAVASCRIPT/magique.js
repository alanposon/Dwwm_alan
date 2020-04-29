

var magic = parseInt(Math.random()*100);
flag = true ; 
do { 
var chiffre = parseInt(prompt("saisi un chiffre")); 
    if (chiffre > magic){ 
        alert( " c'est moin  ");
    }
    else if ( chiffre < magic ){  

        alert( "c'est plus "); 
    }
    else { 
        flag=false;
        alert( "c'est gagnée , oui did it ");
    }
}

while (flag!= false);
