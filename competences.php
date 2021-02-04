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
	<title><?php echo $_GET["lang"] == "fr" ? "Mes compétences - Benoit Lord" : ($_GET["lang"] == "en" ? "My Skills - Benoit Lord" : ""); ?></title>

	<?php 
		include("include/links.php");
	?>
</head>
<body>
    
    <!-- Contenu de la page -->
    <div class="page-content fadedout">
       
       	<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
        
        <!-- Header avec image --> 
        <header class="competences">
        </header>
        
        <!-- Titre de la page --> 
        <h1><?php echo $_GET["lang"] == "fr" ? "Mes compétences" : ($_GET["lang"] == "en" ? "My Skills" : ""); ?></h1>
        
        <!-- Section des langages de programmation -->
        <div class="competence">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Langages de programmation" : ($_GET["lang"] == "en" ? "Programming Languages" : ""); ?></h2>
        	<div class="gauche">
        		<p>
        			<?php echo $_GET["lang"] == "fr" ? "Je suis passionné de la programmation et du design web et je me débrouille très bien avec la plupart des langages de programmation web les plus utilisés. Je peux donc utiliser facilement le HTML, le CSS, le JavaScript et le PHP afin de créer différentes fonctionnalités pour des sites web élaborés. J'ai d'ailleurs programmé divers sites moi-même, par exemple le site que vous visitez en ce moment, que j'ai entièrement programmé. Je peux aussi programmer divers types d'applications mobiles pour la plateforme iOS (iPhone, iPad, etc.), grâce au language Swift." : ($_GET["lang"] == "en" ? "I am passionnate of programming and web design and I am pretty experienced with most of the web programming languages that are widely used. Therefore, I can easily use HTML, CSS, JavaScript and PHP to create numerous features for elaborate websites. In fact, I programmed various websites, for example, the one you are visiting right now. I can also program various types of mobile applications for the iOS platform (iPhone, iPad, etc.) thanks to the Swift programming language." : ""); ?>
        		</p>
        	</div>
			<div class="droite">
				<img src="img/animation_prog_portfolio-<?php echo $_GET["lang"]; ?>.gif" alt="<?php echo $_GET["lang"] == "fr" ? "Langages de programmation" : ($_GET["lang"] == "en" ? "Programming Languages" : ""); ?>">
			</div>        	
        </div>
        
        <!-- Section des programmes et plateformes -->
        <div class="competence">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Logiciels et plateformes" : ($_GET["lang"] == "en" ? "Softwares and Platforms" : ""); ?></h2>
        	<div class="gauche">
        		<p>
        			<?php echo $_GET["lang"] == "fr" ? "Du côté des logiciels et plateformes, je peux utiliser la plupart des logiciels de la suite Adobe Creative Cloud. Je sais ainsi utiliser Photoshop, Illustrator, After Effects, InDesign, Premiere Pro, Audition, Dreamweaver et Media Encoder. Je peux aussi évidemment utiliser n'importe quel logiciel de programmation web (ex. Dreamweaver, Brackets, Notepad++, etc.) ainsi que Xcode et ses nombreux outils pour le développement mobile. Je maîtrise également bien WordPress, que j'ai utilisé à quelques reprises. Finalement, j'utilise facilement tout les logiciels de la suite Microsoft Office." : ($_GET["lang"] == "en" ? "On the softwares side, I can use most of the softwares included in the Adobe Creative Cloud Suite, for example, Photoshop, Illustrator, After Effects, InDesign, Premiere Pro, Audition Dreamweaver and Media Encoder. I can of course also use any programming software (ex. Dreamveaver, Brackets, Notepad++, etc.) as well as Xcode and its many tools for mobile development. I also master pretty well WordPress, which I used for some websites I developed. Finally, I can easily use all softwares of the Microsoft Office suite." : ""); ?>
        		</p>
        	</div>
			<div class="droite">
				<img src="img/animation_logiciels_portfolio.gif" alt="<?php echo $_GET["lang"] == "fr" ? "Logiciels et plateformes" : ($_GET["lang"] == "en" ? "Softwares and Platforms" : ""); ?>">
			</div>
		</div>
		
		<!-- Section sur l'accessibilité -->
        <div class="competence">
        	<h2><?php echo $_GET["lang"] == "fr" ? "Accessibilité du web" : ($_GET["lang"] == "en" ? "Web accessibility" : ""); ?></h2>
        	<div class="gauche">
        		<p>
        			<?php echo $_GET["lang"] == "fr" ? "Grâce entre autres à mon expérience au Gouvernement du Canada, je connais les rudiments de base de l'accessibilité pour les sites web. J'ai entre autres utilisé la plateforme de développement WET (Web Experience Toolkit) du gouvernement afin de créer des sites web qui répondent aux normes d'accessibilité du W3C, les règles WCAG 2.0 (Web Content Accessibility Guidelines) qui assurent qu'un site web répond aux besoins de personnes avec des incapacités visuelles, auditives ou motrices en offrant par exemple la possibilité de naviguer le site à l'aide des touches du clavier ou encore en offrant des transcription textuelles de bandes sonores ou de graphiques." : ($_GET["lang"] == "en" ? "Thanks in part to my experience at the Government of Canada, I know the basics of web accessibility. In fact, I used the government's accessible development platform, WET (Web Experience Toolkit) to create websites that are accessible, according to the W3C's WCAG 2.0 (Web Content Accessibility Guidelines) standards, which ensure that a website meets the needs of people with visual, hearing or motor disabilities by offering for example, the possibilty to browse the site with a keyboard or textual transcripts of sound tracks or graphics." : ""); ?>
        		</p>
        	</div>
			<div class="droite">
				<img src="img/accessibilite.png" alt="<?php echo $_GET["lang"] == "fr" ? "Accessibilité du web" : ($_GET["lang"] == "en" ? "Web accessibility" : ""); ?>">
			</div>
		</div>
		
		<!-- Call to action vers portfolio -->
		<div class="call-to-action2">
			<div class="haut">
				<h2><?php echo $_GET["lang"] == "fr" ? "Vous voulez découvrir mes services ?" : ($_GET["lang"] == "en" ? "Want to discover my services?" : ""); ?></h2>
			</div>
			<div class="bas">
				<p>
					<?php echo $_GET["lang"] == "fr" ? "Allez sur la page suivante pour le faire." : ($_GET["lang"] == "en" ? "Go to this page to do so." : ""); ?>
				</p>
				<a href="services.php" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Découvrir mes services" : ($_GET["lang"] == "en" ? "Discover my services" : ""); ?> <i class="fa fa-chevron-right fleche"></i></a>
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
