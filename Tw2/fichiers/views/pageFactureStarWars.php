<?php
 require_once('lib/Facture.class.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
 <meta charset="UTF-8" />
 <title>Facture du club des fans de Star Wars</title>
 <link rel="stylesheet" type="text/css" href="factureStarWars.css" />
 <style type="text/css">

 </style>
</head>
<body>
  <?php
    $facture = new Facture($nom, $prenom, $civilite, $voie, $complAd, $cp ,$ville);
    
    // ajout pour question 3
    
    foreach ($fig as $figurine){
      $facture->ajouterFigurine($figurine);
    }

    if($adhesion== 'dejaMembre') 
      $facture->setAdherent();
    else if ($adhesion=='oui')
      $facture->ajouterAdhesion();
      
   // fin de l'ajout
         
    echo $facture->toHTML();

      
  ?>
</body>
</html>
