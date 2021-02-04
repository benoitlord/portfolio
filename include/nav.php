<!-- Navigation pour ordinateur -->
<nav class="nav fermee">
	<i class="fa fa-2x fa fa-bars menu"></i>
	<div>
		<a href="index.php" class="lien1 <?php if($_SERVER['PHP_SELF'] == "/index.php") echo "actif"; ?>"><i class="fa fa-2x fa-home"></i></a>
		<a href="portfolio.php" class="lien2 <?php if($_SERVER['PHP_SELF'] == "/portfolio.php") echo "actif"; ?>"><i class="fa fa-2x fa-book"></i></a>
		<a href="me-contacter.php" class="lien3 <?php if($_SERVER['PHP_SELF'] == "/me-contacter.php") echo "actif"; ?>"><i class="fa fa-2x fa-envelope"></i></a>
		<a href="services.php" class="lien4 <?php if($_SERVER['PHP_SELF'] == "/services.php") echo "actif"; ?>"><i class="fa fa-2x fa-thumbs-up"></i></a>
		<a href="competences.php" class="lien5 <?php if($_SERVER['PHP_SELF'] == "/competences.php") echo "actif"; ?>"><i class="fa fa-2x fa-pie-chart"></i></a>
	</div>
</nav>

<!-- Div contenant les liens du sous-menu -->
<div class="sous-liens">
	<a href="portfolio.php#section1" class="lien2-1"><i class="fa fa-2x fa-code"></i></a>
	<a href="portfolio.php#section2" class="lien2-2"><i class="fa fa-2x fa-pencil"></i></a>
	<a href="portfolio.php#section3" class="lien2-3"><i class="fa fa-2x fa-picture-o"></i></a>
</div>

<!--Bulles pour indiquer les pages--> 
<div class="bulle bulle_1"><?php echo $_GET["lang"] == "fr" ? "Accueil" : ($_GET["lang"] == "en" ? "Home" : ""); ?></div>
<div class="bulle bulle_2"><?php echo $_GET["lang"] == "fr" ? "Portfolio" : ($_GET["lang"] == "en" ? "Portfolio" : ""); ?></div>
<div class="bulle bulle_2-1"><?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?></div>
<div class="bulle bulle_2-2"><?php echo $_GET["lang"] == "fr" ? "Illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></div>
<div class="bulle bulle_2-3"><?php echo $_GET["lang"] == "fr" ? "Autres" : ($_GET["lang"] == "en" ? "Others" : ""); ?></div>
<div class="bulle bulle_3"><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact Me" : ""); ?></div>
<div class="bulle bulle_4"><?php echo $_GET["lang"] == "fr" ? "Mes services" : ($_GET["lang"] == "en" ? "My Services" : ""); ?></div>
<div class="bulle bulle_5" <?php if ($_GET["lang"] == "en") echo 'style="width: 70px;"' ?>><?php echo $_GET["lang"] == "fr" ? "Mes compétences" : ($_GET["lang"] == "en" ? "My Skills" : ""); ?></div>

<!-- Navigation pour tablettes et téléphones -->
<nav class="nav-mobile fermee">
	<i class="fa fa-2x fa-bars menu"></i>
	<div>
		<a href="index.php" class="lien1 <?php if($_SERVER['PHP_SELF'] == "/index.php") echo "actif"; ?>"><i class="fa fa-2x fa-home"></i></a>
		<span class="lien2 <?php if($_SERVER['PHP_SELF'] == "/portfolio.php") echo "actif"; ?>"><i class="fa fa-2x fa-book"></i></span>
		<a href="me-contacter.php" class="lien3 <?php if($_SERVER['PHP_SELF'] == "/me-contacter.php") echo "actif"; ?>"><i class="fa fa-2x fa-envelope"></i></a>
		<a href="services.php" class="lien4 <?php if($_SERVER['PHP_SELF'] == "/services.php") echo "actif"; ?>"><i class="fa fa-2x fa-thumbs-up"></i></a>
		<a href="competences.php" class="lien5 <?php if($_SERVER['PHP_SELF'] == "/competences.php") echo "actif"; ?>"><i class="fa fa-2x fa-pie-chart"></i></a>
	</div>
</nav>

<!-- Liens du sous menu -->
<div class="sous-liens-mobile">
	<a href="portfolio.php" class="sous-lien-mobile lien2-0-mobile"><i class="fa fa-home"></i></a>
	<a href="portfolio.php#section1" class="sous-lien-mobile lien2-1-mobile"><i class="fa fa-code"></i></a>
	<a href="portfolio.php#section2" class="sous-lien-mobile lien2-2-mobile"><i class="fa fa-pencil"></i></a>
	<a href="portfolio.php#section3" class="sous-lien-mobile lien2-3-mobile"><i class="fa fa-picture-o"></i></a>
</div>

<!-- Bulles pour indiquer les pages --> 
<div class="bulle-mobile bulle_1-mobile"><?php echo $_GET["lang"] == "fr" ? "Accueil" : ($_GET["lang"] == "en" ? "Home" : ""); ?></div>
<div class="bulle-mobile bulle_2-mobile"><?php echo $_GET["lang"] == "fr" ? "Portfolio" : ($_GET["lang"] == "en" ? "Portfolio" : ""); ?></div>
<div class="bulle-mobile bulle_2-0-mobile"><?php echo $_GET["lang"] == "fr" ? "Accueil" : ($_GET["lang"] == "en" ? "Home" : ""); ?></div>
<div class="bulle-mobile bulle_2-1-mobile"><?php echo $_GET["lang"] == "fr" ? "Programmation" : ($_GET["lang"] == "en" ? "Programming" : ""); ?></div>
<div class="bulle-mobile bulle_2-2-mobile"><?php echo $_GET["lang"] == "fr" ? "Illustrations" : ($_GET["lang"] == "en" ? "Illustrations" : ""); ?></div>
<div class="bulle-mobile bulle_2-3-mobile"><?php echo $_GET["lang"] == "fr" ? "Autres" : ($_GET["lang"] == "en" ? "Others" : ""); ?></div>
<div class="bulle-mobile bulle_3-mobile"><?php echo $_GET["lang"] == "fr" ? "Me contacter" : ($_GET["lang"] == "en" ? "Contact Me" : ""); ?></div>
<div class="bulle-mobile bulle_4-mobile"><?php echo $_GET["lang"] == "fr" ? "Mes services" : ($_GET["lang"] == "en" ? "My Services" : ""); ?></div>
<div class="bulle-mobile bulle_5-mobile" <?php if ($_GET["lang"] == "en") echo 'style="width: 70px;"' ?>><?php echo $_GET["lang"] == "fr" ? "Mes compétences" : ($_GET["lang"] == "en" ? "My Skills" : ""); ?></div>