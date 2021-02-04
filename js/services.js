//Services (permet de donner aux divs des services la même hauteur que leur contenu)
function setServices(){
	"use strict";
	var widthServices = $('.services-1').width();
	var heightService;
	var heightServices1 = 0;
	var heightServices2 = 0;
	var heightTitre;
	if($(window).width() > 1365){
		$('.service').css('width', widthServices/4);

		heightService = $(".service").outerHeight(true);
		heightTitre = $('.services-1 h2').outerHeight(true);

		$('.services-1').css('height', heightService*2 + heightTitre);
		$('.services-2').css('height', heightService + heightTitre);
	}
	else if ($(window).width() > 667){
		$('.service').css('width', widthServices/2);

		heightService = $(".service").outerHeight(true);
		heightTitre = $('.services-1 h2').outerHeight(true);

		$('.services-1').css('height', heightService*3 + heightTitre);
		$('.services-2').css('height', heightService*2 + heightTitre);
	}
	else{
		$('.service').css('width', widthServices);

		$('.services-1 .service').each(function(){
			heightServices1 += $(this).outerHeight(true);
		});

		$('.services-2 .service').each(function(){
			heightServices2 += $(this).outerHeight(true);
		});

		var heightTitre1 = $('.services-1 h2').outerHeight(true);
		var heightTitre2 = $('.services-2 h2').outerHeight(true);

		$('.services-1').css('height', heightServices1 + heightTitre1);
		$('.services-2').css('height', heightServices2 + heightTitre2);
	}
}

$(document).ready(function(){
	"use strict";
	$('.service h3.test').css({opacity: 0});

	$('.service i').hover(
		function(){
			$(this).parent().children('h3.test').stop().fadeTo(200, 1);
		},
		function(){
			$(this).parent().children('h3.test').stop().fadeTo(200, 0);
		}
	);
});

$(document).ready(setServices);
$(window).resize(setServices);