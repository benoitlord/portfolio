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
	
	<title>Portfolio - Benoit Lord</title>

	<?php 
		include("include/links.php");
	?>
	
	<!-- Pour slider -->
	<script src="js/slider.js"></script>
	
	<!-- Pour gallerie -->
	<script src="js/gallerie.js"></script>
</head>
<body>
    
    <!-- Contenu de la page -->
    <div class="page-content fadedout">
       
       	<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
        
        <!-- Slider -->
        <div id="slider" class="slider-portfolio">
  			<span class="control_next"><i class="fa fa-chevron-right"></i></span>
  			<span class="control_prev"><i class="fa fa-chevron-left"></i></span>
			<span class="description-slide"><?php echo $_GET["lang"] == "fr" ? "Mes projets" : ($_GET["lang"] == "en" ? "My Projects" : ""); ?></span>
  			<ul>
    			<li><img data-src="img/vision-slider-desktop.jpg" class="desktop" alt="Petite École Vision"><img data-src="img/vision-slider-tablet.jpg" class="tablet-slider" alt="Petite École Vision"><img data-src="img/vision-slider-phone.jpg" class="phone" alt="Petite École Vision"></li>
				<li><img data-src="img/app-slider-desktop.jpg" class="desktop" alt="BB-8"><img data-src="img/app-slider-tablet.jpg" class="tablet-slider" alt="BB-8"><img data-src="img/app-slider-phone.jpg" class="phone" alt="BB-8"></li>
    			<li><img data-src="img/affiche_typo-slider-desktop.jpg" class="desktop" alt="Affichage Mural"><img data-src="img/affiche_typo-slider-tablet.jpg" class="tablet-slider" alt="Affichage Mural"><img data-src="img/affiche_typo-slider-phone.jpg" class="phone" alt="Affichage Mural"></li>
    			<li><img data-src="img/bb-8-slider-desktop.png" class="desktop" alt="BB-8"><img data-src="img/bb-8-slider-tablet.png" class="tablet-slider" alt="BB-8"><img data-src="img/bb-8-slider-phone.png" class="phone" alt="BB-8"></li>
  			</ul>  
		</div>
       
       	<!-- Titre de la page --> 
        <h1><?php echo $_GET["lang"] == "fr" ? "Mon portfolio" : ($_GET["lang"] == "en" ? "My Portfolio" : ""); ?></h1>
        
        <!-- Section des sites web -->
        <div id="section1">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Sites web et programmation" : ($_GET["lang"] == "en" ? "Websites and Programming" : ""); ?></h2>
        	
        	<!-- Images de la gallerie -->
			<div class="img-gallerie fadeout site-1 vers-projet1" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Cours en ligne pour l'École de la fonction publique du Canada" : ($_GET["lang"] == "en" ? "Online courses for the Canada School of Public Service" : ""); ?></span></div>
        	</div>
			
			<div class="img-gallerie fadeout site-2 vers-projet2" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Intranet de la garderie Vision" : ($_GET["lang"] == "en" ? "Intranet for the Vision daycare" : ""); ?></span></div>
        	</div>
			
			<div class="img-gallerie fadeout site-3 vers-projet3" tabindex="0">
				<div class="overlay"><span class="desc-overlay">GuitarBox</span></div>
        	</div>
			
			<!--<div class="img-gallerie fadeout site-4 vers-projet4" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php //echo $_GET["lang"] == "fr" ? "Site web pour Manon Bureau" : ($_GET["lang"] == "en" ? "Website for Manon Bureau" : ""); ?></span></div>
        	</div>-->
			
			<!--<div class="img-gallerie fadeout site-5 vers-projet5" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php //echo $_GET["lang"] == "fr" ? "Site web pour Affichage Mural" : ($_GET["lang"] == "en" ? "Website for Affichage Mural" : ""); ?></span></div>
			</div>-->
		</div>
		
		<div id="section2">
			<h2><?php echo $_GET["lang"] == "fr" ? "Design graphique" : ($_GET["lang"] == "en" ? "Graphic design" : ""); ?></h2>
			
			<!-- Images de la gallerie -->
			<div class="img-gallerie fadeout design-1 vers-projet1" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Mise en page de livre" : ($_GET["lang"] == "en" ? "Book layout" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-2 vers-projet2" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Guide de randonnée" : ($_GET["lang"] == "en" ? "Hiking guide" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-3 vers-projet3" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Spécimen typographique" : ($_GET["lang"] == "en" ? "Typographic specimen" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-4 vers-projet4" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Comité international des ADLS" : ($_GET["lang"] == "en" ? "International commitee of the FOW" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-5 vers-projet5" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Fondation Cowboys Fringants" : ($_GET["lang"] == "en" ? "Cowboys Fringants foundation" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-6 vers-projet6" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "CRCÉÉ" : ($_GET["lang"] == "en" ? "CRCEE" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-7 vers-projet7" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Fåst" : ($_GET["lang"] == "en" ? "Fåst" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-8 vers-projet8" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Portrait typographique" : ($_GET["lang"] == "en" ? "Typographic portrait" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-9 vers-projet9" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Design de t-shirts" : ($_GET["lang"] == "en" ? "T-shirts design" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-10 vers-projet10" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Zoomorphisme" : ($_GET["lang"] == "en" ? "Zoomorphism" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout design-11 vers-projet11" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?></span></div>
        	</div>
		</div>
       
       <!-- Section des illustrations -->
        <div id="section3">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></h2>
        	
        	<!-- Images de la gallerie -->
			<div class="img-gallerie fadeout illustration-1 vers-projet1" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Affiche de théâtre" : ($_GET["lang"] == "en" ? "Play poster" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-2 vers-projet2" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Illustrations de magazine" : ($_GET["lang"] == "en" ? "Magazine illustrations" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-3 vers-projet3" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Couverture de livre" : ($_GET["lang"] == "en" ? "Book cover art" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout illustration-4 vers-projet4" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Illustrations de Star Wars" : ($_GET["lang"] == "en" ? "Star Wars illustrations" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-5 vers-projet5" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Animation des Avengers" : ($_GET["lang"] == "en" ? "Animation of The Avengers" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-6 vers-projet6" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Batman</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-7 vers-projet7" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Flash</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-8 vers-projet8" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Green Arrow</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-9 vers-projet9" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Harry Potter</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-10 vers-projet10" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Ron Weasley</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-11 vers-projet11" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Logo de Gryffondor" : ($_GET["lang"] == "en" ? "Gryffindor Logo" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-12 vers-projet12" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Lord Voldemort</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-13 vers-projet13" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Jacob Frye</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-14 vers-projet14" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Master Chief</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-15 vers-projet15" tabindex="0">
				<div class="overlay"><span class="desc-overlay">Super Mario</span></div>
			</div>
		</div>
      	
       <!-- Section autre -->
        <div id="section4">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Autres" : ($_GET["lang"] == "en" ? "Others" : ""); ?></h2>
        	
        	<!-- Images de la gallerie -->
        	<div class="img-gallerie fadeout projet-1 vers-projet1" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><em>Enter Sandman</em></span></div>
        	</div>
        	<div class="img-gallerie fadeout projet-2 vers-projet2" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Générique de série télé fictive" : ($_GET["lang"] == "en" ? "Credits for a fictive TV series" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout projet-3 vers-projet3" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Affichages muraux" : ($_GET["lang"] == "en" ? "Wall displays" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout projet-4 vers-projet4" tabindex="0">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Réaction en chaîne" : ($_GET["lang"] == "en" ? "Chained reaction" : ""); ?></span></div>
        	</div>
        </div>
		
		<!-- Call to action vers me contacter -->
		<div class="call-to-action2" style="margin-left: 15px;">
			<div class="haut">
				<h2><?php echo $_GET["lang"] == "fr" ? "Vous voulez me contacter ?" : ($_GET["lang"] == "en" ? "Want to contact me?" : ""); ?></h2>
			</div>
			<div class="bas">
				<p>
					<?php echo $_GET["lang"] == "fr" ? "Faites-le maintenant en utilisant la page à cet effet en cliquant ici." : ($_GET["lang"] == "en" ? "You can do so on the page created for this purpose by clicking here." : ""); ?>
				</p>
				<a href="me-contacter.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact Me" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
			</div>
		</div>
	</div>
	
	<!-- Descriptions des projets -->
	<!-- Section prog -->
	<div class="projet section1 projet1">
		<h1><?php echo $_GET["lang"] == "fr" ? "Cours en ligne pour l'École de la fonction publique du Canada" : ($_GET["lang"] == "en" ? "Online courses for the Canada School of Public Service" : ""); ?></h1>
		<img data-src="img/CSPS-desktop.png" class="desktop" alt="Site 1">
		<img data-src="img/CSPS-tablet.png" class="tablet" alt="Site 1">
		<img data-src="img/CSPS-phone.png" class="phone" alt="Site 1">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Dans le cadre de mon stage et de mon emploi à l'École de la fonction publique du Canada, j'ai participé à la création de divers cours en ligne offerts aux fonctionnaires canadiens et ce, à-travers la plateforme GCCampus, le tout en utilisant divers langages de programmation." : ($_GET["lang"] == "en" ? "As part of my internship and my job at the Canada School of Public Service, I participated in creating various online courses offered to canadian public servants on the GCCampus platform and that, using different programming languages." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section1 projet2 changeImage" data-images="3">
		<h1><?php echo $_GET["lang"] == "fr" ? "Intranet de la garderie Vision" : ($_GET["lang"] == "en" ? "Intranet for the Vision daycare" : ""); ?></h1>
		<img data-src="img/garderie-desktop_1.jpg" class="desktop" alt="Site 1">
		<img data-src="img/garderie-tablet_1.jpg" class="tablet" alt="Site 1">
		<img data-src="img/garderie-phone_1.jpg" class="phone" alt="Site 1">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "J’ai programmé ce site web avec des collègues de classe, Jean-Michel Dorais et Fabien Thérien-Prud’homme dans le cadre d'un cours pour permettre à la Petite École Vision de Gatineau de gérer leur garderie et de marquer les présences et absences des enfants ainsi que de créer des fiches de résumé de la journée des enfants et certains rapports, le tout en HTML, CSS, JavaScript et PHP. Ce site sera bientôt utilisé par plusieurs garderies du réseau Vision à-travers le Québec." : ($_GET["lang"] == "en" ? "I programmed this website with Jean-Michel Dorais and Fabien Thérien-Prud’homme, my classmates, for the Gatineau Vision daycare, for them to manage the daycare, note the kids' attendance and create daily summaries of the kids' day as well as some reports, all of that using HTML, CSS, JavaScript and PHP. This website will soon be used by many daycares of the Vision group throughout the province of Québec." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section1 projet3 changeImage" data-images="3">
		<h1>GuitarBox</h1>
		<img data-src="img/app-desktop<?php if($_GET["lang"] == "en") echo "_en"; ?>_1.jpg" class="desktop" alt="Site 2">
		<img data-src="img/app-tablet<?php if($_GET["lang"] == "en") echo "_en"; ?>_1.jpg" class="tablet" alt="Site 2">
		<img data-src="img/app-phone<?php if($_GET["lang"] == "en") echo "_en"; ?>_1.jpg" class="phone" alt="Site 2">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "J’ai créé cette application pour iOS qui offre différents outils utiles pour un guitariste. Je l'ai créée grâce au langage de programmation Swift et à l’outil Xcode, le tout pour apprendre par moi-même à créer une application pour mobile. Elle est disponible sur l'App Store d'Apple. Apprenez-en plus en visitant le <a href='http://guitarbox.ca/?lang=fr' class='nouvelonglet' target='_blank'>guitarbox.ca</a> et téléchargez l'application en cliquant sur le lien ci-bas pour m'encourager !" : ($_GET["lang"] == "en" ? "I created this iOS app that offers a handful of tools useful for guitarists. I programmed it using the Swift programming language and Xcode, to learn by myself about mobile apps development. It is available to download on Apple's App Store. Learn more by visiting <a href='http://guitarbox.ca/?lang=en' class='nouvelonglet' target='_blank'>guitarbox.ca</a> and download the app using the link below to encourage me!" : ""); ?>
		</p>
		<a href="https://itunes.apple.com/ca/app/guitarbox/id1320296077?l=<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>&mt=8" target="_blank" class="nouvelonglet"><img src="img/download_app_store-<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>.png" alt="<?php echo $_GET["lang"] == "fr" ? "Télécharger sur l'App Store" : ($_GET["lang"] == "en" ? "Download on the App Store" : ""); ?>" style="margin: 0;"></a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<!--<div class="projet section1 projet4">
		<h1><?php //echo $_GET["lang"] == "fr" ? "Site web pour Manon Bureau" : ($_GET["lang"] == "en" ? "Website for Manon Bureau" : ""); ?></h1>
		<img data-src="img/site_piano_desktop.jpg" class="desktop" alt="Site 3">
		<img data-src="img/site_piano_tablet.jpg" class="tablet" alt="Site 3">
		<img data-src="img/site_piano_phone.jpg" class="phone" alt="Site 3">
		<p>
			<?php //echo $_GET["lang"] == "fr" ? "Ceci est un site que j’ai programmé à l’aide du framework Bootstrap, pour ma mère, qui est professeure de piano. J’ai moi-même créé tout le site et les images qu’il contient. Vous pouvez le visiter ici :" : ($_GET["lang"] == "en" ? "This is a website I programmed with the Bootstrap framework for my mother's piano classes. I created the entire website as well as all images in it. You can visit it here: " : ""); ?> 
		</p>
		<a href="http://piano.benoit-lord.ca" target="_blank" class="nouvelonglet"><?php //echo $_GET["lang"] == "fr" ? "Visiter le site" : ($_GET["lang"] == "en" ? "Visit the site" : ""); ?></a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>-->
	<!--<div class="projet section1 projet5">
		<h1><?php //echo $_GET["lang"] == "fr" ? "Site web pour Affichage Mural" : ($_GET["lang"] == "en" ? "Website for Affichage Mural" : ""); ?></h1>
		<img data-src="img/affichage-desktop.png" class="desktop" alt="Site 4">
		<img data-src="img/affichage-tablet.png" class="tablet" alt="Site 4">
		<img data-src="img/affichage-phone.png" class="phone" alt="Site 4">
		<p>
			<?php //echo $_GET["lang"] == "fr" ? "Ceci est un site que j’ai créé dans le cadre d'un cours pour la compagnie Affichage Mural à l'aide WordPress et du thème Divi. Durant ce cours j'ai pu compétitionner avec mes collègues de classe pour créer ce qui aurait pu devenir le site officiel de la compagnie. Vous pouvez voir ce site ci-dessous." : ($_GET["lang"] == "en" ? "This is a website I created during a school class for Affichage Mural, a wall display company, with WordPress and the Divi theme. During this class, I had the chance to compete with my classmates to created what would become the company's official website. You can see my website below." : ""); ?>
		</p>
		<a href="http://affichage.benoit-lord.ca" target="_blank" class="nouvelonglet">affichage.benoit-lord.ca</a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>-->
	
	<!-- Section Design -->
	<div class="projet section2 projet1 changeImage" data-images="3">
		<h1><?php echo $_GET["lang"] == "fr" ? "Mise en page de livre" : ($_GET["lang"] == "en" ? "Book layout" : ""); ?></h1>
		<img data-src="img/cage-desktop_1.jpg" class="desktop" alt="Portrait typographique de Matthew Carter">
		<img data-src="img/cage-tablet_1.jpg" class="tablet" alt="Portrait typographique de Matthew Carter">
		<img data-src="img/cage-phone_1.jpg" class="phone" alt="Portrait typographique de Matthew Carter">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Dans le cadre de mes cours, j'ai conçu cette mise en page d'un livre portant sur l'&oelig;uvre de John Cage, célèbre compositeur de musique expérimentale. Ma mise en page s'inspire de son travail." : ($_GET["lang"] == "en" ? "For school, I created this layout of a book about the work of famous experimental music composer John Cage. My layout is inspired by his work." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet2 changeImage" data-images="3">
		<h1><?php echo $_GET["lang"] == "fr" ? "Guide de randonnée" : ($_GET["lang"] == "en" ? "Hiking guide" : ""); ?></h1>
		<img data-src="img/randonnee-desktop_1.jpg" class="desktop" alt="Design de t-shirts">
		<img data-src="img/randonnee-tablet_1.jpg" class="tablet" alt="Design de t-shirts">
		<img data-src="img/randonnee-phone_1.jpg" class="phone" alt="Design de t-shirts">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "J'ai créé la mise en page de ce petit guide servant à guider l'organisation de randonnées pédestres dans les parcs du Québec pour les jeunes. Il sert à guider autant les organisateurs que les jeunes qui participent aux randonnées." : ($_GET["lang"] == "en" ? "For a school project, I design this small guide used to help organize hikes in the parks of Québec for kids. This guide helps both the organizers as well as the kids that participate in those hikes" : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet3">
		<h1><?php echo $_GET["lang"] == "fr" ? "Spécimen typographique" : ($_GET["lang"] == "en" ? "Typographic specimen" : ""); ?></h1>
		<img data-src="img/exo-desktop.jpg" class="desktop" alt="CRCÉÉ">
		<img data-src="img/exo-tablet.jpg" class="tablet" alt="CRCÉÉ">
		<img data-src="img/exo-phone.jpg" class="phone" alt="CRCÉÉ">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Cette affiche sert à mettre en valeur une famille de police de caractère que j'ai choisie, soit Exo 2. Elle met en valeur ses caractéristiques, comme sa versatilité, à travers le sujet du voyage dans le temps, sujet relié à l'histoire même de la police, qui se veut futuriste." : ($_GET["lang"] == "en" ? "This poster was created to showcase a font family that I chose, Exo 2. It puts forward its qualities, like its versatility, through the subject of time travel, which is itself linked to the font's origin, as the font's design is aiming to be futuristic." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet4 changeImage" data-images="5">
		<h1><?php echo $_GET["lang"] == "fr" ? "Image de marque du Comité international des Ami-e-s de la Sagesse" : ($_GET["lang"] == "en" ? "Branding of the international commitee of the Friends of Wisdom" : ""); ?></h1>
		<img data-src="img/amis-desktop_1.jpg" class="desktop" alt="Portrait typographique de Matthew Carter">
		<img data-src="img/amis-tablet_1.jpg" class="tablet" alt="Portrait typographique de Matthew Carter">
		<img data-src="img/amis-phone_1.jpg" class="phone" alt="Portrait typographique de Matthew Carter">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Pour un projet scolaire, dans un concours, j'ai créé une proposition d'image de marque pour le comité international des Ami-e-s de la Sagesse." : ($_GET["lang"] == "en" ? "For a school work, as a contest, I created a proposition for a branding for the international commitee of the Friends of Wisdom" : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet5 changeImage" data-images="4">
		<h1><?php echo $_GET["lang"] == "fr" ? "Image de marque de la Fondation Cowboys Fringants" : ($_GET["lang"] == "en" ? "Branding of the Cowboys Fringants Foundation" : ""); ?></h1>
		<img data-src="img/fondation-desktop_1.jpg" class="desktop" alt="Design de t-shirts">
		<img data-src="img/fondation-tablet_1.jpg" class="tablet" alt="Design de t-shirts">
		<img data-src="img/fondation-phone_1.jpg" class="phone" alt="Design de t-shirts">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Pour un concours dans le cadre d'un cours, voici une image de marque que j'ai créée pour la Fondation Cowboys Fringants, une fondation créée par le groupe pour lutter contre les changements climatiques." : ($_GET["lang"] == "en" ? "For a contest in school, I created this branding for the Cowboys Fringants Foundation, a foundation created by the band to help fight climate change." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet6 changeImage" data-images="4">
		<h1><?php echo $_GET["lang"] == "fr" ? "Image de marque de la Chaire de recherche du Canada en économie écologique" : ($_GET["lang"] == "en" ? "Branding of the Canada Research Chair on economic ecology" : ""); ?></h1>
		<img data-src="img/crcee-desktop_1.png" class="desktop" alt="CRCÉÉ">
		<img data-src="img/crcee-tablet_1.png" class="tablet" alt="CRCÉÉ">
		<img data-src="img/crcee-phone_1.png" class="phone" alt="CRCÉÉ">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ce projet, que j'ai réalisé dans pour un cours, est une proposition pour l'image de marque de la Chaire de recherche du Canada en économie écologique." : ($_GET["lang"] == "en" ? "This project I created for a class is a proposition of branding for the Canada Research Chair on economic ecology." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet7 changeImage" data-images="3">
		<h1><?php echo $_GET["lang"] == "fr" ? "Image de marque d'un parfum" : ($_GET["lang"] == "en" ? "Perfume branding" : ""); ?></h1>
		<img data-src="img/fast-desktop_1.jpg" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?>">
		<img data-src="img/fast-tablet_1.jpg" class="tablet" alt="<?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?>">
		<img data-src="img/fast-phone_1.jpg" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?>">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Pour un projet scolaire élaboré, j'ai développé cette image de marque pour un parfum que j'ai créé, basé sur un pays, le Danemark. Le concept est un parfum pour sportifs qui utilise de froid du Groenland pour rafraîchir." : ($_GET["lang"] == "en" ? "In an elaborate projet for school, I created this branding for a perfume I created, based on a country, Denmark. The concept is a perfume for active people that uses the cold of Greenland to refresh the user." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet8">
		<h1><?php echo $_GET["lang"] == "fr" ? "Portrait typographique de Matthew Carter" : ($_GET["lang"] == "en" ? "Typographic portrait of Matthew Carter" : ""); ?></h1>
		<img data-src="img/affiche_typo-desktop.png" class="desktop" alt="Portrait typographique de Matthew Carter">
		<img data-src="img/affiche_typo-tablet.png" class="tablet" alt="Portrait typographique de Matthew Carter">
		<img data-src="img/affiche_typo-phone.png" class="phone" alt="Portrait typographique de Matthew Carter">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Dans le cadre d'un projet scolaire, j'ai réalisé ce portrait typographique du célèbre typographe Matthew Carter. Il représente ses polices les plus connues ainsi que son apport à la typographie moderne" : ($_GET["lang"] == "en" ? "For a school work, I created this typographic portrait of famous typograph Matthew Carter. It represents his most known fonts as well as his contribution to modern typography." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet9 changeImage" data-images="5">
		<h1><?php echo $_GET["lang"] == "fr" ? "Design de t-shirts" : ($_GET["lang"] == "en" ? "T-shirts design" : ""); ?></h1>
		<img data-src="img/t-shirts-desktop_1.jpg" class="desktop" alt="Design de t-shirts">
		<img data-src="img/t-shirts-tablet_1.jpg" class="tablet" alt="Design de t-shirts">
		<img data-src="img/t-shirts-phone_1.jpg" class="phone" alt="Design de t-shirts">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "J'ai réalisé cette série de designs de t-shirts pour un cours. Chaque t-shirt représente une expression québécoise connue de façon imagée. Vous pouvez même vous les procurer via le site web zazzle.ca en cliquant sur le lien ci-bas!" : ($_GET["lang"] == "en" ? "I created this series of t-shirts designs for a class. Each represents a expression from Quebec that is shown through the illustrations. You can buy them through the website Zazzle.ca by clicking on the link below!" : ""); ?>
		</p>
		<a class="bouton nouvelonglet" target="_blank" href="https://www.zazzle.ca/benoit_lord?lang=<?php echo $_GET["lang"]; ?>&rf=238306235092478743&CMPN=share_dblst&social=true" target="_blank"><?php echo $_GET["lang"] == "fr" ? "Acheter" : ($_GET["lang"] == "en" ? "Buy" : ""); ?></a>
		<a class=""></a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet10">
		<h1><?php echo $_GET["lang"] == "fr" ? "Zoomorphisme" : ($_GET["lang"] == "en" ? "Zoomorphism" : ""); ?></h1>
		<img data-src="img/zoomorphisme-desktop.jpg" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Zoomorphisme" : ($_GET["lang"] == "en" ? "Zoomorphism" : ""); ?>">
		<img data-src="img/zoomorphisme-tablet.jpg" class="tablet" alt="<?php echo $_GET["lang"] == "fr" ? "Zoomorphisme" : ($_GET["lang"] == "en" ? "Zoomorphism" : ""); ?>">
		<img data-src="img/zoomorphisme-phone.jpg" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Zoomorphisme" : ($_GET["lang"] == "en" ? "Zoomorphism" : ""); ?>">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ce projet a été réalisé dans le cadre d'un cours à l'aide d'Adobe Photoshop. Il consiste en la fusion d'une image du guitariste Slash et de celle d'un loup." : ($_GET["lang"] == "en" ? "I created this project in a school class with Adobe Photoshop. Il consists of the fusion of images of guitarist Slash and a wolf." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section2 projet11">
		<h1><?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?></h1>
		<img data-src="img/logo-desktop.png" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?>">
		<img data-src="img/logo-tablet.png" class="tablet" alt="<?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?>">
		<img data-src="img/logo-phone.png" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?>">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "J'ai réalisé ce logo pour la compagnie fictive de camion de restauration Lord's Burgers dans le cadre d'un cours à l'aide d'Adobe Illustrator." : ($_GET["lang"] == "en" ? "I created this logo for the fictive food truck company Lord's Burgers during a class using Adobe Illustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	
	<!-- Section illustrations -->
	<div class="projet section3 projet1">
		<h1><?php echo $_GET["lang"] == "fr" ? "Affiche de théâtre" : ($_GET["lang"] == "en" ? "Play poster" : ""); ?></h1>
		<img data-src="img/oiseaux-desktop.jpg" class="desktop" alt="Affiche de la pièce Tous des oiseaux">
		<img data-src="img/oiseaux-tablet.jpg" class="tablet" alt="Affiche de la pièce Tous des oiseaux">
		<img data-src="img/oiseaux-phone.jpg" class="phone" alt="Affiche de la pièce Tous des oiseaux">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Dans le cadre d'un cours, j'ai créé cette affiche de théâtre fictive pour la pièce <em>Tous des Oiseaux</em> de Wajdi Mouawad." : ($_GET["lang"] == "en" ? "As a school project, I created this poster for the play <em>Tous des Oiseaux</em> by Wajdi Mouawad." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section3 projet2 changeImage" data-images="2">
		<h1><?php echo $_GET["lang"] == "fr" ? "Illustrations de magazine" : ($_GET["lang"] == "en" ? "Magazine illustrations" : ""); ?></h1>
		<img data-src="img/vegane-desktop_1.jpg" class="desktop" alt="Illustrations de magazine">
		<img data-src="img/vegane-tablet_1.jpg" class="tablet" alt="Illustrations de magazine">
		<img data-src="img/vegane-phone_1.jpg" class="phone" alt="Illustrations de magazine">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Voici des illustrations éditoriales fictives que j'ai créées pour dans un contexte scolaire pour un article sur le véganisme. Les deux images représentent les enjeux comme l'environnement et la protection des animaux." : ($_GET["lang"] == "en" ? "Those are illustrations I produced in a school context for an article about veganism. they both represent subjects like environment and protection of animals." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
	<div class="projet section3 projet3">
		<h1><?php echo $_GET["lang"] == "fr" ? "Couverture de livre" : ($_GET["lang"] == "en" ? "Book cover art" : ""); ?></h1>
		<img data-src="img/mussard-desktop.jpg" class="desktop" alt="Couverture du livre Le Testament de maître Mussard">
		<img data-src="img/mussard-tablet.jpg" class="tablet" alt="Couverture du livre Le Testament de maître Mussard">
		<img data-src="img/mussard-phone.jpg" class="phone" alt="Couverture du livre Le Testament de maître Mussard">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Cette illustration en est une fictive pour la couverture du livre <em>Le Testament de Maître Mussard</em> de Patrick Süskind, créée pour un projet scolaire." : ($_GET["lang"] == "en" ? "This is a fictive illustration for the cover art of the book <em>Le Testament de Maître Mussard</em> by Patrick Süskind created for a schoool project." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section3 projet4 changeImage" data-images="5">
		<h1><?php echo $_GET["lang"] == "fr" ? "Illustrations de Star Wars" : ($_GET["lang"] == "en" ? "Star Wars illustrations" : ""); ?></h1>
		<img data-src="img/star-wars-desktop_1.png" class="desktop" alt="BB-8">
		<img data-src="img/star-wars-tablet_1.png" class="tablet" alt="BB-8">
		<img data-src="img/star-wars-phone_1.png" class="phone" alt="BB-8">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une collection d'illustrations de la série Star Wars que j'ai réalisée à l'aide d'Adobe Illustrator. Elle comprend la plupart des personnages de la série illustrés de façon « cartoon »." : ($_GET["lang"] == "en" ? "This is a series of illustrations of the Star Wars saga I realised using Adobe Illustrator. It contains most of the characters of the series, illustrated in a « cartoon » way." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section3 projet5">
		<h1><?php echo $_GET["lang"] == "fr" ? "Animation des Avengers" : ($_GET["lang"] == "en" ? "Animation of The Avengers" : ""); ?></h1>
		<img data-src="img/avengers-desktop.gif" class="desktop" alt="Captain America">
		<img data-src="img/avengers-tablet.gif" class="tablet" alt="Captain America">
		<img data-src="img/avengers-phone.gif" class="phone" alt="Captain America">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une animation que j'ai réalisé à partir de mes illustrations des Avengers, un groupe de super héros de l'Univers des comics de Marvel. Je l'ai créée avec Adobe After Effects." : ($_GET["lang"] == "en" ? "This is an animation I created from my illustrations of The Avengers, a superhero group from the Marvels Comics universe. I created it using Adobe After Effects." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
	<div class="projet section3 projet6">
		<h1>Batman</h1>
		<img data-src="img/batman-desktop.png" class="desktop" alt="Batman">
		<img data-src="img/batman-tablet.png" class="tablet" alt="Batman">
		<img data-src="img/batman-phone.png" class="phone" alt="Batman">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Cette illustration représente le célèbre Chevalier Noir, Batman, alter-ego de Bruce Wayne dans les Comics de DC Comics." : ($_GET["lang"] == "en" ? "This illustration represents the famous Dark Knight, Batman, or Bruce Wayne from DC Comics." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section3 projet7">
		<h1>Flash</h1>
		<img data-src="img/flash-desktop.png" class="desktop" alt="Flash">
		<img data-src="img/flash-tablet.png" class="tablet" alt="Flash">
		<img data-src="img/flash-phone.png" class="phone" alt="Flash">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Cette illustration, que j'ai réalisée à l'aide d'Adobe Illustrator, représente Flash, un super-héro créé par DC Comics." : ($_GET["lang"] == "en" ? "This illustration I created with Adobe Illustrator represents the Flash, a DC Comics superhero." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
   <div class="projet section3 projet8">
		<h1>Green Arrow</h1>
		<img data-src="img/green-arrow-desktop.png" class="desktop" alt="Green Arrow">
		<img data-src="img/green-arrow-tablet.png" class="tablet" alt="Green Arrow">
		<img data-src="img/green-arrow-phone.png" class="phone" alt="Green Arrow">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Cette illustration représente un autre super-héro de DC Comics, The Green Arrow." : ($_GET["lang"] == "en" ? "This illustration represents another DC Comics superhero, The Green Arrow." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
   <div class="projet section3 projet9">
		<h1>Harry Potter</h1>
		<img data-src="img/harry-potter-desktop.png" class="desktop" alt="Harry Potter">
		<img data-src="img/harry-potter-tablet.png" class="tablet" alt="Harry Potter">
		<img data-src="img/harry-potter-phone.png" class="phone" alt="Harry Potter">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une illustration de Harry Potter de la série de livre et de films du même nom que j'ai réalisé à l'aide d'Adobe Illustrator." : ($_GET["lang"] == "en" ? "This is an illustration of Harry Potter, from the book series of the same name, I created in Adobe Illustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
   <div class="projet section3 projet10">
		<h1>Ron Weasley</h1>
		<img data-src="img/ron-weasley-desktop.png" class="desktop" alt="Jacob Frye">
		<img data-src="img/ron-weasley-tablet.png" class="tablet" alt="Jacob Frye">
		<img data-src="img/ron-weasley-phone.png" class="phone" alt="Jacob Frye">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Voici une autre de mes illustrations de l'univers magique de J.K. Rowling, celle-ci représentant Ron Weasley, compagnon de Harry Potter dans ses aventures." : ($_GET["lang"] == "en" ? "This is another illustration from J.K. Rowling's Wizarding World, this one representing Ron Weasley, companion of Harry Potter in his adventures." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
   <div class="projet section3 projet11">
		<h1><?php echo $_GET["lang"] == "fr" ? "Logo de Gryffondor" : ($_GET["lang"] == "en" ? "Gryffindor Logo" : ""); ?></h1>
		<img data-src="img/logo-gryffindor-desktop.png" class="desktop" alt="Logo de Gryffondor">
		<img data-src="img/logo-gryffindor-tablet.png" class="tablet" alt="Logo de Gryffondor">
		<img data-src="img/logo-gryffindor-phone.png" class="phone" alt="Logo de Gryffondor">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une reproduction de l'emblème la maison Gryffondor dans la série de livre et de films Harry Potter que j'ai réalisé à l'aide d'Adobe Illustrator." : ($_GET["lang"] == "en" ? "This is a reproduction of the emblem of the Gryffindor house, in the Harry Potter series, I created using Adobe Ilustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
   <div class="projet section3 projet12">
		<h1>Lord Voldemort</h1>
		<img data-src="img/lord-voldemort-desktop.png" class="desktop" alt="Lord Voldemort">
		<img data-src="img/lord-voldemort-tablet.png" class="tablet" alt="Lord Voldemort">
		<img data-src="img/lord-voldemort-phone.png" class="phone" alt="Lord Voldemort">
		<p>	
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une illustration du diabolique Lord Voldemort de la série de livre et de films Harry Potter que j'ai réalisé à l'aide d'Adobe Illustrator." : ($_GET["lang"] == "en" ? "This is an illustration of the villain Lord Voldemort form the Harry Potter series I created using Adobe Ilustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section3 projet13">
		<h1>Jacob Frye</h1>
		<img data-src="img/jacob-frye-desktop.png" class="desktop" alt="Jacob Frye">
		<img data-src="img/jacob-frye-tablet.png" class="tablet" alt="Jacob Frye">
		<img data-src="img/jacob-frye-phone.png" class="phone" alt="Jacob Frye">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une illustration que j'ai réalisée à l'aide d'Adobe Illustrator représentant Jacob Frye, un des héros du jeux vidéo Assassin's Creed Syndicate." : ($_GET["lang"] == "en" ? "This is an illustration I created using Adobe Ilustrator representing Jacob Frye, one of the heros of the video game Assassin's Creed syndicate." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section3 projet14">
		<h1>Master Chief</h1>
		<img data-src="img/master-chief-desktop.png" class="desktop" alt="Master Chief">
		<img data-src="img/master-chief-tablet.png" class="tablet" alt="Master Chief">
		<img data-src="img/master-chief-phone.png" class="phone" alt="Master Chief">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "J'ai ici illustré à l'aide d'Adobe Illustrator le casque du spartan John-117 ou le Master Chief, le héro de la série de jeux vidéo Halo." : ($_GET["lang"] == "en" ? "I illustrated here using Adobe Illustrator spartan John-117, or the Master Chief's helmet, from the video games series Halo." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   </div>
   <div class="projet section3 projet15">
		<h1>Super Mario</h1>
		<img data-src="img/super-mario-desktop.png" class="desktop" alt="Super Mario">
		<img data-src="img/super-mario-tablet.png" class="tablet" alt="Super Mario">
		<img data-src="img/super-mario-phone.png" class="phone" alt="Super Mario">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est une illustration du célèbre personnage de jeux vidéo de Nintendo Super Mario que j'ai réalisée à l'aide d'Adobe Illustrator." : ($_GET["lang"] == "en" ? "This is an illustration of the famous video game character Super Mario I created in Adobe Illustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	
	<!-- Section autres -->
	<div class="projet section4 projet1">
		<h1><?php echo $_GET["lang"] == "fr" ? "<em>Enter Sandman</em> de Metallica" : ($_GET["lang"] == "en" ? "<em>Enter Sandman</em> by Metallica" : ""); ?></h1>
		<img data-src="img/audio-desktop.png" class="desktop" alt="Projet audio">
		<img data-src="img/audio-tablet.png" class="tablet" alt="Projet audio">
		<img data-src="img/audio-phone.png" class="phone" alt="Projet audio">
		<audio controls>
			<source src="enter-sandman.mp3" type="audio/mp3">
		</audio>
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est un enregistrement de la chanson « Enter Sandman » dans lequel vous pouvez m'entendre jouer les sections de guitare, de guitare basse et de batterie. J'ai réalisé ce projet à l'aide du programme Adobe Audition et des divers instruments de musique que je possède." : ($_GET["lang"] == "en" ? "This is a recording of the song <em>Enter Sandman</em> by Metallica on which you can here me play the guitar, bass guitar and drums parts. I created this project using Adobe Audition and the instruments I own." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section4 projet2">
		<h1><?php echo $_GET["lang"] == "fr" ? "Générique de série télé fictive" : ($_GET["lang"] == "en" ? "Credits for a fictive TV series" : ""); ?></h1>
		<video controls>
			<source src="img/tv-flash.mp4" type="video/mp4">
			<?php echo $_GET["lang"] == "fr" ? "Malheureusement, la vidéo n'a pas pu être affichée" : ($_GET["lang"] == "en" ? "Unfortunately, this video couldn't be displayed." : ""); ?>
		</video>
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est le générique d'entrée de la série fictive Flash que j'ai réalisée dans le cadre d'un cours. Il est entièrement réalisée dans Adobe After Effects et Adobe Illustrator." : ($_GET["lang"] == "en" ? "Those are openning credits for a fictive TV series I created for a school class using Adobe After Effects and Adobe Illustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
   	</div>
	<div class="projet section4 projet3 changeImage" data-images="2">
		<h1><?php echo $_GET["lang"] == "fr" ? "Affichages muraux - Technique d'Intégration Multimédia" : ($_GET["lang"] == "en" ? "Wall displays - Multimedia Integration Technic" : ""); ?></h1>
		<img data-src="img/branding-desktop_1.png" class="desktop" alt="<?php echo $_GET["lang"] == "fr" ? "Affichages muraux - Techniques d'Intégration Multimédia" : ($_GET["lang"] == "en" ? "Wall displays - Multimedia Integration Technics" : ""); ?>">
		<img data-src="img/branding-tablet_1.png" class="tablet" alt="<?php echo $_GET["lang"] == "fr" ? "Affichages muraux - Techniques d'Intégration Multimédia" : ($_GET["lang"] == "en" ? "Wall displays - Multimedia Integration Technics" : ""); ?>">
		<img data-src="img/branding-phone_1.png" class="phone" alt="<?php echo $_GET["lang"] == "fr" ? "Affichages muraux - Techniques d'Intégration Multimédia" : ($_GET["lang"] == "en" ? "Wall displays - Multimedia Integration Technics" : ""); ?>">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Dans le cadre d'un cours, j'ai recréé, avec l'aide des étudiants de mon groupe l'image de marque de notre programme, la Technique d'Intégration Multimédia au Cégep de l'Outaouais. Pour ma part j'ai créé, avec Jade Ménard-Dupuis et Alexandrine Ménard des affichages muraux qui seront placés sur les murs du Cégep, dont voici un exemple." : ($_GET["lang"] == "en" ? "During a class, I recreated, with my classmates, the branding of our program, the Multimedia Integration Technic at the Cegep de l'Outaouais. Myself, I create, with Jade Ménard-Dupuis and Alexandrine Ménard, wall displays that will appear on the walls and doors of the schools. Here is an example of that." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section4 projet4">
		<h1>Motion design: <?php echo $_GET["lang"] == "fr" ? "Réaction en chaîne" : ($_GET["lang"] == "en" ? "Chained reaction" : ""); ?></h1>
		<video controls>
			<source src="img/motion_design.mp4" type="video/mp4">
			<?php echo $_GET["lang"] == "fr" ? "Malheureusement, la vidéo n'a pas pu être affichée" : ($_GET["lang"] == "en" ? "Unfortunately, this video couldn't be displayed." : ""); ?>
		</video>
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Dans le cadre d'un cours, j'ai créé cette vidéo en motion design qui représente une réaction en chaîne impliquant divers éléments et ce, grâce à Adobe Illustrator et After Effects." : ($_GET["lang"] == "en" ? "In a class, I created this motion design video which represents a chain reaction involving various objects. It was created using Adobe After Effects and Illustrator." : ""); ?>
		</p>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	
	<!-- Overlay noir quand on ouvre un projet -->
	<div class="black-overlay"></div>
	
	<!-- compteur de section -->
	<div class="compteur">
		<div class="section1"></div>
		<div class="section2"></div>
		<div class="section3"></div>
		<div class="section4"></div>
	</div>
	<div class="bulle_compteur bulle_compteur_1"><?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?></div>
	<div class="bulle_compteur bulle_compteur_2"><?php echo $_GET["lang"] == "fr" ? "Design graphique" : ($_GET["lang"] == "en" ? "Graphic design" : ""); ?></div>
	<div class="bulle_compteur bulle_compteur_3"><?php echo $_GET["lang"] == "fr" ? "Illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></div>
	<div class="bulle_compteur bulle_compteur_4"><?php echo $_GET["lang"] == "fr" ? "Autres" : ($_GET["lang"] == "en" ? "Others" : ""); ?></div>
   
    <?php
		include("include/footer.php");
		include("include/language_toggle.php");
		include("include/loader.php");
		include("include/nav.php");
		include("include/bouton_haut.php");
	?>
</body>
</html>
