<?php
// ajouter ici les fonctions à développer
/*
function readBook($file){
	$ligne=fgets($file);
        $deuxPoints=":";
        $tab=array();
        while($ligne !== FALSE && strlen($ligne)>2){
                
                $indiceDeuxPoint=strpos($ligne,$deuxPoints);
                if($indiceDeuxPoint==FALSE){
                        throw new Exception("pas de :");
                }
                $tailleChaine=strlen($ligne);
                $keys=trim(substr($ligne,0,($indiceDeuxPoint)));
                $value=trim(substr($ligne,($indiceDeuxPoint+1),($tailleChaine+1)));
                $tab[$keys]=$value;
                $ligne=fgets($file);

                
        }
        fclose($file);
        return($tab);                                
}*/
function elementBuilder($elementType,$content,$elementClass=""){
        $espace="";
        if($elementClass!==""){
                $elementClass="class=\"$elementClass\"";
                $espace=" ";
        }
        return "<"."$elementType"."$espace"."$elementClass".">".$content."</".$elementType.">";
}
function authorsToHTML($authors){
                $author=explode("-",str_replace(' ','',$authors));
                return "<span>".implode("</span><span>",$author)."</span>";
    }

function coverToHTML($fileName){
        return "<img src=\"couvertures/$fileName\" alt=\"image de couverture\" />";
}

function propertyToHTML($proName,$proprValue){
        if($proName==="couverture"){
                $propi= elementBuilder("div",coverToHTML($proprValue),$proName);
        }elseif($proName=="titre"){
                $propi= elementBuilder("h2",$proprValue,$proName);
        }else if($proName==="serie"){
                $propi=elementBuilder("div",$proprValue,$proName);
        }else if($proName==="auteurs"){
                $propi= elementBuilder("div",authorsToHTML($proprValue),$proName);
        }else if($proName==="année"){
                $propi= elementBuilder("time",$proprValue,$proName);
        }else{
                $propi= elementBuilder($proName,$proprValue);
        }
    return $propi;    
    }


function bookToHTML($book){
        $res="";
        $dec="";
        $br="<br/>";
        foreach($book as $keys=>$val){
                if($keys==="couverture"){
                        $ed= propertyToHTML($keys,$val);
                        $res.=$ed;
                        $ed.=$br;
                }else{
                        $es=  propertyToHTML($keys,$val);
                        $dec.=$es;
                        $dec.=$br;
                 }
        
                }
        $res.=elementBuilder("div",$dec,"description");
        $res.=$br;
        $art=elementBuilder("article",$res,"livre");
        return elementBuilder("section",$art);
}

function readBook($file){
	$ligne=fgets($file);
        $deuxPoints=":";
        $tab1=array();
        $tab2=array();
        $cpt=0;
        while($ligne !== FALSE){
                while(strlen($ligne)>2){
                $keys='';
                $value='';
                $indiceDeuxPoint=strpos($ligne,$deuxPoints);
                if($indiceDeuxPoint==FALSE){
                        throw new Exception("pas de :");
                }
                $tailleChaine=strlen($ligne);
                $keys=trim(substr($ligne,0,($indiceDeuxPoint)));
                $value=trim(substr($ligne,($indiceDeuxPoint+1),($tailleChaine+1)));
                $ligne=fgets($file);
                $tab1[$keys]=$value;
                
                }
                $tab2[]=$tab1;
                $tab1=array();
                $ligne=fgets($file);
                $cpt=$cpt+1;
                
        }
        if($cpt==0){
                echo "FALSE";
        }
        fclose($file);
        return($tab2);                            
}

function libraryToHTML($file){
        $res="";
        $dec="";
        $br="<br/>";
        foreach($file as $key=>$vale){
                foreach($vale as $keys=>$val){
                        if($keys==="couverture"){
                                $ed= propertyToHTML($keys,$val);
                                $res.=$ed;
                                $ed.=$br;
                        }else{
                                $es=  propertyToHTML($keys,$val);
                                $dec.=$es;
                                $dec.=$br;
                         }
                }
                $res.=elementBuilder("div",$dec,"description");
                $res.=$br;
                $art=elementBuilder("article",$res,"livre");
                $art.=$br;
                $sec=elementBuilder("section",$art);
                $sec.=$art;
        
        }
        
        return $sec;
}


?>
