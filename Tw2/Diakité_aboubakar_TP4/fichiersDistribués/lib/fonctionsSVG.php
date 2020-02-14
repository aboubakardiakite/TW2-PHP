<?php
// Produit le code SVG d'un cercle de centre ($cx,$cy) de rayon $r
function cercle($cx,$cy,$r){
    return "<circle cx=\"$cx\" cy=\"$cy\" r=\"$r\" />";
}

function carreInscrit($cx,$cy,$r){
	$l=$r*(sqrt(2))/2;
	$valeurWidth=($cx-(($l)/2));
	$valeurHeight=($cy-(($l)/2));
	return "<rect x=\"$l\" y=\"$l\" width=\"$valeurWidth\" height=\"$valeurHeight\" />";

}

?>
