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


?>
