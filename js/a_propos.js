// À propos (permet de donner au div à propos la même hauteur que son contenu)
function setAPropos(){
	"use strict";
	console.log("a propos");
	var texte = $('.a-propos .texte').outerHeight();
	var img = $(".a-propos img").outerHeight();
	var total;

	if($(window).width() > 1365){
		total = img;
	}
	else if ($(window).width() > 667){
		total = texte+img;
	}
	else{
		total = texte+img;
	}
	$(".a-propos").css('height', total);
}

$(window).on("load", setAPropos);

// Refresh la hauteur lorsqu'on redimensionne la page
$(window).resize(setAPropos);