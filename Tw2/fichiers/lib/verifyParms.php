<?php
	// script invoqué par le script principal
  
	// création de la classe Exception spécifique
	class ParmsException extends Exception{};
	
	// quelques constantes utiles
	const METHOD = INPUT_GET;
	
 	const CIVILITE_VALUES = ['Mr','Mme']; // valeurs autorisées pour 'civilite'
 	const ADHESION_VALUES = ['oui', 'non', 'dejaMembre']; // valeurs autorisées pour 'adhesion'
	
	const CP_REGEXP ='/^([02][1-9]|[13-8][0-9]|9[0-5]|2A|2B|97[1-6])[0-9]{3}$/';
	// regexp définissant les valeurs autorisées pour 'cp'
	
	const FIG_VALUES = [ // valeurs autorisées pour 'fig'
        "Maître Yoda",
        "Luke Skywalker",
        "Anakin Skywalker",
        "Dark Vador",
        "Obi-Wan Kenobi",
        "Han Solo",
        "Princesse Leia",
        "Padmée Amidala",
        "Empereur Palpatine",
        "R2D2",
        "C3PO",
        "Chewbacca",
        "Rey",
        "Finn",
        "Poe Dameron",
        "Kylo Ren"
        ];
	
	
	/*
	 * à compléter, pour chaque paramètre :
	 * - tester sa présence et sa validité
	 * - initialiser une variable globale de même nom avec la valeur retenue
	 * - en cas d'erreur ou d'absence (d'un paramètre requis) : déclencher une ParmsException avec un message d'erreur
	 */
    

?>