<?php
header("Content-type: text/plain;charset=UTF-8");
require("lib/fonctionsComparaison.php");
$tab = array(6,0,-3,12,-15,25,-1,44,19,-8);
echo "tableau de nombres initial : ";
print_r($tab);
echo "tableau trié par la fonction sort : ";
sort($tab);
print_r($tab);
echo "tableau trié par la fonction usort avec la comparaison compareAbs : ";
usort($tab,'compareAbs');
print_r($tab);


$tab = array("abcd","00","bdef","efghij","z","aa","abcde","xyz");
echo "tableau de chaînes initial : ";
print_r($tab);

$funcName = "comparerChainesParLongueur";
echo "tableau trié par la fonction usort avec la comparaison $funcName";
usort($tab,$funcName);
print_r($tab);
// à compléter
$funcName = "comparerChainesParLongueurPlus";
echo "tableau trié par la fonction usort avec la comparaison $funcName";
usort($tab,$funcName);
print_r($tab);
// à compléter

?>
