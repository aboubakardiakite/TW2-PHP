<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
 <meta charset="UTF-8" />
 <title>club des fans de Star Wars</title>
 <style type="text/css">
   body {
     font-family : Helvetica ;
     margin-left : 10mm;
     margin-right : 10mm ;
   }
   h1 {
     color : blue ;
   }
   fieldset {
     border : 1px solid blue ;
     margin : 10px ;
   }
   section#errorMessage{
   		background-color : lightyellow;
   		padding : 5pt;
      margin : 10px ;		
   }
   #cp:invalid {color:red}
   
 </style>
</head>
<body>
  <h1>Club des fans de StarWars</h1>

  <p>Sur cette page, vous pouvez commander les figurines de vos personnages
  préférés, et adhérer à notre club. </p>
  
  <?php
    if (isset($errorMessage)){
    	echo "<section id='errorMessage'>\n";
   		echo "  	<p> Erreur : $errorMessage</p>\n"; // à améliorer
    	echo "</section>\n";
   }
  ?>
  
  <form action="factureStarWars.php" method = "get">
    <fieldset>
      <legend>Vos coordonnées</legend>
      <select name="civilite">
        <option value="Mr">Monsieur</option>
        <option value="Mme">Madame</option>
      </select>
      <label for="nom">Nom : </label><input type="text" id="nom" name="nom" size="25" maxlength="100" />
      <label for="prenom">Prénom : </label><input type="text" id="prenom" name="prenom" size="25" maxlength="100" /><br />
      <label for="voie">Numéro et voie : </label><input type="text" id="voie" name="voie" size="60" maxlength="256" /><br />
      <label for="complAd">Complément d'adresse : </label><input type="text" id="complAd" name="compl" size="50" maxlength="256" /><br />
      <label for="cp">Code postal</label><input type="text"  id="cp" name="cp" size="6" maxlength="6" />
      <label for="ville">Ville</label><input type="text"  id="ville" name="ville" size="25" maxlength="100" /><br />
      <label for="consignes"> Indications pour le livreur (digicode, etc ...) </label>
      <textarea id="consignes" name="consignes" cols="90" rows="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button type="reset">Effacer</button>
      <button type="submit" name="valid" value="envoyer">Envoyer</button>
    </fieldset>
  </form>
  
</body>
