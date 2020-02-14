<?php
 // Inclusion de la bibliothèque de fonctions :
 require('lib/fonctionsLivre.php');
 
 // Lecture  du fichier et mémorisation dans des variables PHP :
 $file = fopen('data/livres.txt','r');
 $loadBiblio = loadBiblio($file);
 $biblioToHTML = biblioToHTML($loadBiblio,"titres");
 
 // inclusion de la page template :
 require('views/pageBibliotheque.php');
?>
