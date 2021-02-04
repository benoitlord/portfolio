function setlanguageToggle(){
	"use strict";
	var url = window.location.href;
	var langue = url.substr(url.lastIndexOf("=") + 1, 2);

	if(langue === "fr"){
		$(".language-toggle").attr("title", "Change to English");
	}
	else if(langue === "en"){
		$(".switch").addClass("no-transition");
		$(".language-toggle-container").addClass("change");
		setTimeout(function(){
			$(".switch").removeClass("no-transition");
		}, 100);
		
		$(".language-toggle").attr("title", "Changer vers le français");
	}
	else{
		$(".language-toggle").attr("title", "Change to English");
	}

	$(".language-toggle").click(function(){
		var newLang;
		if(langue === "fr"){
			newLang = "en";
		}
		else if(langue === "en"){
			newLang = "fr";
		}
		else{
			newLang = "fr";
		}
		var newURL = url.slice(0, -2) + newLang;

		$(".language-toggle-container").toggleClass("change", function(){
			setTimeout(function(){
				$('.page-content, footer, .language-toggle-container').addClass("fadeout", function(){
					setTimeout(function(){
						window.location = newURL;
					}, 500);
				});
			}, 100);
		});
	});
}

$(document).ready(setlanguageToggle);