<?php
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	if(isset($_GET["lang"])){
		if($_GET["lang"] == "fr" || $_GET["lang"] == "en"){
			$_SESSION["lang"] = $_GET["lang"];
		}
		else if(isset($_SESSION["lang"])){
			header("location: {$_SERVER['PHP_SELF']}?lang={$_SESSION["lang"]}");
		}
		else{
			switch ($lang){
				case "fr":
					header("location: {$_SERVER['PHP_SELF']}?lang=fr");
					break;
				case "en":
					header("location: {$_SERVER['PHP_SELF']}?lang=en");
					break;        
				default:
					header("location: {$_SERVER['PHP_SELF']}?lang=fr");
					break;
			}
		}
	}
	else{
		if(isset($_SESSION["lang"])){
			if(strpos($_SERVER['REQUEST_URI'], "?") !== false){
				header("location: {$_SERVER['REQUEST_URI']}&lang={$_SESSION["lang"]}");
			}
			else{
				header("location: {$_SERVER['REQUEST_URI']}?lang={$_SESSION["lang"]}");
			}
		}
		else{
			if(strpos($_SERVER['REQUEST_URI'], "?") !== false){
				switch ($lang){
					case "fr":
						header("location: {$_SERVER['REQUEST_URI']}&lang=fr");
						break;
					case "en":
						header("location: {$_SERVER['REQUEST_URI']}&lang=en");
						break;        
					default:
						header("location: {$_SERVER['REQUEST_URI']}&lang=fr");
						break;
				}
			}
			else{
				switch ($lang){
					case "fr":
						header("location: {$_SERVER['REQUEST_URI']}?lang=fr");
						break;
					case "en":
						header("location: {$_SERVER['REQUEST_URI']}?lang=en");
						break;        
					default:
						header("location: {$_SERVER['REQUEST_URI']}?lang=fr");
						break;
				}
			}
			
		}
	}
	
	/*<?php echo $_GET["lang"] == "fr" ? "français" : ($_GET["lang"] == "en" ? "anglais" : ""); ?>*/
?>