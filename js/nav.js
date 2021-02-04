// JS POUR LA NAVIGATION

$(document).ready(function(){

// JS pour fonctionalités
	
        //Afficher les bulles et les sous-menu au survol (ordinateur)
    
    if($(window).width() > 1366){

        $('.nav .lien1').hover(
            function(){
                $('.bulle_1').stop().animate({opacity: 1, right: "110px"}, 300);
            },
            function(){
                $('.bulle_1').stop().animate({opacity: 0, right: "90px"}, 300);
            }
        );

        $('.nav .lien2, .lien2-1, .lien2-2, .lien2-3').hover(
            function(){
                $('.bulle_2').stop().animate({opacity: 1, right: "310px"}, 300);
            },
            function(){
                $('.bulle_2').stop().animate({opacity: 0, right: "290px"}, 300);
            }
        );

        $('.lien2-1').hover(
            function(){
                $('.bulle_2-1').stop().animate({opacity: 1, top: "255px"}, 300);
            },
            function(){
                $('.bulle_2-1').stop().animate({opacity: 0, top: "235px"}, 300);
            }
        );

        $('.lien2-2').hover(
            function(){
                $('.bulle_2-2').stop().animate({opacity: 1, top: "255px"}, 300);
            },
            function(){
                $('.bulle_2-2').stop().animate({opacity: 0, top: "300px"}, 300);
            }
        );

        $('.lien2-3').hover(
            function(){
                $('.bulle_2-3').stop().animate({opacity: 1, top: "255px"}, 300);
            },
            function(){
                $('.bulle_2-3').stop().animate({opacity: 0, top: "300px"}, 300);
            }
        );

        $('.nav .lien3').hover(
            function(){
                $('.bulle_3').stop().animate({opacity: 1, right: "110px"}, 300);
            },
            function(){
                $('.bulle_3').stop().animate({opacity: 0, right: "90px"}, 300);
            }
        );

        $('.nav .lien4').hover(
            function(){
                $('.bulle_4').stop().animate({opacity: 1, right: "110px"}, 300);
            },
            function(){
                $('.bulle_4').stop().animate({opacity: 0, right: "90px"}, 300);
            }
        );

        $('.nav .lien5').hover(
            function(){
                $('.bulle_5').stop().animate({opacity: 1, right: "110px"}, 300);
            },
            function(){
                $('.bulle_5').stop().animate({opacity: 0, right: "90px"}, 300);
            }
        );	

        $('.lien2, .lien2-1, .lien2-2, .lien2-3').hover(
            function(){
                $('.sous-liens').stop().show();
                $('.lien2-1').stop().animate({right: "90px"}, 100, 'swing');
                $('.lien2-2').stop().animate({right: "150px"}, 100, 'swing');
                $('.lien2-3').stop().animate({right: "210px"}, 100, 'swing');
            },
            function(){
                $('.sous-liens').stop().hide(300);
                $('.lien2-1').stop().animate({right: "20px"}, 100);
                $('.lien2-2').stop().animate({right: "20px"}, 100);
                $('.lien2-3').stop().animate({right: "20px"}, 100);
            }
        );
    }
	
    //Afficher le sous-menu en cliquant (mobiles)
	$('.nav-mobile .lien2').click(
		function(evt){
			evt.stopPropagation();
			$('.nav-mobile').toggleClass('sous-menu-ouvert');
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
			if($('.lien2-0-mobile').css('right') === "20px"){
				$('.lien2-0-mobile').animate({right: "90px"}, 300);
				$('.lien2-1-mobile').animate({right: "134px"}, 300);
				$('.lien2-2-mobile').animate({right: "178px"}, 300);
				$('.lien2-3-mobile').animate({right: "222px"}, 300);
			}
			else{
				$('.lien2-0-mobile').animate({right: "20px"}, 300);
				$('.lien2-1-mobile').animate({right: "20px"}, 300);
				$('.lien2-2-mobile').animate({right: "20px"}, 300);
				$('.lien2-3-mobile').animate({right: "20px"}, 300);
			}
			if($('.bulle_2-0-mobile').css('opacity') === "0"){
				$('.bulle_2-0-mobile').animate({opacity: 1}, 300);
				$('.bulle_2-1-mobile').animate({opacity: 1}, 300);
				$('.bulle_2-2-mobile').animate({opacity: 1}, 300);
				$('.bulle_2-3-mobile').animate({opacity: 1}, 300);
			}
			else{
				$('.bulle_2-0-mobile').animate({opacity: 0}, 300);
				$('.bulle_2-1-mobile').animate({opacity: 0}, 300);
				$('.bulle_2-2-mobile').animate({opacity: 0}, 300);
				$('.bulle_2-3-mobile').animate({opacity: 0}, 300);
			}
			if($('.bulle_2-mobile').css('right') === '110px'){
				$('.bulle_2-mobile').animate({
					right: '285px', 
					fontSize: '14px',
					padding: '7px',
					top: "185px"
				});
			}
			else if($('.bulle_2-mobile').css('right') === '285px'){
				$('.bulle_2-mobile').animate({
					right: '110px', 
					fontSize: '16px',
					padding: '10px',
					top: "182px"
				});
			}
		}
	);
    
    $('.lien2').click(function(evt){evt.stopPropagation();});
	
//JS pour animations
	
	//Ouvrir/Fermer sur ordinateur
	
    	//Ouvrir/fermer en cliquant sur le bouton
	$('.nav i.menu').click(function(evt){
		evt.stopPropagation();
        if($('.nav').hasClass("fermee")){
           	$('.nav').removeClass("fermee", 600, "easeOutElastic");
			$('.bulle_1, .bulle_2, .bulle_2-1, .bulle_2-2, .bulle_2-3, .bulle_3, .bulle_4, .bulle_5').show();
		}
        else{
           	$('.nav').addClass("fermee", 600, "easeOutBounce");
		   	$('.bulle_1, .bulle_2, .bulle_2-1, .bulle_2-2, .bulle_2-3, .bulle_3, .bulle_4, .bulle_5').hide();
		}
	});
	
        //Fermer en cliquant à-côté
	$(document).click(function(){
		$('.nav').addClass("fermee", 600, "easeOutBounce");
		$('.bulle_1, .bulle_2, .bulle_2-1, .bulle_2-2, .bulle_2-3, .bulle_3, .bulle_4, .bulle_5').hide();
	});
	
    //Ouvrir/fermer sur mobile
    
    	//Ouvrir/fermer en cliquant sur le bouton
	
	$('.nav-mobile i.menu').click(function(evt){
		evt.stopPropagation();
        if($('.nav-mobile').hasClass("fermee")){
            $('.nav-mobile i.menu').animate({color: "#dddddd"}, 300);	
        } 
        else{
            $('.nav-mobile i.menu').animate({color: "black"}, 300);
        }
		if($('.nav-mobile').hasClass("sous-menu-ouvert")){
			$('.lien2-0-mobile').animate({right: "20px"}, 100, function(){
				$('.lien2-0-mobile').hide();
			});
			$('.lien2-1-mobile').animate({right: "20px"}, 100, function(){
				$('.lien2-1-mobile').hide();
			});
			$('.lien2-2-mobile').animate({right: "20px"}, 100, function(){
				$('.lien2-2-mobile').hide();
			});
			$('.lien2-3-mobile').animate({right: "20px"}, 100, function(){
				$('.lien2-3-mobile').hide();
			});
			$('.bulle_2-0-mobile').css('opacity', 0);
			$('.bulle_2-1-mobile').css('opacity', 0);
			$('.bulle_2-2-mobile').css('opacity', 0);
			$('.bulle_2-3-mobile').css('opacity', 0);
			$('.bulle_2-mobile').css('opacity', "0");
			$('.nav-mobile').removeClass("sous-menu-ouvert");
			$('.bulle_2-mobile').animate({
				right: '110px',
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
		
        if(!$('.nav-mobile').hasClass("fermee")){
            $('.nav-mobile').addClass("fermee", 600, "easeOutBounce", function(){
				$('.bulle_1-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
					$('.bulle_2-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
						$('.bulle_3-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
							$('.bulle_4-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
								$('.bulle_5-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
									$('.bulle_1-mobile, .bulle_2-mobile, .bulle_2-0-mobile, .bulle_2-1-mobile, .bulle_2-2-mobile, .bulle_2-3-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile').hide();
								});
							});
						});
					});
				});
            });
        }  
        else{
            $('.nav-mobile').removeClass("fermee", 600, "easeOutElastic", function(){
				$('.bulle_1-mobile, .bulle_2-mobile, .bulle_2-0-mobile, .bulle_2-1-mobile, .bulle_2-2-mobile, .bulle_2-3-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile').show();
				$('.lien2-0-mobile').show();
				$('.lien2-1-mobile').show();
				$('.lien2-2-mobile').show();
				$('.lien2-3-mobile').show();
				$('.bulle_1-mobile').stop().animate({opacity: 1, right: "110px"}, 150, function(){
					$('.bulle_2-mobile').stop().animate({opacity: 1, right: "110px"}, 150, function(){
						$('.bulle_3-mobile').stop().animate({opacity: 1, right: "110px"}, 150, function(){
							$('.bulle_4-mobile').stop().animate({opacity: 1, right: "110px"}, 150, function(){
									$('.bulle_5-mobile').stop().animate({opacity: 1, right: "110px"}, 150);
							});
						});
					});
				});
			});
		}   

        //Fermer en cliquant à-côté
    
        $(document).click(function(){
			$('.nav-mobile i.menu').animate({color: "black"}, 300);
            if($('.nav-mobile').hasClass("sous-menu-ouvert")){
                $('.lien2-0-mobile').animate({right: "20px"}, 100, function(){
                    $('.lien2-0-mobile').hide();
                });
                $('.lien2-1-mobile').animate({right: "20px"}, 100, function(){
                    $('.lien2-1-mobile').hide();
                });
                $('.lien2-2-mobile').animate({right: "20px"}, 100, function(){
                    $('.lien2-2-mobile').hide();
                });
                $('.lien2-3-mobile').animate({right: "20px"}, 100, function(){
                    $('.lien2-3-mobile').hide();
                });
                $('.bulle_2-0-mobile').css('opacity', 0);
                $('.bulle_2-1-mobile').css('opacity', 0);
                $('.bulle_2-2-mobile').css('opacity', 0);
                $('.bulle_2-3-mobile').css('opacity', 0);
                $('.bulle_2-mobile').css('opacity', "0");
                $('.nav-mobile').removeClass("sous-menu-ouvert");
                $('.bulle_2-mobile').animate({
                    right: '110px',
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
            $('.nav-mobile').addClass("fermee", 600, "easeOutBounce", function(){
                $('.bulle_1-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
                    $('.bulle_2-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
                        $('.bulle_3-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
                            $('.bulle_4-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
                                $('.bulle_5-mobile').stop().animate({opacity: 0, right: "100px"}, 150, function(){
									$('.bulle_1-mobile, .bulle_2-mobile, .bulle_2-0-mobile, .bulle_2-1-mobile, .bulle_2-2-mobile, .bulle_2-3-mobile, .bulle_3-mobile, .bulle_4-mobile, .bulle_5-mobile').hide();
								});
                            });
                        });
                    });
                });
            });
	    });
    });
});