<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Premier exercice PHP</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="iniPHP.css" />
    </head>
    <body>
        <header>
            <h1>Premier exercice PHP</h1>
            <h2>Réalisé par <span class="nom">André Daizardizde</span></h2>
        </header>
        <section>
	    <h2>Question 1</h2>
		<?php
			date_default_timezone_set("Europe/Paris");
			$todate=date("j / m / Y");
			echo "<p>Nous somme le $todate.</p> \n";
		?>
        </section>
        <section>
            <h2>Question 2</h2>
		<?php
			$version=PHP_VERSION;
			$systeme=PHP_OS;
			echo"<p>la version de php utilisé est $version et la version du sytème d'exploitation du serveur est $systeme.</p>\n";

		?>

	</section>
	<section>
		<h2>Question 3</h2>
		<?php
			$n=10;
			$texte='note';

			echo "<p>".'$n'." vaut $n et ".'$texte'." vaut $texte.</p> \n";


		?>

	</section>
	<section>
		<h2>Question 4</h2>
		<?php
			$n=5;
			$texte='Les fichiers sont situés sur un serveur,une page web écrit directement en (X)HTML est statique elle n\'evolue que quand son auteur la réédite.';
			for($i=0;$i<$n;$i++){
				echo "<p>$texte</p> \n";
			}
		?>
	</section>
    </body>
    
</html>
