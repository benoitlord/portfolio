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
    			<li><img data-src="img/affichage-slider-desktop.jpg" class="desktop" alt="Affichage Mural"><img data-src="img/affichage-slider-tablet.jpg" class="tablet-slider" alt="Affichage Mural"><img data-src="img/affichage-slider-phone.jpg" class="phone" alt="Affichage Mural"></li>
    			<li><img data-src="img/bb-8-slider-desktop.png" class="desktop" alt="BB-8"><img data-src="img/bb-8-slider-tablet.png" class="tablet-slider" alt="BB-8"><img data-src="img/bb-8-slider-phone.png" class="phone" alt="BB-8"></li>
  			</ul>  
		</div>
       
       	<!-- Titre de la page --> 
        <h1><?php echo $_GET["lang"] == "fr" ? "Mon portfolio" : ($_GET["lang"] == "en" ? "My Portfolio" : ""); ?></h1>
        
        <!-- Section des sites web -->
        <div id="section1">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Sites web et programmation" : ($_GET["lang"] == "en" ? "Websites and Programming" : ""); ?></h2>
        	
        	<!-- Images de la gallerie -->
			<div class="img-gallerie fadeout site-1 vers-projet1">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Cours en ligne pour l'École de la fonction publique du Canada" : ($_GET["lang"] == "en" ? "Online courses for the Canada School of Public Service" : ""); ?></span></div>
        	</div>
			
			<div class="img-gallerie fadeout site-2 vers-projet2">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Intranet de la garderie Vision" : ($_GET["lang"] == "en" ? "Intranet for the Vision daycare" : ""); ?></span></div>
        	</div>
			
			<div class="img-gallerie fadeout site-3 vers-projet3">
				<div class="overlay"><span class="desc-overlay">GuitarBox</span></div>
        	</div>
			
			<div class="img-gallerie fadeout site-4 vers-projet4">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Site web pour Manon Bureau" : ($_GET["lang"] == "en" ? "Website for Manon Bureau" : ""); ?></span></div>
        	</div>
			
			<div class="img-gallerie fadeout site-5 vers-projet5">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Site web pour Affichage Mural" : ($_GET["lang"] == "en" ? "Website for Affichage Mural" : ""); ?></span></div>
        	</div>
		</div>
       
       <!-- Section des illustrations -->
        <div id="section2">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></h2>
        	
        	<!-- Images de la gallerie -->
			<div class="img-gallerie fadeout illustration-1 vers-projet1">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Illustrations de Star Wars" : ($_GET["lang"] == "en" ? "Star Wars illustrations" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-2 vers-projet2">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Animation des Avengers" : ($_GET["lang"] == "en" ? "Animation of The Avengers" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-3 vers-projet3">
				<div class="overlay"><span class="desc-overlay">Batman</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-4 vers-projet4">
				<div class="overlay"><span class="desc-overlay">Flash</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-5 vers-projet5">
				<div class="overlay"><span class="desc-overlay">Green Arrow</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-6 vers-projet6">
				<div class="overlay"><span class="desc-overlay">Harry Potter</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-7 vers-projet7">
				<div class="overlay"><span class="desc-overlay">Ron Weasley</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-8 vers-projet8">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Logo de Gryffondor" : ($_GET["lang"] == "en" ? "Gryffindor Logo" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-9 vers-projet9">
				<div class="overlay"><span class="desc-overlay">Lord Voldemort</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-10 vers-projet10">
				<div class="overlay"><span class="desc-overlay">Jacob Frye</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-11 vers-projet11">
				<div class="overlay"><span class="desc-overlay">Master Chief</span></div>
        	</div>
        	<div class="img-gallerie fadeout illustration-12 vers-projet12">
				<div class="overlay"><span class="desc-overlay">Super Mario</span></div>
			</div>
		</div>
      	
       <!-- Section autre -->
        <div id="section3">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Autres" : ($_GET["lang"] == "en" ? "Others" : ""); ?></h2>
        	
        	<!-- Images de la gallerie -->
        	<div class="img-gallerie fadeout projet-1 vers-projet1">
				<div class="overlay"><span class="desc-overlay"><em>Enter Sandman</em></span></div>
        	</div>
        	<div class="img-gallerie fadeout projet-2 vers-projet2">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Zoomorphisme" : ($_GET["lang"] == "en" ? "Zoomorphism" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout projet-3 vers-projet3">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Générique de série télé fictive" : ($_GET["lang"] == "en" ? "Credits for a fictive TV series" : ""); ?></span></div>
        	</div>
        	<div class="img-gallerie fadeout projet-4 vers-projet4">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Logo d'une compagnie fictive" : ($_GET["lang"] == "en" ? "Logo for a fictive company" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout projet-5 vers-projet5">
				<div class="overlay"><span class="desc-overlay"><?php echo $_GET["lang"] == "fr" ? "Affichages muraux" : ($_GET["lang"] == "en" ? "Wall displays" : ""); ?></span></div>
        	</div>
			<div class="img-gallerie fadeout projet-6 vers-projet6">
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
			<?php echo $_GET["lang"] == "fr" ? "J’ai créé cette application pour iOS qui offre différents outils utiles pour un guitariste. Je l'ai créée grâce au langage de programmation Swift et à l’outil Xcode, le tout pour apprendre par moi-même à créer une application pour mobile. Elle est disponible sur l'App Store d'Apple. Téléchargez-là en cliquant sur le lien ci-bas pour m'encourager !" : ($_GET["lang"] == "en" ? "I created this iOS app that offers a handful of tools useful for guitarists. I programmed it using the Swift programming language and Xcode, to learn by myself about mobile apps development. It is availbable to download on Apple's App Store. Download it using the link below to encourage me!" : ""); ?>
		</p>
		<a href="https://itunes.apple.com/ca/app/guitarbox/id1320296077?l=<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>&mt=8" target="_blank" class="nouvelonglet"><img src="img/download_app_store-<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>.png" alt="<?php echo $_GET["lang"] == "fr" ? "Télécharger sur l'App Store" : ($_GET["lang"] == "en" ? "Download on the App Store" : ""); ?>" style="margin: 0;"></a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section1 projet4">
		<h1><?php echo $_GET["lang"] == "fr" ? "Site web pour Manon Bureau" : ($_GET["lang"] == "en" ? "Website for Manon Bureau" : ""); ?></h1>
		<img data-src="img/site_piano_desktop.jpg" class="desktop" alt="Site 3">
		<img data-src="img/site_piano_tablet.jpg" class="tablet" alt="Site 3">
		<img data-src="img/site_piano_phone.jpg" class="phone" alt="Site 3">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est un site que j’ai programmé à l’aide du framework Bootstrap, pour ma mère, qui est professeure de piano. J’ai moi-même créé tout le site et les images qu’il contient. Vous pouvez le visiter à l’adresse suivante :" : ($_GET["lang"] == "en" ? "This is a website I programmed with the Bootstrap framework for my mother's piano classes. I created the entire website as well as all images in it. You can visit it at the following address: " : ""); ?> 
		</p>
		<a href="http://www.manonbureaupiano.ca" target="_blank" class="nouvelonglet">www.manonbureaupiano.ca</a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	<div class="projet section1 projet5">
		<h1><?php echo $_GET["lang"] == "fr" ? "Site web pour Affichage Mural" : ($_GET["lang"] == "en" ? "Website for Affichage Mural" : ""); ?></h1>
		<img data-src="img/affichage-desktop.png" class="desktop" alt="Site 4">
		<img data-src="img/affichage-tablet.png" class="tablet" alt="Site 4">
		<img data-src="img/affichage-phone.png" class="phone" alt="Site 4">
		<p>
			<?php echo $_GET["lang"] == "fr" ? "Ceci est un site que j’ai créé dans le cadre d'un cours pour la compagnie Affichage Mural à l'aide WordPress et du thème Divi. Durant ce cours j'ai pu compétitionner avec mes collègues de classe pour créer ce qui aurait pu devenir le site officiel de la compagnie. Vous pouvez voir ce site ci-dessous." : ($_GET["lang"] == "en" ? "This is a website I created during a school class for Affichage Mural, a wall display company, with WordPress and the Divi theme. During this class, I had the chance to compete with my classmates to created what would become the company's official website. You can see my website below." : ""); ?>
		</p>
		<a href="http://affichage.benoit-lord.com" target="_blank" class="nouvelonglet">affichage.benoit-lord.com</a>
		<span class="next"><i class="fa fa-chevron-right fa-2x"></i></span>
		<span class="previous"><i class="fa fa-chevron-left fa-2x"></i></span>
		<i class="fa fa-3x fa-times-circle"></i>
	</div>
	
	<!-- Section illustrations -->
	<div class="projet section2 projet1 changeImage" data-images="5">
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
	<div class="projet section2 projet2">
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
	<div class="projet section2 projet3">
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
	<div class="projet section2 projet4">
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
   <div class="projet section2 projet5">
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
   <div class="projet section2 projet6">
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
   <div class="projet section2 projet7">
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
   <div class="projet section2 projet8">
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
   <div class="projet section2 projet9">
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
	<div class="projet section2 projet10">
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
	<div class="projet section2 projet11">
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
   <div class="projet section2 projet12">
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
	<div class="projet section3 projet1">
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
	<div class="projet section3 projet2">
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
	<div class="projet section3 projet3">
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
   <div class="projet section3 projet4">
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
	<div class="projet section3 projet5 changeImage" data-images="2">
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
	<div class="projet section3 projet6">
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
	</div>
	<div class="bulle_compteur bulle_compteur_1"><?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?></div>
	<div class="bulle_compteur bulle_compteur_2"><?php echo $_GET["lang"] == "fr" ? "Illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></div>
	<div class="bulle_compteur bulle_compteur_3"><?php echo $_GET["lang"] == "fr" ? "Autres" : ($_GET["lang"] == "en" ? "Others" : ""); ?></div>
   
    <?php
		include("include/footer.php");
		include("include/language_toggle.php");
		include("include/loader.php");
		include("include/nav.php");
		include("include/bouton_haut.php");
	?>
</body>
</html>
