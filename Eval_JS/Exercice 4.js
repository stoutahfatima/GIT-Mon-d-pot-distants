console.log("debut");
// prix unitaire
let pu = parseFloat(window.prompt("entrer pu"));
// quantité
let qtecom = parseFloat(window.prompt("entrer quantite"));
// total avec remise
let pap ;
let port;
let tot = pu * qtecom;
console.log(tot);

    if(tot >= 100 && tot <= 200) {
        port = (tot*2)/100;
        pap = tot - (tot*5/100) + port;
    document.write("le port est 2%, la remise est 5 et le prix à payer: " + pap + ", prix unitaire: " + pu + ", quantite: " + qtecom);

    } else if (tot > 200 && tot <= 500) {
        port = (tot*2)/100;
        pap = tot - (tot*5/100) + port;
        document.write("le port est 2%, la remise est de 10 et le prix à payer est de: " + pap + ", prix unitaire: " + pu + ", quantite: " + qtecom);
    }  else if (tot > 500) {
        pap = tot - (tot*5/100) ;
        document.write("le port est de 0(gratuit),  la remise est de 10 et le prix à payer est de: " + pap + ", prix unitaire: " + pu + ", quantite: " + qtecom);
    } else {
    document.write("nombre incorrect")
    }
console.log("fin");