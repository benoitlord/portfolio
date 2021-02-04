//Calls to action
function setCallsToAction(){
	"use strict";
	// Pour régler la largeur des call to action selon la plateforme
	var widthCallsToAction = $('.calls-to-action').width();
	var heightCallToAction = $('.call-to-action').outerHeight();

	// Ordinateur
	if($(window).width() > 1365){
		$('.call-to-action').css('width', widthCallsToAction/4);
		$('.calls-to-action').css('height', heightCallToAction);
	}

	// Tablette
	else if ($(window).width() > 667){
		$('.call-to-action').css('width', widthCallsToAction/2);	
		$('.calls-to-action').css('height', heightCallToAction*2);
	}

	// Téléphone
	else{
		$('.call-to-action').css('width', widthCallsToAction);
		$('.calls-to-action').css('height', heightCallToAction*4);
	}
}

$(document).ready(setCallsToAction);
$(window).resize(setCallsToAction);