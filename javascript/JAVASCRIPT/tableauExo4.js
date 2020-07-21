
function triBulles(tab)
{ do{
    var flag = false ; 
    for (var i=0; i<tab.length-1; i++)
    {  if (tab[i] > tab[i+1])
         {
     temp = tab[i]; 
     tab[i] = tab[i+1]; 
     tab[i+1]= temp; 
     flag= true; 
    }
    } while(flag); 
 }
  var tab = [12,14,6,7,25,1]; 
  console.log("Tableau non rangé : "+ tab ); 
triBulles(tab);
console.log("Tableau trié dans l'ordre croissant : "+ tab);  