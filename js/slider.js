var slideCount, slideWidth, slideHeight, sliderUlWidth;

$(document).ready(function(){
	"use strict";
	//Détermine si le slider doit changer automatiquemenet de page
	var changeSlide = true;

	// Pour changer automatiquement les images
	setInterval(function () {
		if(changeSlide){
			moveRight();
		}
	}, 5000);
	
	setupSlider();

	// Pour placer les images à la bonne place
	$('#slider ul li:last-child').prependTo('#slider ul');

	// Pour changer d'image vers la gauche
	$('span.control_prev').click(moveLeft);

	// Pour changer d'image vers la droite
	$('span.control_next').click(moveRight);

	//Pour faire apparaître/disparaître les boutons et activer/désactiver le changement de page automatique
	$("#slider").hover(
		function(){
			//$('span.control_next').stop().animate({right: "0px", opacity: 1}, 100);
			//$('span.control_prev').stop().animate({left: "0px", opacity: 1}, 100);
			$("span.control_next, span.control_prev").addClass("visible");

			changeSlide = false;
		},
		function(){
			//$('span.control_next').stop().animate({right: "-15px", opacity: 0}, 100);
			//$('span.control_prev').stop().animate({left: "-15px", opacity: 0}, 100);
			$("span.control_next, span.control_prev").removeClass("visible");

			changeSlide = true;
		}
	);
});

// Fonction qui fait le setup du slider
function setupSlider(){
	"use strict";
	// Variables pour les dimensions des différents éléments
	slideCount = $('#slider ul li').length;
	slideWidth = $('#slider ul li').width();
	slideHeight = $('#slider ul li').height();
	sliderUlWidth = slideCount * slideWidth;

	// Pour régler les dimensions des éléments
	$('#slider').css({ width: slideWidth, height: slideHeight });
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
}

// Fonction pour changer d'image vers la gauche
function moveLeft() {
	"use strict";
	$('#slider ul').animate({
		left: + slideWidth
	}, 800, "easeInOutQuint", function () {
		$('#slider ul li:last-child').prependTo('#slider ul');
		$('#slider ul').css('left', '');
	});
}

// Fonction pour changer d'image vers la droite
function moveRight() {
	"use strict";
	$('#slider ul').animate({
		left: - slideWidth
	}, 800, "easeInOutQuint", function () {
		$('#slider ul li:first-child').appendTo('#slider ul');
		$('#slider ul').css('left', '');
	});
}

// Pour changer la taille du slider lorsqu'on redimensionne la page 
$(window).resize(setupSlider);