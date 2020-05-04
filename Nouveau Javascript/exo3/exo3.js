var x = 5;
var y = 10;
var z = -2; 

//x = x+1; // 5 + 1 
//x = x-2; // 6-2 
//y = y*2; // 10*2

var multi = x*y; 
var div = y/z; 
var modulo = 13 % 3 ; // = 1 

alert("variable multi :"+multi+
"\nVariable div :"+div+
"\nVariable modulo : "+modulo); 

//*************************************** */
var priorite = x + y / ( 4 + z ) % 3 ; // resultat 7 
alert(" resultat de priorite :"+priorite); 

x += 2 ; // x = x+2;  
x -= 3 ; // x = x-3 ; 

y *= x; // y = y * x ; 
y /= 2 ; // y = y / 2 ; 

y %= x ; // y = y % x ; 

alert(x); 
