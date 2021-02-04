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
	<title><?php echo $_GET["lang"] == "fr" ? "Me contacter - Benoit Lord" : ($_GET["lang"] == "en" ? "Contact me - Benoit Lord" : ""); ?></title>

	<?php 
		include("include/links.php");
	?>
	
	<script src="js/validation_form.js"></script>
</head>
<body>
    
    <!-- Contenu de la page -->
    <div class="page-content fadedout">
       
       	<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
        
        <!-- Header avec image -->
        <header class="contact">
        </header>
        
        <!-- Titre de la page --> 
        <h1><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact me" : ""); ?></h1>
        
        <!-- Section du formulaire de contact -->
		<div class="gauche">
			<p>
				<?php echo $_GET["lang"] == "fr" ? "Pour me contacter par courriel, vous n'avez qu'à utiliser le formulaire ci-dessous. Entrez les informations demandées et appuyez sur « Envoyer ». Je vous répondrai dès que possible." : ($_GET["lang"] == "en" ? "To send me an email, you can simply use the form below. Fill the fields and press \"Send\". I will answer you as fast as possible." : ""); ?>
			</p>
			
			<?php
				if(isset($_POST["envoyer"])){
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
					<p><strong>Nom:</strong> $prenom $nom</p>
					<p><strong>Email :</strong> $email</p> 
					<p><strong>Message:</strong> </p>
					<p><i>$message</i></p>";
				
					if(mail("info@benoit-lord.com", "Courriel de Portfolio", $msg, $headers)){
						if($_GET["lang"] == "fr"){
							echo "<p class='alerte'>Votre message a été envoyé.</p>";
						}
						else if($_GET["lang"] == "en"){
							echo "<p class='alerte'>Your message has been sent.</p>";
						}
					}
					else{
						echo "<p class='erreur'>Une erreur est survenue dans l'envoi.</p>";
					}
				}
			?>

			<!-- Formulaire de contact -->
			<form action="me-contacter.php?lang=<?php echo $_GET["lang"]; ?>"  method="post" id="contact" onsubmit="return valider();">
				<p class="prenom">
					<label for="prenom"><?php echo $_GET["lang"] == "fr" ? "Prénom : " : ($_GET["lang"] == "en" ? "First name: " : ""); ?></label>
					<input type="text" id="prenom" name="prenom" class="<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>">
				</p>
				<p class="nom">
					<label for="nom"><?php echo $_GET["lang"] == "fr" ? "Nom : " : ($_GET["lang"] == "en" ? "Last name: " : ""); ?></label>
					<input type="text" id="nom" name="nom" class="<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>">
				</p>
				<p class="email">
					<label for="email"><?php echo $_GET["lang"] == "fr" ? "Adresse courriel : " : ($_GET["lang"] == "en" ? "Email address: " : ""); ?></label>
					<input type="text" id="email" name="email" class="<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : ""); ?>">
				</p>
				<p>
					<label for="message">Message : </label><br>
					<textarea id="message" rows="20" name="message"></textarea>
				</p>
				<button type="submit" value="Envoyer" name="envoyer" class="bouton"><?php echo $_GET["lang"] == "fr" ? "Envoyer" : ($_GET["lang"] == "en" ? "Send" : ""); ?> <i class="fa fa-chevron-right fleche"></i></button>
			</form>
		</div>
		<div class="droite">
			<h2><?php echo $_GET["lang"] == "fr" ? "Autres informations" : ($_GET["lang"] == "en" ? "Other informations" : ""); ?></h2>
			<p><i class="fa fa-phone contact-infos"></i> (819) 351-8521</p>
			<p><i class="fa fa-envelope contact-infos"></i> <a href="mailto:info@benoit-lord.com" class="pas-effet">info@benoit-lord.com</a></p>
		</div>
        
        <!-- Réseaux sociaux et CV -->
        <h2 style="clear: both;"><?php echo $_GET["lang"] == "fr" ? "Réseaux sociaux et C.V." : ($_GET["lang"] == "en" ? "Social Media and C.V." : ""); ?></h2>
		<p><?php echo $_GET["lang"] == "fr" ? "Vous pouvez aussi visiter mes réseaux sociaux ou encore télécharger mon CV ici." : ($_GET["lang"] == "en" ? "You can also visit my social media or download my C.V. here." : ""); ?></p>
		<a href="https://www.facebook.com/tiben234" class="nouvelonglet" target="_blank"><i class="fa fa-facebook-square fa-3x social"></i></a>
		<a href="http://www.linkedin.com/in/benoit-l-28280a10b" class="nouvelonglet" target="_blank"><i class="fa fa-linkedin-square fa-3x social"></i></a>
		<a href="https://twitter.com/tiben234" class="nouvelonglet" target="_blank"><i class="fa fa-twitter-square fa-3x social"></i></a>
		<a href="downloads/Lord_Benoit_cv_<?php echo $_GET["lang"] == "fr" ? "fr" : ($_GET["lang"] == "en" ? "en" : "fr"); ?>.pdf" download class="cv nouvelonglet" target="_blank"><img src="img/icone_cv.png" alt="cv" width="45" style="margin-bottom: -5px; margin-left: -6px;" class="social"></a>
		
		<!-- Call to action vers portfolio -->
		<div class="call-to-action2">
			<div class="haut">
				<h2><?php echo $_GET["lang"] == "fr" ? "Vous voulez revoir mes projets ?" : ($_GET["lang"] == "en" ? "Want to see my projects again?" : ""); ?></h2>
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
