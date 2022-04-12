let jeunes = adultes = vieux = 0;
console.log(jeunes)
do {
// inserer 10 ages differents
let age = parseInt(prompt("Entrez votre âge (si > 99 termine): ",
"0"), 10);
let condjeune = (age < 20);
let condvieux = (age > 40);
let condadult = (!condjeune && !condvieux);
let condcentenaire = (age > 99);
if(condjeune) {
jeunes += (condjeune ? 1 : 0);
} else if(condvieux) {
vieux += (condvieux ? 1 : 0);
} else if(condadult) {
adultes += (condadult ? 1 : 0);
}


} while (!condcentenaire)
document.write("Il y a " + jeunes + " jeunes, " + adultes + " adultes, "
+ vieux + " vieux (dont un centenaire)");