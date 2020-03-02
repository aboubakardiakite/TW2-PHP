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



	//Faire un ensemble de fonction qui serviras a faire les verification
	function check_civilite($nom){
                $veri = filter_input(METHOD,$nom,FILTER_SANITIZE_STRING,['default'=> CIVILITE_VALUES]);
                if($veri === NULL)
                        throw new ParmsException("param $nom : valeur absente");
                else if($veri ===FALSE)
                        throw new ParmsException("param $nom : valeur incorrecte");
                return $veri;
        }



	 function check_adhesion($nom){
                $veri = filter_input(METHOD,$nom,FILTER_SANITIZE_STRING,['default'=> ADHESION_VALUES]);
                if($veri === NULL || $veri === '')
					$veri='non';
				foreach ($veri as $key => $value) {
                	if(!in_array($value, ADHESION_VALUES)) throw new ParmsException("param '$nom' : valeur incorrecte");
                }
                  
                return $veri;
        }

	function check_string($nom){
		$veri = filter_input(METHOD,$nom,FILTER_SANITIZE_STRING);
		if($veri === NULL || $veri === '')
			throw new ParmsException("param $nom : valeur absente");
		else if($veri === FALSE)
			throw new ParmsException("param $nom : valeur incorrecte");
		return $veri;
	}

	function check_complAd($compl){
		$veri = filter_input(METHOD,$compl,FILTER_SANITIZE_STRING);
		if($veri === NULL || $veri === ''){
			$veri='';
		}else if($veri === FALSE){
			throw new ParmsException("param $compl : valeur incorrecte");
		}

		return $veri;
	}

         function check_cp($nom ,$CP_REGEXP){
                $veri = filter_input(METHOD,$nom,FILTER_VALIDATE_INT,['regexp'=> ["regexp" => $CP_REGEXP]]);
                if($veri === NULL || $veri ==='')
                        throw new ParmsException("param '$nom' : valeur absente");
                else if($veri === FALSE)
                        throw new ParmsException("param '$nom' : valeur incorrecte");
                return $veri;
	 }

	 function check_fig($fig){
		 	$veri=$_GET[$fig];
                if($veri === NULL)
                        throw new ParmsException("param '$fig' : valeur absente");
                       
                return $veri;
         }



	$fig=check_fig('fig');
	$adhesion=check_adhesion('adhesion');
	$civilite=check_civilite('civilite');
	$nom=check_string('nom');
	$prenom=check_string('prenom');
	$voie=check_string('voie');
	$ville=check_string('ville');
	$complAd=check_complAd('compl');
	$cp=check_cp('cp',CP_REGEXP);



?>
