<?php
// Produit le code SVG d'un cercle de centre ($cx,$cy) de rayon $r
function cercle($cx,$cy,$r){
    return "<circle cx=\"$cx\" cy=\"$cy\" r=\"$r\" />";
}

function carreInscrit($cx,$cy,$r,$angle=0){
	$l=$r*(sqrt(2));
	$valeurX=($cx-(($l)/2));
	$valeurY=($cy-(($l)/2));
	return "<rect x=\"$valeurX\" y=\"$valeurY\" width=\"$l\" height=\"$l\" transform=\"rotate($angle,0,50)\" />";
}
function triangleInscrit($cx,$cy,$r,$angle=0){
	$X1=$cx;
	$Y1=$cy+$r;
	$X2=$cx-($r*sqrt(3)/2);
        $Y2=$cy-$r/2;
	$X3=$cx+$r*sqrt(3)/2;
	$Y3=$cy-$r/2;
	return "<polygon points=\"$X1 $Y1 $X2 $Y2 $X3 $Y3\" transform=\"rotate($angle,200,80)\" />";

}



?>
