<?php  // script principal
	try {
		 require('lib/verifyParms.php');
		 //require('views/pageTest.php');       // mettre en commentaire pour la partie 2
		 require('views/pageFactureStarWars.php');   // activer pour la partie 2

 } catch (ParmsException $e){
		 $errorMessage = $e->getMessage();
		 //require('views/pageTestErreur.php');  // mettre en commentaire pour la partie 2
	     require('views/formulaireStarWars.php');  // activer pour la partie 2
}

?>
