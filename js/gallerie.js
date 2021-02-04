var imageTimer;

$(document).ready(function(){
	"use strict";
	
	// overlay pour la description des projets
		// Pour cacher l'overlay ouvert lorsqu'on clique sur le X
	$('.projet i.fa-times-circle').click(function(evt){
		evt.stopPropagation();
		$('.projet.visible').prepareTransition().removeClass("visible");
		$('.black-overlay').removeClass("visible");
		stopImageChange();
		$("video").each(function(){ this.pause(); });
		$("body").off("scroll touchmove mousewheel");
	});

		// Pour cacher l'overlay ouvert lorsqu'on clique sur un autre ou quand on clique à-côté
	$('.black-overlay').click(function(){
		$('.projet.visible').prepareTransition().removeClass("visible");
		$('.black-overlay').removeClass("visible");
		stopImageChange();
		$("video").each(function(){ this.pause(); });
		$("body").off("scroll touchmove mousewheel");
	});

	$('.projet, .img-gallerie').click(function(evt){
		evt.stopPropagation();
	});

		// Pour afficher les différents overlays quand on clique sur le projet correspondant
	$('#section1 .img-gallerie').click(function(){
		var classes = $(this).attr('class').split(/\s+/);
		var classe;
		$.each(classes, function(index){
			if(classes[index].indexOf("vers-projet") >= 0){
				classe = classes[index];
			}
		});
		var num = classe.substr(classe.lastIndexOf("t") + 1);

		$('.black-overlay').addClass("visible");
		$('.section1.projet' + num).prepareTransition().addClass("visible");
		
		if($(".section1.projet" + num).hasClass("changeImage")){
			startImageChange($(".section1.projet" + num + " img"), $(".section1.projet" + num).data("images"));
		}

		$("body").on('scroll touchmove mousewheel', function(e){
			e.preventDefault();
			e.stopPropagation();
			return false;
		});
	});

	$('#section2 .img-gallerie').click(function(){
		var classes = $(this).attr('class').split(/\s+/);
		var classe;
		$.each(classes, function(index){
			if(classes[index].indexOf("vers-projet") >= 0){
				classe = classes[index];
			}
		});
		var num = classe.substr(classe.lastIndexOf("t") + 1);

		$('.black-overlay').addClass("visible");
		$('.section2.projet' + num).prepareTransition().addClass("visible");
		
		if($(".section2.projet" + num).hasClass("changeImage")){
			startImageChange($(".section2.projet" + num + " img"), $(".section2.projet" + num).data("images"));
		}

		$("body").on('scroll touchmove mousewheel', function(e){
			e.preventDefault();
			e.stopPropagation();
			return false;
		});
	});

	$('#section3 .img-gallerie').click(function(){
		var classes = $(this).attr('class').split(/\s+/);
		var classe;
		$.each(classes, function(index){
			if(classes[index].indexOf("vers-projet") >= 0){
				classe = classes[index];
			}
		});
		var num = classe.substr(classe.lastIndexOf("t") + 1);

		$('.black-overlay').addClass("visible");
		$('.section3.projet' + num).prepareTransition().addClass("visible");
		
		if($(".section3.projet" + num).hasClass("changeImage")){
			startImageChange($(".section3.projet" + num + " img"), $(".section3.projet" + num).data("images"));
		}

		$("body").on('scroll touchmove mousewheel', function(e){
			e.preventDefault();
			e.stopPropagation();
			return false;
		});
	});

	// Next et Previous pour gallerie
	$('.projet .next').click(function(){
		var classes = $(this).parent().attr('class').split(/\s+/);
		var classe;
		$.each(classes, function(index){
			if(classes[index].indexOf("section") >= 0){
				classe = classes[index];
			}
		});
		if($(this).parent().next().hasClass(classe)){
			stopImageChange();
			$("video").each(function(){ this.pause(); });
			
			$(this).parent().prepareTransition().removeClass("visible").next().prepareTransition().addClass("visible");
			
			if($(this).parent().next().hasClass("changeImage")){
				startImageChange($(this).parent().next().children("img"), $(this).parent().next().data("images"));
			}
		}
		else{
			$(".projet.visible").effect("shake", { times:3 }, 300);
		}
	});

	$('.projet .previous').click(function(){
		var classes = $(this).parent().attr('class').split(/\s+/);
		var classe;
		$.each(classes, function(index){
			if(classes[index].indexOf("section") >= 0){
				classe = classes[index];
			}
		});
		if($(this).parent().prev().hasClass(classe)){
			stopImageChange();
			$("video").each(function(){ this.pause(); });
			
			$(this).parent().prepareTransition().removeClass("visible").prev().prepareTransition().addClass("visible");
			
			if($(this).parent().prev().hasClass("changeImage")){
				startImageChange($(this).parent().prev().children("img"), $(this).parent().prev().data("images"));
			}
		}
		else{
			$(".projet.visible").effect("shake", { times: 3 }, 300);
		}
	});

	//Pour utiliser les touches du clavier dans la gallerie
	var changing;
	if($(".projet").length){
		$(document).keydown(function(e){
			var classes = $(".projet.visible").attr('class').split(/\s+/);
			var classe;
			$.each(classes, function(index){
				if(classes[index].indexOf("section") >= 0){
					classe = classes[index];
				}
			});
			//gauche
			if(e.keyCode === 37){
				if($(".projet.visible").prev().hasClass(classe)){
					if(!changing){
						changing = true;
						stopImageChange();
						$("video").each(function(){ this.pause(); });
						
						$(".projet.visible").prepareTransition().removeClass("visible").prev().prepareTransition().addClass("visible");
						setTimeout(function(){ changing = false; }, 300);
						
						if($(".projet.visible").hasClass("changeImage")){
							startImageChange($(".projet.visible").children("img"), $(".projet.visible").data("images"));
						}
					}
				}
				else{
					$(".projet.visible").effect("shake", { times:3 }, 300);
				}
			}
			//droite
			else if(e.keyCode === 39){
				if($(".projet.visible").next().hasClass(classe)){
					if(!changing){
						changing = true;
						stopImageChange();
						$("video").each(function(){ this.pause(); });
						
						$(".projet.visible").prepareTransition().removeClass("visible").next().prepareTransition().addClass("visible");
						setTimeout(function(){ changing = false; }, 300);
						
						if($(".projet.visible").hasClass("changeImage")){
							startImageChange($(".projet.visible").children("img"), $(".projet.visible").data("images"));
						}
					}
				}
				else{
					$(".projet.visible").effect("shake", { times: 3 }, 300);
				}
			}
			//ESC
			else if(e.keyCode === 27){
				$('.projet.visible').prepareTransition().removeClass("visible");
				$('.black-overlay').removeClass("visible");
				stopImageChange();
				$("video").each(function(){ this.pause(); });
				$("body").off("scroll touchmove mousewheel");
			}
		});
	}

	//Pour ajouter la classe firstLast aux boutons des premiers et derniers projets des sections
	$(".projet").each(function(){
		var classes = $(this).attr('class').split(/\s+/);
		var classe;
		$.each(classes, function(index){
			if(classes[index].indexOf("section") >= 0){
				classe = classes[index];
			}
		});
		if(!$(this).prev().hasClass(classe)){
			$(this).children(".previous").addClass("firstLast");
		}
		if(!$(this).next().hasClass(classe)){
			$(this).children(".next").addClass("firstLast");
		}
	});

	//Compteur de sections
	$('.compteur .section1, .compteur .section2, .compteur .section3').hover(
		function(){
			var num = trouverBulle($(this));

			$('.bulle_compteur_' + num).stop().animate({opacity: 1, right: "65px"}, 300);
		},
		function(){
			var num = trouverBulle($(this));

			$('.bulle_compteur_' + num).stop().animate({opacity: 0, right: "55px"}, 300);
		}
	);

	$('.compteur .section1, .compteur .section2, .compteur .section3').click(function(){
		var num = trouverBulle($(this));

		$("body, html").stop().animate({scrollTop: $('#section' + num).offset().top}, 1000, "easeOutQuint", function(){
			$('#section' + num).focus();
		});
	});
});

function trouverBulle(element){
	"use strict";
	var classes = element.attr('class').split(/\s+/);
	var classe;
	$.each(classes, function(index){
		if(classes[index].indexOf("section") >= 0){
			classe = classes[index];
		}
	});
	var num = classe.substr(classe.lastIndexOf("n") + 1);

	return num;
}

var couleurCounter = 0;
function afficherCouleur(){
	"use strict";
	if(couleurCounter === 1){
		$('.compteur .section1, .compteur .section2, .compteur .section3').css({backgroundColor: "#ddd"});

		if($(window).scrollTop()+30 >= $('#section1').offset().top && $(window).scrollTop()+30 < $('#section2').offset().top){
			$('.compteur .section1').css({backgroundColor: "#bbb"});
		}
		else if($(window).scrollTop()+30 >= $('#section2').offset().top && $(window).scrollTop()+30 < $('#section3').offset().top){
			$('.compteur .section2').css({backgroundColor: "#bbb"});
		}
		else if($(window).scrollTop()+30 >= $('#section3').offset().top){
			$('.compteur .section3').css({backgroundColor: "#bbb"});
		}
	}
	else if(couleurCounter === 5){
		couleurCounter = 0;
	}
	
	couleurCounter++;
}

//Fade in dans la gallerie du portfolio
var breakpoint;
function setBreakpoint(){
	"use strict";
	if($(window).width() > 1024){
		breakpoint = 800;
	}
	else if ($(window).width() <= 1024 && $(window).width() >= 768 && window.innerHeight > window.innerWidth){
			breakpoint = 1000;
		}
		else if ($(window).width() <= 1024 && $(window).width() >= 768 && window.innerWidth > window.innerHeight){
			breakpoint = 700;
		}
	else if($(window).width() < 768){
		breakpoint = 600;
	}
}

var galleryCounter = 0;
function animateGallery(){
	"use strict";
	if (galleryCounter === 1){
		var array = [];
		$(".img-gallerie").each(function(){
			if($(this).offset().top - breakpoint < $(window).scrollTop() && $(this).hasClass("fadeout")){
				array.push($(this));
			}
		});

		if(array.length > 0){
			$.each(array, function(index){
				if(array[index].hasClass("fadeout")){
					setTimeout(function(){
						array[index].removeClass("fadeout");
					}, 100*index);
				}
			});
		}
	}
	else if(galleryCounter === 5){
		galleryCounter = 0;
	}
	galleryCounter++;
}

function startImageChange($img, num){
	"use strict";
	
	imageTimer = setInterval(function(){
		var platform;
		if($(window).width() > 1365){
			platform = "desktop";
		}
		else if($(window).width() > 667){
			platform = "tablet";
		}
		else{
			platform = "phone";
		}
		var $img2 = $img.filter("." + platform);
		
		var currentSRC = $img2.attr("src");
		var currentPOS = currentSRC.substr(-5, 1);
		var newPOS;
		if(currentPOS < num){
			newPOS = (Number(currentPOS) + 1);
		}
		else{
			newPOS = 1;
		}
		$img2.animate({opacity: 0}, 300, function(){
			$(this).attr("src", currentSRC.replace(currentPOS, newPOS));
			setTimeout(function(){
				$img2.animate({opacity: 1}, 300);
			}, 200);
		});
	}, 3000);
}

function stopImageChange(){
	"use strict";
	clearInterval(imageTimer);
}

$(document).ready(setBreakpoint);
$(window).resize(setBreakpoint);

$(window).on("load", function(){
	"use strict";
	setInterval(animateGallery, 50);
	setInterval(afficherCouleur, 50);
});