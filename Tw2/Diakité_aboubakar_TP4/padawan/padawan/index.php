<?php
require('lib/fonctions.php');
$configFile = fopen('data/config.txt','r');
$config = readConfig($configFile);
$innerNav = listContents($config);

$page = "accueil.html"; // page par défaut
if (isset($_GET['page']))
	$page = $_GET['page'];
$contentFile = "contents/{$page}";

?>
<!DOCTYPE html>  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>		
	<title>Site Padawan</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="stylePadawan.css" />
    <link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css' />

</head>

<body>
	<header>
    <nav>
    <?php
        echo $innerNav;
    ?>
	<p id="credit"><a href="https://flic.kr/p/fEvSSF">
		Photo ElPadawan (CC BY-SA 2.0)</a>
	</p>
    </nav>
	<h1>
		Le site de Padawan
	</h1>
	</header>
    <section id="content">
    <?php
        require($contentFile);
    ?>
	</section>
</body>

</html>
