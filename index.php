<?php
	session_start();
	ob_start();

	include("include/add_lang.php");
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php echo $_GET["lang"] == "fr" ? "Benoit Lord, développeur web et designer graphique" : ($_GET["lang"] == "en" ? "Benoit Lord, web developer and graphic designer" : ""); ?></title>

	<?php 
		include("include/links.php");
	?>
	
	<!-- Pour slider -->
	<script src="js/slider.js"></script>
	
	<!-- Pour calls to action -->
	<script src="js/calls_to_action.js"></script>
</head>
<body>
    <!-- Contenu de la page -->
    <div class="page-content fadedout">
		
		<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a> 
        
        <!-- Slider -->
        <div id="slider">
  			<span class="control_next"><i class="fa fa-chevron-right"></i></span>
  			<span class="control_prev"><i class="fa fa-chevron-left"></i></span>
  			<ul>
    			<li>
					<span class="description-slide">
						<?php echo $_GET["lang"] == "fr" ? "Programmeur" : ($_GET["lang"] == "en" ? "Programmer" : ""); ?>
						<a class="bouton desktop" href="portfolio.php" style="float: right;">
							<?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right"></i>
						</a>
						<a class="bouton tablet" href="portfolio.php" style="float: right;">
							<?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right"></i>
						</a>
					</span>
					<img src="img/code-slider-desktop.png" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?>">
					<img src="img/code-slider-tablet.png" class="tablet-slider" alt="<?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?>">
					<img src="img/code-slider-phone.png" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?>">
				</li>
    			<li>
					<span class="description-slide">
						<?php echo $_GET["lang"] == "fr" ? "Designer web" : ($_GET["lang"] == "en" ? "Web Designer" : ""); ?>
						<a class="bouton desktop" href="portfolio.php" style="float: right;">
							<?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right"></i>
						</a>
						<a class="bouton tablet" href="portfolio.php" style="float: right;">
							<?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right"></i>
						</a>
					</span>
					<img src="img/design-slider-desktop.png" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Design web" : ($_GET["lang"] == "en" ? "Web Design" : ""); ?>">
					<img src="img/design-slider-tablet.png" class="tablet-slider" alt="<?php echo $_GET["lang"] == "fr" ? "Design web" : ($_GET["lang"] == "en" ? "Web Design" : ""); ?>">
					<img src="img/design-slider-phone.png" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Design web" : ($_GET["lang"] == "en" ? "Web Design" : ""); ?>">
				</li>
    			<li>
					<span class="description-slide">
						<?php echo $_GET["lang"] == "fr" ? "Designer graphique" : ($_GET["lang"] == "en" ? "Graphic Designer" : ""); ?>
						<a class="bouton desktop" href="portfolio.php" style="float: right;">
							<?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right"></i>
						</a>
						<a class="bouton tablet" href="portfolio.php" style="float: right;">
							<?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right"></i>
						</a>
					</span>
					<img src="img/graphic-design-slider-desktop.png" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Design graphique" : ($_GET["lang"] == "en" ? "Graphic Design" : ""); ?>">
					<img src="img/graphic-design-slider-tablet.png" class="tablet-slider" alt="<?php echo $_GET["lang"] == "fr" ? "Design graphique" : ($_GET["lang"] == "en" ? "Graphic Design" : ""); ?>">
					<img src="img/graphic-design-slider-phone.png" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Design graphique" : ($_GET["lang"] == "en" ? "Graphic Design" : ""); ?>">
				</li>
  			</ul>  
		</div>
		<div class="scroll scroll-1">
			<div class="arrow arrow-1"></div>
			<div class="arrow arrow-2"></div>
			<div class="arrow arrow-3"></div>
		</div>
		<div class="scroll scroll-2">
			<div class="arrow arrow-1"></div>
			<div class="arrow arrow-2"></div>
			<div class="arrow arrow-3"></div>
		</div>
		
		<!-- A propos -->
       	<div class="a-propos">
      		<!-- Partie gauche -->
       		<div class="texte gauche">
				<h1>Benoit Lord</h1>
				<h2 class="sous-titre"><?php echo $_GET["lang"] == "fr" ? "Développeur web et designer graphique" : ($_GET["lang"] == "en" ? "Web developer and graphic designer" : ""); ?></h2>
				<p>
					<?php echo $_GET["lang"] == "fr" ? "Grâce à ma formation en Techniques d'Intégration Multimédia, je suis devenu un intégrateur multimédia aguerri et j'ai ainsi découvert ma passion pour le développement web et le design graphique ainsi que pour la programmation. " : ($_GET["lang"] == "en" ? "Thanks to my education in Multimedia Integration Technics, I became a well experienced multimedia integrator and discovered my passion for web development and graphic design as well as for programming." : ""); ?>
				</p>
        		<p>
					<?php echo $_GET["lang"] == "fr" ? "Ceci est mon portfolio, que j'ai programmé moi-même, grâce à mes connaissances dans les différents langages de programmation. Il est composé d'une bonne dose de HTML, de CSS et de JavaScript, avec une bonne dose de PHP, le tout donnant un site web dynamique, adapté aux différentes plateformes et au dernières saveurs du design web. Lancez-vous dedans maintenant en cliquant sur l'un des liens ci-dessous ou en utilisant le menu dans le coin supérieur droit." : ($_GET["lang"] == "en" ? "Here you can see my portfolio, which I programmed myself using my knowledge in different programming languages. It is a mix of HTML, CSS and JavaScript, with a dose of PHP, resulting in a dynamic, responsive website at the edge of the latest web design trends. Jump in now by clicking one of the following links or by using the menu in the top-right corner." : ""); ?>
        		</p>
				<p>
					<?php echo $_GET["lang"] == "fr" ? "Pour être au courant de mes nouveaux projets, " : ($_GET["lang"] == "en" ? "To be up to date on my new projects, " : ""); ?>
					<a href="https://www.behance.net/benoitlord98" class="bouton nouvelonglet" target="_blank"><?php echo $_GET["lang"] == "fr" ? "suivez-moi sur Behance!" : ($_GET["lang"] == "en" ? "follow me on Behance!" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
				</p>
       		</div>
       		
       		<!-- Partie droite -->
       		<div class="droite">
       			<img src="img/moi_vecteur-desktop.png" class="desktop" alt="Photo de moi">
       			<img src="img/moi_vecteur-tablet.png" class="tablet" alt="Photo de moi">
       			<img src="img/moi_vecteur-phone.png" class="phone" alt="Photo de moi">
       		</div>
       	</div>
      	
      	<!-- Calls to action -->
       	<div class="calls-to-action">
       		<div class="call-to-action">
        		<div class="haut">
					<h2>Portfolio</h2>
				</div>
        		<div class="bas">
					<p><?php echo $_GET["lang"] == "fr" ? "Venez voir mes différentes réalisations sur la page Portfolio." : ($_GET["lang"] == "en" ? "Come see my projects on the Portfolio page." : ""); ?></p>
					<a href="portfolio.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
				</div>
			</div>
			<div class="call-to-action fonce fonce-tablet">
				<div class="haut">
					<h2><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact Me" : ""); ?></h2>
				</div>
				<div class="bas">
					<p><?php echo $_GET["lang"] == "fr" ? "Pour m'envoyer un message, venez sur la page Me contacter." : ($_GET["lang"] == "en" ? "To send me a message, use the Contact Me page." : ""); ?></p>
					<a href="me-contacter.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact Me" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
				</div>
			</div>
			<div class="call-to-action fonce-tablet">
				<div class="haut">
					<h2><?php echo $_GET["lang"] == "fr" ? "Mes services" : ($_GET["lang"] == "en" ? "My Services" : ""); ?></h2>
				</div>
				<div class="bas">
					<p><?php echo $_GET["lang"] == "fr" ? "Pour voir ce que je vous offre, visitez la page de mes services." : ($_GET["lang"] == "en" ? "to discover what I can offer you, visit the My Services page." : ""); ?></p>
					<a href="services.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Découvrir mes services" : ($_GET["lang"] == "en" ? "Discover my services" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
				</div>
			</div>
			<div class="call-to-action fonce">
				<div class="haut">
					<h2><?php echo $_GET["lang"] == "fr" ? "Mes compétences" : ($_GET["lang"] == "en" ? "My Skills" : ""); ?></h2>
				</div>
				<div class="bas">
					<p><?php echo $_GET["lang"] == "fr" ? "Voyez ce que je peux faire en allant sur ma page Mes compétences." : ($_GET["lang"] == "en" ? "See what I can do by going to the My Skills page." : ""); ?></p>
					<a href="competences.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Voir mes compétences" : ($_GET["lang"] == "en" ? "Learn about my skills" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
				</div>
			</div>
       </div>
	</div>
   
	<?php
		include("include/footer.php");
		include("include/language_toggle.php");
		include("include/loader.php");
    	include("include/nav.php");
		include("include/bouton_haut.php");
	?>
</body>
</html>
