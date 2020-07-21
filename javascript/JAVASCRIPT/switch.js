var manga = prompt("quel manga souhaitez vous ? ") ;

switch (manga)
{
case "dragonBall" :
console.log("titre dragon ball : type shonen");
break;
case "onePiece" :
console.log("titre one piece   :  type shonen");
break;
case "naruto" :
console.log("titre naruto  :  type shonen");
break;
default:
console.log("titre "+manga+": type inconnue");
}