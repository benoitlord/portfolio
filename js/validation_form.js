//Validation du formulaire

var erreur = false;
var focus = true;
var langue;

// fonction qui effectue la validation
function valider(){
	"use strict";
	
	var url = window.location.href;
	langue = url.substr(url.lastIndexOf("=") + 1);
	
    erreur = false;
    focus = true; 
    
    //Déclaration des variables contenant les différents champs 
    var prenom = document.getElementById("prenom");
    var nom = document.getElementById("nom");
    var email = document.getElementById("email");
    var message = document.getElementById("message");
    
    validerPrenom(prenom);
    validerNom(nom);
 	validerCourriel(email);
	validerMessage(message);
	
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
	"use strict";
	
    // Prénom est vide ?
	if(estVide(prenom.value)){
		if(langue === "fr"){
			ajouterErreur(prenom, "Veuillez saisir votre prénom.");
		}
		else if(langue === "en"){
			ajouterErreur(prenom, "Please enter your first name.");
		}
		return true;
	}
    // Prénom et nom ?
	if (prenom.value.indexOf(" ", 0) !== -1){
		if(langue === "fr"){
			ajouterErreur(prenom, "Veuillez saisir seulement votre prénom.");
		}
		else if(langue === "en"){
			ajouterErreur(prenom, "Please enter only your first name.");
		}
		return true;
	}
    // Prenom a un chiffre?
	for (var i = 0; i < prenom.value.length; i++){
		var testChar = prenom.value.charAt(i); 
		if ((testChar >= '0') && (testChar <= '9')){ 
			if(langue === "fr"){
				ajouterErreur(prenom, "Veuillez ne pas entrer de chiffre(s) dans le prénom."); 
			}
			else if(langue === "en"){
				ajouterErreur(prenom, "Please do not enter numbers in the first name.");
			}
			return true; 
		} 
	}
	retirerErreur(prenom);
	return false;
}

//Fonction pour valider le nom
function validerNom(nom){
	"use strict";
	
    // Nom est vide ?
	if(estVide(nom.value)){
		if(langue === "fr"){
			ajouterErreur(nom, "Veuillez saisir votre nom.");
		}
		else if(langue === "en"){
			ajouterErreur(nom, "Please enter your last name.");
		}
		return true;
	}
    // Nom et autre information ?
	if (nom.value.indexOf(" ", 0) !== -1){
		if(langue === "fr"){
			ajouterErreur(nom, "Veuillez saisir seulement votre nom.");
		}
		else if(langue === "en"){
			ajouterErreur(nom, "Please enter only your last name.");
		}
		return true;
	}
    // Nom a un chiffre ?
	for (var i = 0; i < nom.value.length; i++){
		var testChar = nom.value.charAt(i);
		if ((testChar >= '0') && (testChar <= '9')){ 
			if(langue === "fr"){
				ajouterErreur(nom, "Veuillez ne pas entrer de chiffre(s) dans le nom."); 
			}
			else if(langue === "en"){
				ajouterErreur(nom, "Please do not enter numbers in the last name.");
			}
			return true; 
		} 
	} 
	retirerErreur(nom);
	return false;
}

// Fonction pour valider l'adresse courriel
function validerCourriel(courriel){
	"use strict";
	
    // E-mail vide?
	if (estVide(courriel.value)){
		if(langue === "fr"){
			ajouterErreur(courriel, "Veuillez saisir votre adresse de courrier électronique.");
		}
		else if(langue === "en"){
			ajouterErreur(courriel, "Please enter your email address.");
		}
		return true;
	}
    // pas de @ ?
	var posACom = courriel.value.indexOf("@", 1);
	if (posACom === -1){
		if(langue === "fr"){
			ajouterErreur(courriel, "Votre adresse de courriel n'est pas valide. Elle doit contenir le symbole « @ ».");
		}
		else if(langue === "en"){
			ajouterErreur(courriel, "Your email address is not valild. It must contain the symbol \"@\".");
		}
		return true;
	}
    // Pas de . (domaine) ?
	if (courriel.value.indexOf(".", posACom + 2) === -1){ 
		if(langue === "fr"){
			ajouterErreur(courriel, "Veuillez saisir un nom de domaine.");
		}
		else if(langue === "en"){
			ajouterErreur(courriel, "Please enter a domain name.");
		}
		return true;
	}
	retirerErreur(courriel);
	return false;
}

//Fonction pour valider le message
function validerMessage(message){
	"use strict";
	
    // Prénom est vide ?
	if(estVide(message.value)){
		if(langue === "fr"){
			ajouterErreur(message, "Veuillez saisir un message.");
		}
		else if(langue === "en"){
			ajouterErreur(message, "Please enter a message");
		}
		return true;
	}
	retirerErreur(message);
	return false;
}

// Fonction pour ajouter une erreur
function ajouterErreur(champ, msg){
	"use strict";
	
	erreur = true;
	
	var messageErreur = document.getElementById("erreur-" + champ.id);
	
	if(!messageErreur){
		messageErreur = document.createElement("p");
    	messageErreur.className = "erreur";
		messageErreur.id = "erreur-" + champ.id;
		$(messageErreur).hide().prependTo($("#contact")).fadeIn(300);
		
		champ.style.backgroundColor = "#830002";
		champ.style.color = "white";
	}
	messageErreur.innerHTML = msg;
	
	if(focus){
		champ.focus();
		focus = false;
	}
}

// Fonction pour retirer une erreur
function retirerErreur (champ) {
	"use strict";
	
	var messageErreur = document.getElementById("erreur-" + champ.id);
	if(messageErreur){
		//form.removeChild(messageErreur);
		$(messageErreur).fadeOut(300, function(){
			$(this).remove();
		});
		champ.style.backgroundColor = "#ddd";
		champ.style.color = "black";
	}
}

// Fonction pour vérifier si une entrée est vide
function estVide(texte){
	"use strict";
	
    // Aucune valeur entrée ?
 	if (texte.length === 0){
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