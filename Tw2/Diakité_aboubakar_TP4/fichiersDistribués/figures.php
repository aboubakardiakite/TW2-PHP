<?php
require('lib/fonctionsSVG.php');
 $centreX= 70;
 $centreY=50;
 $rayon =52 ;
 $angle=sc;

 if(!isset($angle) || $angle=='') $angle=50;

 if(isset($centreX,$centreY,$rayon) and is_numeric($angle) and is_numeric($centreY) and is_numeric($centreX) and is_numeric($rayon)) {
	 
	 /* inclusion de la page */
	 require('views/pageFigures.php');
 }else{
	
		 /* inclusion de la page d'erreur */
	 require('views/pageErreur.html');
}
?>
