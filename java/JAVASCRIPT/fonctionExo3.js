
var phrases = prompt(" quelle est votre phrase ? ");
var lettre = prompt("quelle lettre voulez vous que je compte ? ");
const tx = phrases;
let arr = [], chr = lettre;
for (let item of tx) {
    if (item === chr) arr.push(item);
}
alert("nb de " + chr + " = " + arr.length);