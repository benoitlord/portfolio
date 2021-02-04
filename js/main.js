// JS général

$(window).bind("pageshow", function(event) {
	"use strict";
	
    if(event.originalEvent.persisted) {
        window.location.reload();
    }
});

// Fade in quand page load
$(window).on("load", function(){
	"use strict";
	
	$("#loader").animate({opacity: 0}, 300, function(){
		$("#loader").hide(function(){
			if($(".compteur").length){
				$(".compteur").animate({opacity: 1}, 500);
			}
			$(".page-content, footer, .language-toggle-container").removeClass("fadeout fadedout");
		});
	});
});

$(document).ready(function(){
	"use strict";
	
	loadImages();
	$("html").easeScroll();
	
	//Pour empêcher de drag and drop les images
	$('img').on('dragstart', function(event) { event.preventDefault(); });
	
    // Fade out quand clique sur lien
    $('a').click(function(e){
		var attr = $(this).attr("download");
		if((typeof attr === typeof undefined || attr === false) && !$(this).hasClass("nouvelonglet") && !$(this).hasClass("pas-effet")){
			if(!$(this).hasClass("anchor")){
				var redirect = $(this).attr('href');
				e.preventDefault();
				
				$('.page-content, footer, .language-toggle-container').addClass("fadeout", function(){
					setTimeout(function(){
						document.location.href = redirect;
					}, 500);
				});
			}
			else{
				e.preventDefault();
				var section = $($(this).attr("href"));
				
				$("body, html").animate({scrollTop: section.offset().top}, 1000, "easeOutQuint", function(){
					section.focus();
				});
			}
		}
    });
	
	//Boutons
	
	$(".bouton").hover(
	function(){
		$(this).children(".fa.fleche").show("blind", {direction: "left"}, 200);
	},
	function(){
		$(this).children(".fa.fleche").hide("blind", {direction: "left"}, 200);
	});
	
	$("button[type='submit']").hover(
	function(){
		$(this).children(".fa.fleche").show("blind", {direction: "left"}, 200);
	},
	function(){
		$(this).children(".fa.fleche").hide("blind", {direction: "left"}, 200);
	});
	
	//Icône CV
	$('img.social').hover(
		function(){
			$(this).attr("src", "img/icone_cv_hover.png");
		},
		function(){
			$(this).attr("src", "img/icone_cv.png");
		}
	);
	
	/*$('img.social').hover(
		function(){
			$(this).fadeTo(300,0.00, function() {
				$(this).attr("src", "img/icone_cv_hover.png");
			}).fadeTo(300,1);
		},
		function(){
			$(this).fadeTo(300,0.00, function() {
				$(this).attr("src", "img/icone_cv.png");
			}).fadeTo(300,1);
		}
	);*/
	
	// Bouton vers le haut
	
	$('#bouton-haut').click(function(){
		$(this).animate({bottom: "3000px"}, 300);
		$('body, html').animate({scrollTop: 0}, 1000, "easeOutQuint");
	});
	
	var on = true;
	var off = true;
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 500){
			if(on){
				on = false;
				off = true;
				$('#bouton-haut').css({bottom: "50px"}).addClass("visible");
				//$('#bouton-haut').animate({right: "0px"});
			}
		}
		else if(off){
			off = false;
			on = true;
			$('#bouton-haut').removeClass("visible");
			//$('#bouton-haut').animate({right: "-55px"});
		}
	});
});

function loadImages(){
	"use strict";
	if($(window).width() > 1365){
		$("img.desktop[data-src]").each(function(){
			$(this).attr("src", $(this).data("src"));
		});
	}
	else if($(window).width() > 667){
		$("img.tablet[data-src], img.tablet-slider[data-src]").each(function(){
			$(this).attr("src", $(this).data("src"));
		});
	}
	else{
		$("img.phone[data-src]").each(function(){
			$(this).attr("src", $(this).data("src"));
		});
	}	
}
$(window).resize(loadImages);

var previousSize = $(window).width();
//refresh la page si on passe en mobile
$(window).resize(function(){
	"use strict";
	
	var newSize = $(window).width();
	
	if(previousSize > 1366 && newSize <= 1366){
		window.location.reload();
	}
	if(previousSize <= 1366 && newSize > 1366){
		window.location.reload();
	}
	
	previousSize = newSize;
});