<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">

<head>

  <meta charset="UTF-8" />
  <title>Test PHP</title>

</head>

<body>

<?php

require('lib/fonctionsLivre.php');

// Lecture  du fichier et mémorisation dans des variables PHP :
$file = fopen("data/livres.txt",'r');
$biblioHTML = loadBiblio($file);
$sort = "none";
if (isset($_GET['ordre']))
  if ($_GET['ordre'] == 'titres')
      $sort = "titles";
  else if($_GET['ordre'] =='categories'){
      $sort = "categories";}

  else if ($_GET['ordre']=='aucun')
      $sort = "none";

  else {
      return;
  }

$livre = biblioToHTML($biblioHTML,$sort);
// inclusion de la page template :
require('views/bibliotheque.php');


?>

</body>

</html>
