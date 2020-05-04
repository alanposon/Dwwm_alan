var x = 7 , y = 14 ; 

var vrai = x < y ; // inferieur true 
var faux = 14 <= 7 ; // inferieur ou egal false

var egalval = 4 == "4"; // egal a  true
var egalvaltype = 4 === "4"; // false

var difval = 4 != "4";  // different de false c'est les meme  
var difvaltype = 4 !== "4"; // true c'est different 

alert("vrai stock : "+ vrai + 
"\n faux stock : "+ faux + 
"\n egalval stock : " + egalval + 
"\n egalvaltype stock : "+ egalvaltype +
"\n difval stock : "+ difval + 
"\n difvaltype stock "+ difvaltype ); 
