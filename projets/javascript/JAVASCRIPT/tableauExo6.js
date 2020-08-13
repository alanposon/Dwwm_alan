// on crée deux dates 
var date1 = new date("2020 March 19 21:40:30 "); 
var date2 = new date("2020 March 19 01:19:19"); 
console.log("Date 1 => "+ date1 ); 
console.log("Date 2 =>" +date2 ); 
// on cree deux variable et on addition les deux valeurs 
var heure = date1.getHours()+date2.getHours(); 
var minute = date1.getMinute()+date2.getMinutes(); 
var seconde = date1.getSeconde()+date2.getSeconds(); 
console.log("Donnée combinées :"); 
console.log("seconde =>" + seconde ); 
console.log("Minute => "+ minute ); 
console.log("heure => "+heure); 

// cas des secondes
 
if(seconde > 59){ // si + 60sec 
var diffSec = seconde-60; // on calcule la difference 
seconde = parseInt(0+diffSec); // finalement, on definit la nouvelle valeur de seconde : 0 + la diffrence  
minute++; 
}

console.log("\nDonnées modifiées :"); 
console.log("seconde => "+seconde ); 

// cas des minutes 

if (minute> 59){ 
  var diffMin = minute-60 ; 
  minute = parseInt(0+diffMin); 
  heure++; 

}
console.log("Minute=>"+minute); 
// cas des heures 
if (heure > 23 ){ 
  var diffHeure = heure-24 ; 
  heure = parseInt(0+diffheure); 

}

console.log("Heure => "+ heure ); 
var date3 = new Date ("2020 March 19 "+heure+":"+minute+":"+seconde); 
console.log("Date 'combinée' =>" + date3);
