<!-- Footer -->
<footer class="clear fadedout">

	<!-- Partie gauche -->
	<div class="gauche">
		&copy; Benoit Lord, 2018
	</div>

	<!-- Partie droite -->
	<div class="droite">
		<ul>
			<li><a href="index.php"><?php echo $_GET["lang"] == "fr" ? "Accueil" : ($_GET["lang"] == "en" ? "Home" : ""); ?></a></li>
			<li><a href="portfolio.php"><?php echo $_GET["lang"] == "fr" ? "Portfolio" : ($_GET["lang"] == "en" ? "Portfolio" : ""); ?></a></li>
			<li><a href="me-contacter.php"><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact Me" : ""); ?></a></li>
			<li><a href="services.php"><?php echo $_GET["lang"] == "fr" ? "Mes services" : ($_GET["lang"] == "en" ? "My Services" : ""); ?></a></li>
			<li><a href="competences.php"><?php echo $_GET["lang"] == "fr" ? "Mes compétences" : ($_GET["lang"] == "en" ? "My Skills" : ""); ?></a></li>
		</ul>
	</div>
</footer>