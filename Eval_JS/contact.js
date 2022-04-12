function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function enregistrer() {
    var nom = document.Form.nom.value;
    var prenom = document.Form.prenom.value;
    var genre = document.Form.sexe.value;
    var jour = document.Form.ddn.value;
    var code = document.Form.cp.value;
    var email = document.Form.email.value;
    var adresse = document.Form.adresse.value;
    var ville = document.Form.ville.value;
    var sujet = document.Form.sujet.value;
    var question = document.Form.question.value;
    var cgu = document.Form.cgu.value
    var nomErr = prenomErr = sexeErr = dateErr = postalErr = adresseErr = villeErr = emailErr = sujetErr = questionErr = cguErr = true;

    if (nom == "") {
        printError("nomErr", "Entrer votre nom svp");
        document.getElementById("nomination").classList.add("interdit");
        document.getElementById("nomination").classList.remove("exact");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(nom) === false) {
            printError("nomErr", "Veuillez ecrire un nom correct svp");
            document.getElementById("nomination").classList.add("interdit");
            document.getElementById("nomination").classList.remove("exact");
        } else {
            printError("nomErr", "");
            nomErr = false;
            document.getElementById("nomination").classList.remove("interdit");
            document.getElementById("nomination").classList.add("exact");
        }
    }
    if (prenom == "") {
        printError("prenomErr", "Entrer votre prenom svp");
        document.getElementById("prenomination").classList.add("interdit");
        document.getElementById("prenomination").classList.remove("exact");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(prenom) === false) {
            printError("prenomErr", "Veuillez ecrire un prenom correct svp");
            document.getElementById("prenomination").classList.add("interdit");
            document.getElementById("prenomination").classList.remove("exact");
        } else {
            printError("prenomErr", "");
            prenomErr = false;
            document.getElementById("prenomination").classList.remove("interdit");
            document.getElementById("prenomination").classList.add("exact");
        }
    }
    if (genre == "") {
        printError("sexeErr", "Selectionner votre genre svp");
        var elem = document.getElementById("genre");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {
        printError("sexeErr", "");
        sexeErr = false;
        var elem = document.getElementById("genre");
        elem.classList.add("exact");
        elem.classList.remove("interdit");
    }
    if (jour == "") {
        printError("dateErr", "Selectionner une date svp");
        var elem = document.getElementById("ddn");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {
        printError("dateErr", "");
        dateErr = false;
        var elem = document.getElementById("ddn");
        elem.classList.add("exact");
        elem.classList.remove("interdit");
    }
    if (code == "") {
        printError("postalErr", "Veuillez entrer votre code postal");
        var elem = document.getElementById("cp");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {
        var regex = /^\d{5}$/;
        if (regex.test(code) === false) {
            printError("postalErr", "Veuiller inserer un code postal valide ");
            var elem = document.getElementById("cp");
            elem.classList.add("interdit");
            elem.classList.remove("exact");
        } else {
            printError("postalErr", "");
            postalErr = false;
            var elem = document.getElementById("cp");
            elem.classList.add("exact");
            elem.classList.remove("interdit");
        }
    }
    if (adresse == "") {
        printError("adresseErr", "Entrer votre adresse svp");
        document.getElementById("adresse").classList.add("interdit");
        document.getElementById("adresse").classList.remove("exact");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(nom) === false) {
            printError("adresseErr", "Veuillez ecrire une adresse correcte svp");
            document.getElementById("adresse").classList.add("interdit");
            document.getElementById("adresse").classList.remove("exact");
        } else {
            printError("adresseErr", "");
            adresseErr = false;
            document.getElementById("adresse").classList.remove("interdit");
            document.getElementById("adresse").classList.add("exact");
        }
    }
    if (ville == "") {
        printError("villeErr", "Entrer votre ville svp");
        document.getElementById("ville").classList.add("interdit");
        document.getElementById("ville").classList.remove("exact");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(nom) === false) {
            printError("villeErr", "Veuillez ecrire une ville correct svp");
            document.getElementById("ville").classList.add("interdit");
            document.getElementById("ville").classList.remove("exact");
        } else {
            printError("villeErr", "");
            villeErr = false;
            document.getElementById("ville").classList.remove("interdit");
            document.getElementById("ville").classList.add("exact");
        }
    }
    if (email == "") {
        printError("emailErr", "Veuiller entrer votre email");
        var elem = document.getElementById("email");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {

        var regex = /^\S+[0-9]+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Veuiller entrer adresse email valide");
            var elem = document.getElementById("email");
            elem.classList.add("interdit");
            elem.classList.remove("exact");
        } else {
            printError("emailErr", "");
            emailErr = false;
            var elem = document.getElementById("email");
            elem.classList.add("exact");
            elem.classList.remove("interdit");

        }
    }
    if (sujet == "Selectionner") {
        printError("sujetErr", "Selectionner un sujet svp");
        var elem = document.getElementById("sujet");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {
        printError("sujetErr", "");
        sujetErr = false;
        var elem = document.getElementById("sujet");
        elem.classList.add("exact");
        elem.classList.remove("interdit");
    }
    if (question == "") {
        printError("questionErr", "Redigez une question svp");
        var elem = document.getElementById("question");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {
        printError("questionErr", "");
        questionErr = false;
        var elem = document.getElementById("question");
        elem.classList.add("exact");
        elem.classList.remove("interdit");
    }
    if (cgu == "") {
        printError("cgu", "cochez la case");
        var elem = document.getElementById("cgu");
        elem.classList.add("interdit");
        elem.classList.remove("exact");
    } else {
        printError("questionErr", "");
        cguErr = false;
        var elem = document.getElementById("cgu");
        elem.classList.add("exact");
        elem.classList.remove("interdit");
    }

    if ((nomErr || prenomErr || sexeErr || dateErr || postalErr || adresseErr || villeErr || emailErr || sujetErr || questionErr || cguErr) == true) {
        return false;
    }
}