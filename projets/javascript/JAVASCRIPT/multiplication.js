var n = prompt("entrez le nombre de multiple a calculer : "); 
var x = prompt("entrez le nombre entier auquel on va calculer les multiples: "); 
for (i=0; i<n; i++)
{
    console.log((parseInt(i) +1) +"x" + x + "=" + (parseInt(i)+1) * x +"<br>" );
    document.write((parseInt(i) +1) +"x" + x + "=" + (parseInt(i)+1) * x +"<br>" );
    alert((parseInt(i) +1) +"x" + x + "=" + (parseInt(i)+1) * x +"<br>" );
}