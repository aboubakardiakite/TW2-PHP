<?php
require('lib/fonctionsSVG.php');
 $centreX=$_GET["cx"];
 $centreY=$_GET["cy"] ;
 $rayon = $_GET["cr"];
 $angle= $_GET["ca"];
 $gl=$_GET["figure"];

 if(!isset($angle) || $angle=='') $angle=50;

 if(isset($centreX,$centreY,$rayon,$gl) and is_numeric($gl) and is_numeric($angle) and is_numeric($centreY) and is_numeric($centreX) and is_numeric($rayon)) {
	 
	 /* inclusion de la page */
	 require('views/pageFigures.php');
 }else{
	
		 /* inclusion de la page d'erreur */
	 require('views/pageErreur.html');
 }


?>
