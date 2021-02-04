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
	<title><?php echo $_GET["lang"] == "fr" ? "Mes services - Benoit Lord" : ($_GET["lang"] == "en" ? "My Services - Benoit Lord" : ""); ?></title>

	<?php 
		include("include/links.php");
	?>
	
	<!-- Pour services -->
	<script src="js/services.js"></script>
</head>
<body>
    
    <!-- Contenu de la page -->
    <div class="page-content fadedout">
       
       	<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
        
        <!-- Header avec image --> 
        <header class="services">
        </header>
        
        <!-- Titre de la page --> 
        <h1><?php echo $_GET["lang"] == "fr" ? "Mes services" : ($_GET["lang"] == "en" ? "My Services" : ""); ?></h1>
        
        <!-- Section des services web -->
		<div class="services-container">
			<div class="services-1">
				<h2><?php echo $_GET["lang"] == "fr" ? "Services web et de programmations" : ($_GET["lang"] == "en" ? "Web and Programming Services" : ""); ?></h2>
				<div class="service">
					<i class="fa fa-5x fa-code"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Programmation de sites web" : ($_GET["lang"] == "en" ? "Website Programming" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-wordpress"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Création de sites web en CMS" : ($_GET["lang"] == "en" ? "CMS Websites Creation" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-wheelchair"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Création de sites web accessibles" : ($_GET["lang"] == "en" ? "CMS Websites Creation" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-file-image-o"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Création de contenus web" : ($_GET["lang"] == "en" ? "Web Content Creation" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-gears"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Entretien de sites web" : ($_GET["lang"] == "en" ? "Website Servicing" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-mobile"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Création d'applications mobiles (iOS)" : ($_GET["lang"] == "en" ? "Mobile Apps Creation (iOS)" : ""); ?></h3>
				</div>
			</div>

			<!-- Section des services visuels -->
			<div class="services-2">
				<h2><?php echo $_GET["lang"] == "fr" ? "Services visuels" : ($_GET["lang"] == "en" ? "Design Services" : ""); ?></h2>
				<div class="service">
					<i class="fa fa-5x fa-pencil"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Création d'illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-picture-o"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Création d'images" : ($_GET["lang"] == "en" ? "Image Creation" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-pencil-square"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Design graphique" : ($_GET["lang"] == "en" ? "Graphic Design" : ""); ?></h3>
				</div>
				<div class="service">
					<i class="fa fa-5x fa-photo"></i>
					<h3><?php echo $_GET["lang"] == "fr" ? "Modification d'images" : ($_GET["lang"] == "en" ? "Image Editing" : ""); ?></h3>
				</div>
			</div>
        </div>
		
		<!-- Call to action vers portfolio -->
		<div class="call-to-action2">
			<div class="haut">
				<h2><?php echo $_GET["lang"] == "fr" ? "Vous voulez voir mes projets ?" : ($_GET["lang"] == "en" ? "Want to see my projects?" : ""); ?></h2>
			</div>
			<div class="bas">
				<p>
					<?php echo $_GET["lang"] == "fr" ? "Ils sont juste ici, dans la page Portfolio." : ($_GET["lang"] == "en" ? "They are just here, on the Portfolio page." : ""); ?>
				</p>
				<a href="portfolio.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Voir mes projets" : ($_GET["lang"] == "en" ? "See my projects" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
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
