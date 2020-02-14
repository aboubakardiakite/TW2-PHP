<?php
function compareAbs($x, $y){
return abs($x)-abs($y);
} 

function comparerChainesParLongueur($tab){
	$temp;
	for($i=0;$i<count($tab);$i++){
		for($j=0;$j<count($tab);$j++){
			if(strlen($tab[$i])<strlen($tab[$j])){
				$temp=$tab[$i];
				$tab[$i]=$tab[$j];
				$tab[$j]=$temp;
			}
		}
	}
	return $tab;
}

function comparerChainesParLongueurPlus($tab){
	$temp;
	for($i=0;$i<count($tab);$i++){
		for($j=0;$j<count($tab);$j++){
			if(strlen($tab[$i])<strlen($tab[$j])){
				$temp=$tab[$i];
				$tab[$i]=$tab[$j];
				$tab[$j]=$temp;
			}
			else if(strlen($tab[$i])==strlen($tab[$j])){
					if(strcmp($tab[$i],$tab[$j])>0){
						$temp=$tab[$i];
						$tab[$i]=$tab[$j];
						$tab[$j]=$temp;
					}
			}
		}
	}
	return $tab;
	
}

function compareParTitre($titre1,$titre2){
	return strcmp($titre1['titre'],$titre2['titre']);
}

function compareParcategories($categorie1,$categorie2){
        return strcmp($categorie1['catégorie'],$categorie2['catégorie']);
}




?>
