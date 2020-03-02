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
			echo "<p>Nous somme le $todate.</p> \n";//affiche la valeur de todate dans une balise p qui seras intepreter par le naviquateur et afficher la date
		?>
        </section>
        <section>
            <h2>Question 2</h2>
		<?php
			$version=PHP_VERSION;//declaration de la constance version qui sera ensuite afficher
			$systeme=PHP_OS;//declaration de la constance systeme
			echo"<p>la version de php utilisé est $version et la version du sytème d'exploitation du serveur est $systeme.</p>\n";

		?>

	</section>
	<section>
		<h2>Question 3</h2>
		<?php
			$n=10;//initialisation de la variable n
			$texte='note';//et de texte

			echo "<p>".'$n'." vaut $n et ".'$texte'." vaut $texte.</p> \n";//les .permettent de la concatenation de chaine et variable executable
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
	<section>
		<h2>Question 5</h2>
		<?php
		 function paragrapheTronque($texte,$i){//definition de la variable aec ces parametre
			 $j=0;//
		 	 $k=$i;	//affectation de la taille du taille a k 
			while($j<$i){//la constion de sortir de la boucle

				$var=substr($texte,0,$k--);//mettre dans var les different chaine successive
				echo "$var";//afficher var
				echo "<br/>";
				$j++;//incrementer j pour ne pas avoir de boucle infinir
			}
			
		 }
		?>
		
	
		<?php
			$texte="laurent";//initialisation de la chaine a afficher
			$i=strlen($texte);//affection de la taille a i
			echo "<p>";	//la balise qui permettrz d'afficher le contenu sur la page
			paragrapheTronque($texte,$i);//appel de fonction avec les arguments
			echo "</p>";
		?>
		
	</section>
	<section>
	<h2>Question 6</h2>
		<?php //pareille comme l'autre
		function paragrapheTronque2($texte,$i){
			 $j=0;
			 $k=$i;	 
		   while($j<$i){

			   $var=substr($texte,0,$k--);
			   echo "<li>$var</li>\n";
			   $j++;
		   }
		   
		}
	   ?>
	   
	   <?php 
		   $texte="laurent";
		   $i=strlen($texte);
		   echo "<ul>";	
		   paragrapheTronque2($texte,$i);
		   echo "</ul>";
	   ?>
	   </p>
        </section>

		<section>
		<h2>Question 7</h2>
			
				<?php
				function multiplication($entier1,$entier2){//cette fonction prend deux entier en parametre et return leur multiplication
					return $entier1*$entier2;
				}
				?>
			
			
				<?php
					
					function tableMultiplication($entier){//cette fonction prend d'un entier en parametre et return la table de multiplication de cet entier
						$var=0;
						for($i=1;$i<10;$i++){
								$var=multiplication($entier,$i);
								echo " <li>  $entier * $i = $var </li> \n";
						}
					}
					
				?>
			</ul>
					<?php
					echo "<ul>";
					tableMultiplication(2);//appel de la fonction avec pour argument le nombre 2 dans le but de retourne sa table de multiplication
					echo "</ul>";
					?>
			</p>
		</section>
		<section>
				<h2>Question 8</h2>
					<?php 
						function tablesMultiplication(){
							for($i=1;$i<10;$i++){
								echo "<li>";
								echo "<ul>";//la deuxieme liste qui est dans la premier
								for($j=1;$j<10;$j++){//cette boucle sert a multiple les $i par les $j
									$var=multiplication($i,$j);
									echo " <li>  $i * $j = $var </li>\n";

								}
								echo "</ul>";//fermeture de la deuxieme liste
								echo "<br/>";//faire un retour a la ligne apres chaque multiplecation de $i
								echo "</li>";
							}
						}
					?>
					<?php
						echo "<ul>";//la premier liste a puce
						tablesMultiplication();
						echo "</ul>";//fermeture de la deuxiemeliste
					?>
		</section>
		<section>
				<h2>Question 9</h2>
						<?php
							echo "<table id=\"multiplications\">";//faire un tableau de table de multiplication
								echo "<thead>";
								   echo "<tr>";
									echo "<th>*</th>";
									for($i=1;$i<10;$i++){
										echo "<th> $i</th>";
									}
									echo "</tr>";
								echo "</thead>";
								echo "<tbody>";
											for($i=1;$i<10;$i++){
												echo "<tr><th> $i </th>";
												for($j=1;$j<10;$j++){
													echo "<td>";
														echo multiplication($i,$j);
													echo "</td>";
												}
												echo "</tr>";
											}
										
								echo "</tbody>";
							echo "</table>"
						?>


		</section>
    </body>
    
</html>
