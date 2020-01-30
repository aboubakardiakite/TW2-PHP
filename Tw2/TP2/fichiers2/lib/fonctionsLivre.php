<?php
// ajouter ici les fonctions à développer

function readBook($file){
	$ligne=fgets($file);
        $deuxPoints=":";
        $array=array();
        while($ligne !==False){
                $tailleChaine=strlen($ligne);
                $indiceDeuxPoint=strpos($ligne,$deuxPoints);
                $keys=trim(substr($ligne,0,($indiceDeuxPoint)));
                $valeur=trim(substr($ligne,($indiceDeuxPoint+1),($tailleChaine+1)));
                $array[$keys]=$valeur;
                $ligne=fgets($file);
        }
        fclose($file);
        print_r($array);



}



?>
