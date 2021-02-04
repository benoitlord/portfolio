// JS POUR LA NAVIGATION

//VARIABLES

	//Desktop
var bulle_Ouvert_Right = "110px";
var bulle_Ferme_Right = "90px";

var bulle_2_Ouvert_Right = "310px";
var bulle_2_Ferme_Right = "290px";

var bulle_sousLienOuvertTop= "255px";
var bulle_sousLienFermeTop = "235px";

var lien2_1_Ouvert_Right = "90px";
var lien2_2_Ouvert_Right = "150px";
var lien2_3_Ouvert_Right = "210px";
var sousLien_Ferme_Right = "20px";

	//Mobile
var lien2_0_Ouvert_Right_Mobile = "90px";
var lien2_1_Ouvert_Right_Mobile = "134px";
var lien2_2_Ouvert_Right_Mobile = "178px";
var lien2_3_Ouvert_Right_Mobile = "220px";
var sousLien_Ferme_Right_Mobile = "20px";

var bulle_Ouvert_RightMobile = "110px";
var bulle_Ferme_RightMobile = "100px";

var bulle_2_sousMenuOuvert_RightMobile = "285px";


var toutOuvert;
$(document).ready(function(){
	"use strict";
	
	toutOuvert = false;
	
	//DESKTOP
	
		//Ouvrir/Fermer sur ordinateur
	
    		//Ouvrir/fermer en cliquant sur le bouton
	$('.nav i.menu').click(function(evt){
		evt.stopPropagation();
        if($('.nav').hasClass("fermee")){
           	ouvrirDesktop();
		}
        else{
           	fermerDesktop();
		}
	});
	
    		//Fermer en cliquant à-côté
	$(document).one("click", fermerDesktop);
	
		//Fermer sous-menu si clique sur un lien
	$('.lien2-1, .lien2-2, .lien2-3').click(function(evt){
		evt.stopPropagation();
		
		$('.sous-liens').stop().hide(50).removeClass("shadow").animate({width: "0px"}, 300);
		$('.lien2-1').mouseout().stop().animate({right: sousLien_Ferme_Right}, 50);
		$('.lien2-2').mouseout().stop().animate({right: sousLien_Ferme_Right}, 50);
		$('.lien2-3').mouseout().stop().animate({right: sousLien_Ferme_Right}, 50);
	});
	
    	//Afficher les bulles et les sous-menu au survol
    if($(window).width() > 1366){
        hoverBulles("1");
		
		$('.nav .lien2, .lien2-1, .lien2-2, .lien2-3, .sous-liens').hover(
            function(){
                $('.bulle_2').stop().animate({opacity: 1, right: bulle_2_Ouvert_Right}, 300);
            },
            function(){
                $('.bulle_2').stop().animate({opacity: 0, right: bulle_2_Ferme_Right}, 300);
            }
        );
		hoverBullesSousLiens("2-1");
        hoverBullesSousLiens("2-2");
        hoverBullesSousLiens("2-3");
		
		hoverBulles("3");
        hoverBulles("4");
		hoverBulles("5");

        $('.lien2, .lien2-1, .lien2-2, .lien2-3, .sous-liens').hover(
            function(){
                $('.sous-liens').stop().show();
				//$('.sous-liens').addClass("shadow");
				//$('.sous-liens').animate({width: "264px"}, 300);
                $('.lien2-1').stop().animate({right: lien2_1_Ouvert_Right}, 50, 'swing');
                $('.lien2-2').stop().animate({right: lien2_2_Ouvert_Right}, 50, 'swing');
                $('.lien2-3').stop().animate({right: lien2_3_Ouvert_Right}, 50, 'swing');
            },
            function(){
                $('.sous-liens').stop().hide(300)/*.removeClass("shadow").animate({width: "0px"}, 300)*/;
                $('.lien2-1').stop().animate({right: sousLien_Ferme_Right}, 50);
                $('.lien2-2').stop().animate({right: sousLien_Ferme_Right}, 50);
                $('.lien2-3').stop().animate({right: sousLien_Ferme_Right}, 50);
            }
        );
	}
	
	//MOBILE
	
		//Ouvrir/fermer sur mobile
    
    		//Ouvrir/fermer en cliquant sur le bouton
	
	$('.nav-mobile i.menu').click(function(evt){
		evt.stopPropagation();
		
        if($('.nav-mobile').hasClass("fermee")){
            ouvrirMobile();
        }  
        else{
            fermerMobile();
		} 
	});

        	//Fermer en cliquant à-côté
    $(document).one("click", fermerMobile);
	
		//Afficher le sous-menu en cliquant (mobiles)
	$('.nav-mobile .lien2').click(
		function(evt){
			evt.stopPropagation();
			if(toutOuvert){
				$('.nav-mobile').toggleClass('sous-menu-ouvert');
				
				if($(".sous-liens-mobile").css("display") === "none"){
					$(".sous-liens-mobile").show();
					/*setTimeout(function(){
						$(".sous-liens-mobile").toggleClass("shadow");
					}, 300);*/
				}
				/*else{
					$(".sous-liens-mobile").toggleClass("shadow");
				}*/
				
				if($('.bulle_1-mobile').css('opacity') === "1"){
					$('.bulle_1-mobile').animate({opacity:0}, 300);
					$('.bulle_3-mobile').animate({opacity:0}, 300);
					$('.bulle_4-mobile').animate({opacity:0}, 300);
					$('.bulle_5-mobile').animate({opacity:0}, 300);
				}
				else if($('.bulle_1-mobile').css('opacity') === "0"){
					$('.bulle_1-mobile').animate({opacity:1}, 300);
					$('.bulle_3-mobile').animate({opacity:1}, 300);
					$('.bulle_4-mobile').animate({opacity:1}, 300);
					$('.bulle_5-mobile').animate({opacity:1}, 300);
				}
				if($('.lien2-0-mobile').css('right') === sousLien_Ferme_Right_Mobile){
					$('.lien2-0-mobile').animate({right: lien2_0_Ouvert_Right_Mobile}, 300);
					$('.lien2-1-mobile').animate({right: lien2_1_Ouvert_Right_Mobile}, 300);
					$('.lien2-2-mobile').animate({right: lien2_2_Ouvert_Right_Mobile}, 300);
					$('.lien2-3-mobile').animate({right: lien2_3_Ouvert_Right_Mobile}, 300);
				}
				else if($('.lien2-0-mobile').css('right') === lien2_0_Ouvert_Right_Mobile){
					$('.lien2-0-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 300);
					$('.lien2-1-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 300);
					$('.lien2-2-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 300);
					$('.lien2-3-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 300);
				}
				if($('.bulle_2-0-mobile').css('opacity') === "0"){
					$('.bulle_2-0-mobile').animate({opacity: 1}, 300);
					$('.bulle_2-1-mobile').animate({opacity: 1}, 300);
					$('.bulle_2-2-mobile').animate({opacity: 1}, 300);
					$('.bulle_2-3-mobile').animate({opacity: 1}, 300);
				}
				else if($('.bulle_2-0-mobile').css('opacity') === "1"){
					$('.bulle_2-0-mobile').animate({opacity: 0}, 300);
					$('.bulle_2-1-mobile').animate({opacity: 0}, 300);
					$('.bulle_2-2-mobile').animate({opacity: 0}, 300);
					$('.bulle_2-3-mobile').animate({opacity: 0}, 300);
				}
				if($('.bulle_2-mobile').css('right') === bulle_Ouvert_RightMobile){
					$('.bulle_2-mobile').animate({
						right: bulle_2_sousMenuOuvert_RightMobile, 
						fontSize: '14px',
						padding: '7px',
						top: "185px"
					});
				}
				else if($('.bulle_2-mobile').css('right') === bulle_2_sousMenuOuvert_RightMobile){
					$('.bulle_2-mobile').animate({
						right: bulle_Ouvert_RightMobile, 
						fontSize: '16px',
						padding: '10px',
						top: "182px"
					}, function(){
						if($(".sous-liens-mobile").css("display") !== "none"){
							$(".sous-liens-mobile").hide();
						}
					});
				}
			}
		}
	);
    $('.lien2').click(function(evt){evt.stopPropagation();});
});

//FONCTIONS

function ouvrirDesktop(){
	"use strict";
	
	$('.nav').removeClass("fermee", 600, "easeOutElastic");
	$('.bulle_1, .bulle_2, .bulle_2-1, .bulle_2-2, .bulle_2-3, .bulle_3, .bulle_4, .bulle_5').show();
}

function fermerDesktop(){
	"use strict";
	
	$('.nav').addClass("fermee", 600, "easeOutBounce");
	$('.bulle_1, .bulle_2, .bulle_2-1, .bulle_2-2, .bulle_2-3, .bulle_3, .bulle_4, .bulle_5').hide();
	
	$(document).one("click", fermerDesktop);
}

function ouvrirMobile(){
	"use strict";
	
	$('.nav-mobile i.menu').animate({color: "#dddddd"}, 300);
	
	fermerSousMenuMobile();
	
	$('.nav-mobile').removeClass("fermee", 600, "easeOutElastic", function(){
		$('.bulle_1-mobile, .bulle_2-mobile, .bulle_2-0-mobile, .bulle_2-1-mobile, .bulle_2-2-mobile, .bulle_2-3-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile').show();
		
		$('.lien2-0-mobile, .lien2-1-mobile, .lien2-2-mobile, .lien2-3-mobile').show();

		$(".bulle_1-mobile, .bulle_2-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile").each(function(index){
			$(this).delay(100*index).animate({opacity: 1, right: bulle_Ouvert_RightMobile}, 150);
		}).promise().done(function(){ toutOuvert = true; });
	});
}

function fermerMobile(){
	"use strict";
	
	$('.nav-mobile i.menu').animate({color: "black"}, 300);
	
	fermerSousMenuMobile();
	
	$('.nav-mobile').addClass("fermee", 600, "easeOutBounce", function(){
		$(".bulle_1-mobile, .bulle_2-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile").each(function(index){
			$(this).delay(100*index).animate({opacity: 0, right: bulle_Ferme_RightMobile}, 150);
		}).promise().done(function(){
			$('.bulle_1-mobile, .bulle_2-mobile, .bulle_2-0-mobile, .bulle_2-1-mobile, .bulle_2-2-mobile, .bulle_2-3-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile').hide(function(){
				toutOuvert = false;
			});
		});
	});
	
	$(document).one("click", fermerMobile);
}

function fermerSousMenuMobile(){
	"use strict";
	
	if($('.nav-mobile').hasClass("sous-menu-ouvert")){
		if($(".sous-liens-mobile").css("display") !== "none"){
			$(".sous-liens-mobile").removeClass("shadow", function(){
				$(this).hide();
			});
		}
		$('.lien2-0-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 100, function(){
			$('.lien2-0-mobile').hide();
		});
		$('.lien2-1-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 100, function(){
			$('.lien2-1-mobile').hide();
		});
		$('.lien2-2-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 100, function(){
			$('.lien2-2-mobile').hide();
		});
		$('.lien2-3-mobile').animate({right: sousLien_Ferme_Right_Mobile}, 100, function(){
			$('.lien2-3-mobile').hide();
		});
		$('.bulle_2-0-mobile').css('opacity', 0);
		$('.bulle_2-1-mobile').css('opacity', 0);
		$('.bulle_2-2-mobile').css('opacity', 0);
		$('.bulle_2-3-mobile').css('opacity', 0);
		$('.bulle_2-mobile').css('opacity', 0);
		$('.nav-mobile').removeClass("sous-menu-ouvert");
		$('.bulle_2-mobile').animate({
			right: bulle_Ouvert_RightMobile,
			fontSize: '16px',
			padding: '10px',
			top: "182px"
		}, 100);
	}
	else{
		$('.lien2-0-mobile').hide();
		$('.lien2-1-mobile').hide();
		$('.lien2-2-mobile').hide();
		$('.lien2-3-mobile').hide();
	}
}

function hoverBulles(num){
	"use strict";
	
	$('.nav .lien' + num).hover(
		function(){
			$('.bulle_' + num).stop().animate({opacity: 1, right: bulle_Ouvert_Right}, 300);
		},
		function(){
			$('.bulle_' + num).stop().animate({opacity: 0, right: bulle_Ferme_Right}, 300);
		}
	);
}

function hoverBullesSousLiens(num){
	"use strict";
	
	$('.lien' + num).hover(
		function(){
			$('.bulle_' + num).stop().animate({opacity: 1, top: bulle_sousLienOuvertTop}, 300);
		},
		function(){
			$('.bulle_' + num).stop().animate({opacity: 0, top: bulle_sousLienFermeTop}, 300);
		}
	);
}