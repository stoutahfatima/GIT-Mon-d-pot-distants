let prenoms = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent",
"Melik", "Nouara", "Salem", "Samuel ", "Stéphane"];

 document.write("Liste de Prenom : " + prenoms.join( ' - ') + ' ' );

let saisie = window.prompt("Saisissez un prenom");
let idx = prenoms.indexOf(saisie);
if (idx > -1) {
    prenoms.splice(idx, 1, "(Vide)");
    document.write("  " + "Liste de Prenom : " + prenoms.join(' - '));
} 
