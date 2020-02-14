<?php
function compareAbs($x, $y){
  $cmp = abs($x)-abs($y);
    if ($cmp!=0)
    return $cmp;
    else {
      return $x-$y;
    }
}

function comparerChainesParLongueur($s1,$s2){
return strlen($s1)-strlen($s2);

}

function comparerChainesParLongueurPlus($s1,$s2){

  if (comparerChainesParLongueur($s1,$s2) ==0){
    return -strcmp($s1,$s2);
  }
  else {
     return comparerChainesParLongueur($s1,$s2);
  }
}

function cmpByTitle($l1,$l2){
  return strcmp($l1['titre'], $l2['titre']);
}

function cmpByCategories($l1,$l2){
  return strcmp($l1['catégorie'], $l2['catégorie']);
}
?>
