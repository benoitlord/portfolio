$(window).ready(function(){
	"use strict";
	
	$('.bouton-msg').click(function(evt){
		evt.stopPropagation();
		
		$('.msg').scrollTop(0);
		
		$('.msg').toggleClass('ouvert', 300);
		$(this).toggleClass('fa-dashboard');
		$(this).toggleClass('fa-times');
	});
	
	$(document).click(function(){
		$('.msg').scrollTop(0);
		
		$('.msg').removeClass('ouvert', 300);
		$('.bouton-msg').removeClass('fa-times');
		$('.bouton-msg').addClass('fa-dashboard');
	});
	
	$('.msg').click(function(evt){
		evt.stopPropagation();
	});
	
});