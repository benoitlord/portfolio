// JS POUR LE SITE

$(window).bind("pageshow", function(event) {
    if (event.originalEvent.persisted) {
        window.location.reload();
    }
});

$(document).ready(function(){
	    
	// Transition entre pages
	
	// Fade in quand page load
    $(".page-content").animate({opacity: 1, right: '0px'}, 500);
	
    // Fade out quand clique sur lien
    $('a').click(function(e){
		console.log($(this));
		var attr = $(this).attr("download");
		console.log(attr);
		console.log($(this).hasClass("nouvelonglet"));
		if((typeof attr === typeof undefined || attr === false) && !$(this).hasClass("nouvelonglet")){
			var redirect = $(this).attr('href');
			e.preventDefault();
			$('.page-content, footer').animate({opacity: 0, right: '20px'}, 500, function(){
				document.location.href = redirect;
			});
		}
    });
	
	//Boutons
	
	$(".bouton").hover(
	function(){
		console.log("test");
		$(this).children(".fa.fleche").show("blind", {direction: "left"}, 200);
	},
	function(){
		$(this).children(".fa.fleche").hide("blind", {direction: "left"}, 200);
	});
	
	$("button[type='submit']").hover(
	function(){
		console.log("test");
		$(this).children(".fa.fleche").show("blind", {direction: "left"}, 200);
	},
	function(){
		$(this).children(".fa.fleche").hide("blind", {direction: "left"}, 200);
	});
	
	//Slider
	
		// Pour changer automatiquement les images
	setInterval(function () {
        moveRight();
    }, 5000);
	
  		// Variables pour les dimensions des différents éléments
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
		// Pour régler es dimensions des éléments
	$('#slider').css({ width: slideWidth, height: slideHeight });
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
		// Pour changer la taille du slider lorsqu'on redimensionne la page 
	$(window).resize(function(){
		slideCount = $('#slider ul li').length;
		slideWidth = $('#slider ul li').width();
		slideHeight = $('#slider ul li').height();
		sliderUlWidth = slideCount * slideWidth;
		
		$('#slider').css({ width: slideWidth, height: slideHeight });
		$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	});
	
		// Pour placer les images à la bonne place
    $('#slider ul li:last-child').prependTo('#slider ul');

		// Fonction pour changer d'image vers la gauche
    function moveLeft() {
        $('#slider ul').stop().animate({
            left: + slideWidth
        }, 800, "easeInOutQuint", function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    }

		// Fonction pour changer d'image vers la droite
    function moveRight() {
        $('#slider ul').stop().animate({
            left: - slideWidth
        }, 800, "easeInOutQuint", function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    }

		// Pour changer d'image vers la gauche
    $('span.control_prev').click(function () {
        moveLeft();
    });

		// Pour changer d'image vers la droite
    $('span.control_next').click(function () {
        moveRight();
    });  
	
	//Call to action
	
		// Pour régler la largeur des call to action selon la plateforme
	var widthCallsToAction = $('.calls-to-action').width();
	
		// Ordinateur
		if($(window).width() > 1365){
			$('.call-to-action').css('width', widthCallsToAction/4-80);
			$('.calls-to-action').css('height', 340);
		}
	
		// Tablette
		else if ($(window).width() > 667){
			$('.call-to-action').css('width', widthCallsToAction/2-80);	
			$('.calls-to-action').css('height', 680);
		}
	
		// Téléphone
		else{
			$('.call-to-action').css('width', widthCallsToAction-80);
			$('.calls-to-action').css('height', 1320);
		}
	
		// Pour redimensionner les calls to action lorsqu'on redimensionne la page
	$(window).resize(function(){
		widthCallsToAction = $('.calls-to-action').width();
		if($(window).width() > 1365){
			$('.call-to-action').css('width', widthCallsToAction/4-80);
			$('.calls-to-action').css('height', 340);
		}
		else if ($(window).width() > 667){
			$('.call-to-action').css('width', widthCallsToAction/2-80);	
			$('.calls-to-action').css('height', 680);
		}
		else{
			$('.call-to-action').css('width', widthCallsToAction-80);
			$('.calls-to-action').css('height', 1320);
		}
	});
	
	// À propos (permet de donner au div à propos la même hauteur que son contenu)
	
	var boutons = $('.a-propos .bouton').height();
	$('.a-propos .texte').css('height', $('.a-propos .texte').height() + boutons + 15);
	
	var texte = $('.a-propos .texte').height();
	var total;
	
	if($(window).width() > 1365){
		total = 600;
	}
	else if ($(window).width() > 667){
		total = texte+500;
	}
	else{
		total = texte+450;
	}
	$(".a-propos").css('height', total); 
	
	// Refresh la hauteur lorsqu'on redimensionne la page
	$(window).resize(function(){
		boutons = $('.a-propos .bouton').height();
		$('.a-propos .texte').css('height', $('.a-propos .texte').height() + boutons + 15);
		texte = $('.a-propos .texte').height();

		if($(window).width() > 1365){
			total= 600;
		}
		else if ($(window).width() > 667){
			total = texte+500;
		}
		else{
			total = texte+450;
		}
		$(".a-propos").css('height', total); 
	});
	
	//Services (permet de donner aux divs des services la même hauteur que leur contenu)
	
	var widthServices = $('.services-1').width();
	var heightService;
	if($(window).width() > 1365){
		$('.service').css('width', widthServices/4);
		heightService = $('.service').height();
		$('.services-1').css('height', heightService);
		$('.services-2').css('height', heightService + 250);
	}
	else if ($(window).width() > 667){
		$('.service').css('width', widthServices/2);
		heightService = $('.service').height();
		$('.services-1').css('height', heightService*2);
		$('.services-2').css('height', heightService*2 + 230);
	}
	else{
		$('.service').css('width', widthServices);
		heightService = $('.service').height();
		$('.services-1').css('height', heightService*4);
		$('.services-2').css('height', heightService*4 + 50);
	}
	
	// Refresh la hauteur lorsqu'on redimensionne la page 
	$(window).resize(function(){
		widthServices = $('.services-1').width();
		if($(window).width() > 1365){
			$('.service').css('width', widthServices/4);
			heightService = $('.service').height();
			$('.services-1').css('height', heightService);
			$('.services-2').css('height', heightService + 250);
		}
		else if ($(window).width() > 667){
			$('.service').css('width', widthServices/2);
			heightService = $('.service').height();
			$('.services-1').css('height', heightService*2);
			$('.services-2').css('height', heightService*2 + 230);
		}
		else{
			$('.service').css('width', widthServices);
			heightService = $('.service').height();
			$('.services-1').css('height', heightService*4);
			$('.services-2').css('height', heightService*4 + 50);
		}
	});
	
	// overlay pour la description des projets
	
		// Pour cacher l'overlay ouvert lorsqu'on clique sur un autre
	$('.projet i.fa-times-circle').click(function(){
		$('.projet').hide(300);
	});
	
		// Pour cacher l'overlay ouvert lorsqu'on clique sur le X
	$('.img-gallerie').click(function(){
		$('.projet').hide(300);
	});
	
		// Pour afficher les différents overlays quand on clique sur le projet correspondant 
	$('#section1 .vers-projet1').click(function(){
		$('#section1 .projet1').show(300);
	});
	$('#section1 .vers-projet2').click(function(){
		$('#section1 .projet2').show(300);
	});
	$('#section1 .vers-projet3').click(function(){
		$('#section1 .projet3').show(300);
	});
	$('#section1 .vers-projet4').click(function(){
		$('#section1 .projet4').show(300);
	});
	$('#section1 .vers-projet5').click(function(){
		$('#section1 .projet5').show(300);
	});
	$('#section1 .vers-projet6').click(function(){
		$('#section1 .projet6').show(300);
	});
	$('#section1 .vers-projet7').click(function(){
		$('#section1 .projet7').show(300);
	});
	$('#section1 .vers-projet8').click(function(){
		$('#section1 .projet8').show(300);
	});
	$('#section1 .vers-projet9').click(function(){
		$('#section1 .projet9').show(300);
	});
	$('#section1 .vers-projet10').click(function(){
		$('#section1 .projet10').show(300);
	});
	$('#section1 .vers-projet11').click(function(){
		$('#section1 .projet11').show(300);
	});
	$('#section1 .vers-projet12').click(function(){
		$('#section1 .projet12').show(300);
	});
	
	
	$('#section2 .vers-projet1').click(function(){
		$('#section2 .projet1').show(300);
	});
	$('#section2 .vers-projet2').click(function(){
		$('#section2 .projet2').show(300);
	});
	$('#section2 .vers-projet3').click(function(){
		$('#section2 .projet3').show(300);
	});
	$('#section2 .vers-projet4').click(function(){
		$('#section2 .projet4').show(300);
	});
	$('#section2 .vers-projet5').click(function(){
		$('#section2 .projet5').show(300);
	});
	$('#section2 .vers-projet6').click(function(){
		$('#section2 .projet6').show(300);
	});
	$('#section2 .vers-projet7').click(function(){
		$('#section2 .projet7').show(300);
	});
	$('#section2 .vers-projet8').click(function(){
		$('#section2 .projet8').show(300);
	});
	$('#section2 .vers-projet9').click(function(){
		$('#section2 .projet9').show(300);
	});
	$('#section2 .vers-projet10').click(function(){
		$('#section2 .projet10').show(300);
	});
	$('#section2 .vers-projet11').click(function(){
		$('#section2 .projet11').show(300);
	});
	$('#section2 .vers-projet12').click(function(){
		$('#section2 .projet12').show(300);
	});
	$('#section2 .vers-projet13').click(function(){
		$('#section2 .projet13').show(300);
	});
	$('#section2 .vers-projet14').click(function(){
		$('#section2 .projet14').show(300);
	});
	$('#section2 .vers-projet15').click(function(){
		$('#section2 .projet15').show(300);
	});
	$('#section2 .vers-projet16').click(function(){
		$('#section2 .projet16').show(300);
	});
	$('#section2 .vers-projet17').click(function(){
		$('#section2 .projet17').show(300);
	});
	$('#section2 .vers-projet18').click(function(){
		$('#section2 .projet18').show(300);
	});
	$('#section2 .vers-projet19').click(function(){
		$('#section2 .projet19').show(300);
	});
	$('#section2 .vers-projet20').click(function(){
		$('#section2 .projet20').show(300);
	});
	$('#section2 .vers-projet21').click(function(){
		$('#section2 .projet21').show(300);
	});
	$('#section2 .vers-projet22').click(function(){
		$('#section2 .projet22').show(300);
	});
	$('#section2 .vers-projet23').click(function(){
		$('#section2 .projet23').show(300);
	});
	$('#section2 .vers-projet24').click(function(){
		$('#section2 .projet24').show(300);
	});
	$('#section2 .vers-projet25').click(function(){
		$('#section2 .projet25').show(300);
	});
	$('#section2 .vers-projet26').click(function(){
		$('#section2 .projet26').show(300);
	});
	$('#section2 .vers-projet27').click(function(){
		$('#section2 .projet27').show(300);
	});
	$('#section2 .vers-projet28').click(function(){
		$('#section2 .projet28').show(300);
	});
	$('#section2 .vers-projet29').click(function(){
		$('#section2 .projet29').show(300);
	});
	$('#section2 .vers-projet30').click(function(){
		$('#section2 .projet30').show(300);
	});
	$('#section2 .vers-projet31').click(function(){
		$('#section2 .projet31').show(300);
	});
	$('#section2 .vers-projet32').click(function(){
		$('#section2 .projet32').show(300);
	});
	$('#section2 .vers-projet33').click(function(){
		$('#section2 .projet33').show(300);
	});
	$('#section2 .vers-projet34').click(function(){
		$('#section2 .projet34').show(300);
	});
	
	
	$('#section3 .vers-projet1').click(function(){
		$('#section3 .projet1').show(300);
	});
	$('#section3 .vers-projet2').click(function(){
		$('#section3 .projet2').show(300);
	});
	$('#section3 .vers-projet3').click(function(){
		$('#section3 .projet3').show(300);
	});
	$('#section3 .vers-projet4').click(function(){
		$('#section3 .projet4').show(300);
	});
	$('#section3 .vers-projet5').click(function(){
		$('#section3 .projet5').show(300);
	});
	$('#section3 .vers-projet6').click(function(){
		$('#section3 .projet6').show(300);
	});
	$('#section3 .vers-projet7').click(function(){
		$('#section3 .projet7').show(300);
	});
	$('#section3 .vers-projet8').click(function(){
		$('#section3 .projet8').show(300);
	});
	$('#section3 .vers-projet9').click(function(){
		$('#section3 .projet9').show(300);
	});
	$('#section3 .vers-projet10').click(function(){
		$('#section3 .projet10').show(300);
	});
	$('#section3 .vers-projet11').click(function(){
		$('#section3 .projet11').show(300);
	});
	$('#section3 .vers-projet12').click(function(){
		$('#section3 .projet12').show(300);
	});
	
	// Next et Previous pour gallerie
	
	$('.projet .next').click(function(){
		if($(this).parent().next().hasClass("projet")){
			$(this).parent().hide("drop", {direction: "left"}, 300);
			$(this).parent().next().show("drop", {direction: "right"}, 300);
		}
	});
	
	$('.projet .previous').click(function(){
		if($(this).parent().prev().hasClass("projet")){
			$(this).parent().hide("drop", {direction: "right"}, 300);
			$(this).parent().prev().show("drop", {direction: "left"}, 300);
		}
		
	});
	
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
				$('#bouton-haut').css({bottom: "50px"});
				$('#bouton-haut').animate({right: "0px"});
			}
		}
		else if(off){
			off = false;
			on = true;
			$('#bouton-haut').animate({right: "-55px"});
		}
	});
	
});