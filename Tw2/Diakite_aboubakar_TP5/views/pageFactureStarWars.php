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

    if($adhesion == 'dejaMembre') 
      $facture->setAdherent();
    else if ($adhesion =='oui')
      $facture->ajouterAdhesion();
      
   // fin de l'ajout
         
    echo $facture->toHTML();

      
  ?>
</body>
</html>








<?php
/*
  <input type="checkbox" name="Luke Skywalker" />
        <label for="Luke Skywalker">Luke Skywalker</label>
        <br/>
  <input type="checkbox" name="Anakin Skywalker" />
        <label for="Anakin Skywalker">Anakin Skywalker</label>
        <br/>
  <input type="checkbox" name="Dark Vador" />
        <label for="Dark Vador">Dark Vador</label>
        <br/>
  <input type="checkbox" name="Obi-Wan Kenobi" />
        <label for="Obi-Wan Kenobi">Obi-Wan Kenobi</label>
        <br/>
  <input type="checkbox" name="Han Solo" />
        <label for="Han Solo">Han Solo</label>
        <br/>
  <input type="checkbox" name="Princesse Leia" />
        <label for="Princesse Leia">Princesse Leia</label>
        <br/>
  <input type="checkbox" name="Padmée Amidala" />
        <label for="Padmée Amidala">Padmée Amidala</label>
        <br/>
  <input type="checkbox" name="Empereur Palpatine" />
        <label for="Empereur Palpatine">Empereur Palpatine</label>
        <br/>
  <input type="checkbox" name="R2D2" />
        <label for="R2D2">R2D2</label>
        <br/>
  <input type="checkbox" name="C3PO" />
        <label for="C3PO">C3PO</label>
        <br/>
  <input type="checkbox" name="Chewbacca" />
        <label for="Chewbacca">Chewbacca</label>
        <br/>
  <input type="checkbox" name="Rey" />
        <label for="Rey">Rey</label>
        <br/>
  <input type="checkbox" name="Finn" />
        <label for="Finn">Finn</label>
        <br/>
  <input type="checkbox" name="Poe Dameron" />
        <label for="Poe Dameron">Poe Dameron</label>
        <br/>
  <input type="checkbox" name="Kylo Ren" />
        <label for="Kylo Ren ">Kylo Ren</label>
        <br/>
*/