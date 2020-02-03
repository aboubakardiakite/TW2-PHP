<?php
 // Inclusion de la bibliothèque de fonctions :
 require('lib/fonctionsLivre.php');
 
 // Lecture  du fichier et mémorisation dans des variables PHP :
 $file = fopen('data/exempleLivre.txt','r');
 $book = readBook($file);
 $bookHTML = bookToHTML($book);
 
 // inclusion de la page template :
 require('views/pageLivreUnique.php');
?>