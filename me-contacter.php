<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title>Me contacter</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<!-- CSS personalisé -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/nav.css" rel="stylesheet">

	<!-- JavaScript personalisé -->
	<script src="js/portfolio.js"></script>
	<script src="js/validation_form.js"></script>
	<script src="js/nav.js"></script>
	
	<!-- Favicon -->
	<link rel="icon" href="img/favicon.png" type="image/png">
</head>
<body>
    
    <!-- Contenu de la page -->
    <div class="page-content">
       
       	<!-- Titre du site -->
        <h1>Benoit Lord</h1>
        
        <!-- Header avec image -->
        <header class="contact">
        </header>
        
        <!-- Titre de la page --> 
        <h1>Me contacter</h1>
        
        <!-- Section du formulaire de contact -->
        <h2>Par courriel</h2>
        <p>
        	Pour me contacter par courriel, vous n'avez qu'à utiliser le formulaire ci-dessous. Entrez les informations demandées et appuyez sur « Envoyer ». Je vous répondrai dès que possible.
        </p>
        
        <!-- PHP pour le formulaire -->
        <?php
			$prenom = $_POST["prenom"];
			$nom = $_POST["nom"];
			$email = $_POST["email"];
			$message = nl2br($_POST["message"]);
		
			$headers = "Content-Type: text/html\n" .
					   "From: " . utf8_decode("$prenom $nom") . "<$email>\n" .
					   'MIME-Version: 1.0' . "\n";
		
			$msg = "
			<style>
			
				*{
					font-family: Roboto;
				}
			
			</style>
			<h1>Courriel de Portfolio</h1>
			<p>Nom: $prenom $nom</p>
			<p>Email : $email</p> 
			<p>Message: </p>
			<p>$message</p>";
			
			if(isset($_POST["envoyer"])){
				if(mail("benoitlord98@outlook.com", "Courriel de Portfolio", $msg, $headers)){
					echo "<p class='alerte'>Votre message a été envoyé</p>";
				}
			}
			
		?>
       
       	<!-- Formulaire de contact -->
        <form action="me-contacter.php"  method="post" id="contact" onsubmit="return valider();">
        	<p class="prenom">
        		<label for="prenom">Prénom : </label>
        		<input type="text" id="prenom" name="prenom">
        	</p>
        	<p class="nom">
        		<label for="nom">Nom : </label>
        		<input type="text" id="nom" name="nom">
        	</p>
        	<p class="email">
        		<label for="email">Adresse courriel : </label>
        		<input type="text" id="email" name="email">
        	</p>
        	<p>
        		<label for="message">Message : </label><br>
				<textarea id="message" rows="20" name="message"></textarea>
        	</p>
        	<button type="submit" value="Envoyer" name="envoyer">Envoyer <i class="fa fa-chevron-right fleche"></i></button
        </form>
        
        <!-- Autres informations -->
        <h2>Réseaux sociaux et C.V.</h2>
		<p>Vous pouvez aussi me contacter par ces autres moyens ou encore visiter mes réseaux sociaux.</p>
		<a href="https://www.facebook.com/tiben234"><i class="fa fa-facebook-square fa-3x social"></i></a>
		<a href="http://www.linkedin.com/in/benoit-l-28280a10b"><i class="fa fa-linkedin-square fa-3x social"></i></a>
		<a href="https://twitter.com/tiben234"><i class="fa fa-twitter-square fa-3x social"></i></a>
		<a href="downloads/Lord_Benoit_fr.pdf" download="benoit_lord_cv.pdf" class="cv"><i class="fa fa-file fa-3x"></i><span> C.V.</span></a>
		
    </div>
    
    <!-- Footer -->
  	<footer class="clear">
  		<div class="gauche">
  			&copy; Benoit Lord, 2017
  		</div>
  		<div class="droite">
  			<ul>
				<li><a href="index.html">Accueil</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="me-contacter.php">Me contacter</a></li>
				<li><a href="services.html">Mes services</a></li>
				<li><a href="competences.html">Mes compétences</a></li>
  			</ul>
  		</div>
  	</footer>
   
    <!-- Navigation pour ordinateur -->
    <nav class="nav fermee">
        <i class="fa fa-2x fa-bars menu"></i>
        <div>
            <a href="index.html" class="lien1"><i class="fa fa-2x fa-home"></i></a>
            <a href="portfolio.html" class="lien2"><i class="fa fa-2x fa-book"></i></a>
            <a href="me-contacter.php" class="lien3 actif"><i class="fa fa-2x fa-envelope"></i></a>
            <a href="services.html" class="lien4"><i class="fa fa-2x fa-thumbs-up"></i></a>
            <a href="competences.html" class="lien5"><i class="fa fa-2x fa-pie-chart"></i></a>
        </div>
    </nav>
    
    <!-- Div contenant les liens du sous-menu -->
	<div class="sous-liens">
		<a href="portfolio.html#section1" class="lien2-1"><i class="fa fa-2x fa-globe"></i></a>
		<a href="portfolio.html#section2" class="lien2-2"><i class="fa fa-2x fa-pencil"></i></a>
		<a href="portfolio.html#section3" class="lien2-3"><i class="fa fa-2x fa-picture-o"></i></a>
	</div>
    
    <!--Bulles pour indiquer les pages--> 
    <div class="bulle_1">Accueil</div>
    <div class="bulle_2">Portfolio</div>
    <div class="bulle_2-1">Sites web</div>
    <div class="bulle_2-2">Illustrations</div>
    <div class="bulle_2-3">Autres</div>
    <div class="bulle_3">Me contacter</div>
    <div class="bulle_4">Mes services</div>
    <div class="bulle_5">Mes compétences</div>

    <!-- Navigation pour tablettes et téléphones -->
    <nav class="nav-mobile fermee">
        <i class="fa fa-2x fa-bars menu"></i>
        <div>
            <a href="index.html" class="lien1"><i class="fa fa-2x fa-home"></i></a>
			<span class="lien2"><i class="fa fa-2x fa-book"></i></span>
            <a href="me-contacter.php" class="lien3 actif"><i class="fa fa-2x fa-envelope"></i></a>
            <a href="services.html" class="lien4"><i class="fa fa-2x fa-thumbs-up"></i></a>
            <a href="competences.html" class="lien5"><i class="fa fa-2x fa-pie-chart"></i></a>
        </div>
    </nav>
    
    <!-- Liens du sous menu -->
    <a href="portfolio.html" class="lien2-0-mobile"><i class="fa fa-home"></i></a>
    <a href="portfolio.html#section1" class="lien2-1-mobile"><i class="fa fa-globe"></i></a>
    <a href="portfolio.html#section2" class="lien2-2-mobile"><i class="fa fa-pencil"></i></a>
    <a href="portfolio.html#section3" class="lien2-3-mobile"><i class="fa fa-picture-o"></i></a>
    
    <!-- Bulles pour indiquer les pages --> 
    <div class="bulle_1-mobile">Accueil</div>
    <div class="bulle_2-mobile">Portfolio</div>
    <div class="bulle_2-0-mobile">Accueil</div>
    <div class="bulle_2-1-mobile">Sites web</div>
    <div class="bulle_2-2-mobile">Illustrations</div>
    <div class="bulle_2-3-mobile">Autres</div>
    <div class="bulle_3-mobile">Me contacter</div>
    <div class="bulle_4-mobile">Mes services</div>
    <div class="bulle_5-mobile">Mes compétences</div>
    
    <!-- Bouton pour remonter en haut de la page -->
    <span id="bouton-haut"><i class="fa fa-chevron-up"></i></span>
</body>
</html>
