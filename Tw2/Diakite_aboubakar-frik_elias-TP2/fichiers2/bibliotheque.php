<?php
 // Inclusion de la bibliothèque de fonctions :
 require('lib/fonctionsLivre.php');
 
 // Lecture  du fichier et mémorisation dans des variables PHP :
 $file = fopen('data/livres.txt','r');
 $library = readBook($file);
 $libraryHTML = libraryToHTML($library);
 
 // inclusion de la page template :
 require('views/pageBibliotheque.php');
?>
