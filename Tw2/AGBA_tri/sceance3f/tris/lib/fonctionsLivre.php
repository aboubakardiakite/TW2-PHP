<?php

require('fonctionsComparaison.php');
function readBook($file){
   $line  = fgets($file);
   $tab = array();

   while (($line !==FALSE) && trim($line)==="")  {
     $line = fgets($file);

   }
    while (($line !==FALSE) && trim($line)!=="") {
      $res = explode(":",$line);
      if (count($res) !==2)
           throw new Exception("absence de :");

      $tab[trim($res[0])] = trim($res[1]);
      $line = fgets($file);
    }

    if (count($tab)==0){
      return FALSE;
    }
    else {
      return $tab;
    }
}



 function elementBuilder($elementType, $content, $elementClass=""){

   return "<".$elementType." class= '".$elementClass."'>".$content."</".$elementType.">";
 }

function authorsToHTML($authors){
  $res = explode(" - ", $authors);
  return "<span>".implode("</span><span>", $res)."</span>";
}

function coverToHTML($fileName){
  return "<img src=\"couvertures/".$fileName."\" alt= \"image de couverture\"/>";
}

function propertyToHTML($propName,$propValue){
  switch ($propName) {
    case 'titre':
      $elt= "h2"; $content = $propValue;
      break;
    case 'couverture':
      $elt= "div"; $content= coverToHTML($propValue);
      break;

    case 'auteurs':
      $elt= "div"; $content=authorsToHTML($propValue);
      break;

    case 'année':
      $elt= "time"; $content= $propValue;
      break;

    default:
      $elt= "div"; $content=$propValue;
      break;
  }
  return elementBuilder($elt,$content,$propName);

}

function bookToHTML($book){
  $cover = propertyToHTML("couverture",$book["couverture"]);
  $description = "<div class=\"description\">";
   foreach ($book as $cle => $val) {
     if ($cle !="couverture"){
        $description.= propertyToHTML($cle,$val);}
   }
  $description.= "</div>";
  return "<article class=\"livre\">\n".$cover."\n".$description."</article>";
}


function loadBiblio($file){

   $tab = readBook($file);

   $res =array();
  while ($tab !== FALSE){
    $res[]= $tab;
    $tab = readBook($file);
  }
  return $res;
}

function biblioToHTML($liste, $sort="none"){
  $res = "";
  switch($sort){
    case "titles":
      usort($liste, "cmpBytitle");
      break;

    case "categories":
      usort($liste, "cmpByCategories");
      break;

    case "none":
      break;

    default:
      throw new Exception("unknown sort");

  }

  foreach($liste as $l){

    $res.=bookToHTML($l);
  }
  return $res;
}



?>
