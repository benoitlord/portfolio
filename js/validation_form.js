
//Validation du formulaire

var erreur = false;
var msg;
var focus = true;

// fonction qui effectue la validation
function valider(){
    erreur = false;
    focus = true; 
    
    //Déclaration des variables contenant les différents champs 
    var prenom = document.getElementById("prenom");
    var nom = document.getElementById("nom");
    var email = document.getElementById("email");
    var message = document.getElementById("message");
    
    // Ajouter une erreur au champs du prénom ou la retirer
    if(validerPrenom(prenom.value)){
        if(focus){
            prenom.focus();
            focus = false;
        }
        ajouterErreur(prenom);
    }
    else{
        retirerErreur(prenom);
    }
    
    // Ajouter une erreur au champs du nom ou la retirer
    if(validerNom(nom.value)){
        if(focus){
            nom.focus();
            focus = false;
        }
        ajouterErreur(nom);
    }
    else{
        retirerErreur(nom);
    }
    
    // Ajouter une erreur au champs de l'adresse courriel ou la retirer
    if(validerCourriel(email.value)){
        if(focus){
            email.focus();
            focus = false; 
        }
        ajouterErreur(email);
    }
    else{
        retirerErreur(email);
    }
	
	// Ajouter une erreur au champs du message ou la retirer
    if(validerMessage(message.value)){
        if(focus){
            message.focus();
            focus = false; 
        }
        ajouterErreur(message);
    }
    else{
        retirerErreur(message);
    }
	
    //si il y a une/des errreur(s), ne pas envoyer le formulaire.
    if(erreur){
        return false; 
    }
	
    //si il n'y a pas d'erreurs, l'envoyer.
    else{
        return true;
    }
}

//Fonction pour valider le prénom
function validerPrenom(prenom){
    // Prénom est vide ?
	if(estVide(prenom)){
		msg = "Veuillez saisir votre prénom.";
		return true;
	}
    // Prénom et nom ?
	if (prenom.indexOf(" ", 0) !== -1){
		msg = "Veuillez saisir seulement votre prénom.";
		return true;
	}
    // Prenom a un chiffre?
	for (var i = 0; i < prenom.length; i++){
		var testChar = prenom.charAt(i); 
		if ((testChar >= '0') && (testChar <= '9')){ 
			msg = "Veuillez ne pas entrer de chiffre(s) dans le prénom."; 
			return true; 
		} 
	} 
	return false;
}

//Fonction pour valider le nom
function validerNom(nom){
    // Nom est vide ?
	if(estVide(nom)){
		msg = "Veuillez saisir votre nom.";
		return true;
	}
    // Nom et autre information ?
	if (nom.indexOf(" ", 0) !== -1){
		msg = "Veuillez saisir seulement votre nom.";
		return true;
	}
    // Nom a un chiffre ?
	for (var i = 0; i < nom.length; i++){
		var testChar = nom.charAt(i);
		if ((testChar >= '0') && (testChar <= '9')){ 
			msg = "Veuillez ne pas entrer de chiffre(s) dans le nom."; 
			return true; 
		} 
	} 
	return false;
}

// Fonction pour valider l'adresse courriel
function validerCourriel(courriel){
    // E-mail vide?
	if (estVide(courriel)){
		msg = "Veuillez saisir votre adresse de courrier électronique.";
		return true;
	}
    // pas de @ ?
	var posACom = courriel.indexOf("@", 1);
	if (posACom === -1){
		msg = "Votre adresse de courriel n'est pas valide. Elle doit contenir le symbole « @ ».";
		return true;
	}
    // Pas de . (domaine) ?
	if (courriel.indexOf(".", posACom + 2) === -1){ 
		msg = "Veuillez saisir nom un domaine.";
		return true;
	}
	return false;
}

//Fonction pour valider le message
function validerMessage(message){
    // Prénom est vide ?
	if(estVide(message)){
		msg = "Veuillez saisir un message.";
		return true;
	}
	return false;
}

// Fonction pour ajouter une erreur
function ajouterErreur (champ){
	erreur = true;
	
	console.log("ajouter");
	
	var form = document.getElementById("contact");
	var aErreur = document.getElementById("erreur-" + champ.id);
	var messageErreur = document.getElementById("erreur-" + champ.id);
	
	if(!aErreur){
		messageErreur = document.createElement("p");
    	messageErreur.className = "erreur";
		messageErreur.id = "erreur-" + champ.id;
    	form.appendChild(messageErreur);
	}
	messageErreur.innerHTML = msg;
}

// Fonction pour retirer une erreur
function retirerErreur (champ) {
	console.log("retirer");

	var form = document.getElementById("contact");
	var messageErreur = document.getElementById("erreur-" + champ.id);
	console.log(messageErreur);
	if(messageErreur){
		form.removeChild(messageErreur);
	}
}

// Fonction pour vérifier si une entrée est vide
function estVide(texte){
    // Aucune valeur entrée ?
 	if (texte.length == 0){
        return true;
    }
    // Pas tous des espaces ?
 	for (var i = 0; i < texte.length; i++){ 
 		if (texte.charAt(i) !== " "){
 			return false;
		}
 	}
 	return true;
}