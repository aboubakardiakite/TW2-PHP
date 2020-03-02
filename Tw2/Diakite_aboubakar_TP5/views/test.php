<?php
const FIG_VALUES = [ // valeurs autorisées pour 'fig'
        "Maître Yoda",
        "Luke Skywalker",
        "Anakin Skywalker",
        "Dark Vador",
        "Obi-Wan Kenobi",
        "Han Solo",
        "Princesse Leia",
        "Padmée Amidala",
        "Empereur Palpatine",
        "R2D2",
        "C3PO",
        "Chewbacca",
        "Rey",
        "Finn",
        "Poe Dameron",
        "Kylo Ren"
        ];


    $figu="<select name=\"fig[]\" multiple size=\"16\" >";
    foreach (FIG_VALUES as $keys => $value) {
      $figu.="\n\t\t <option value=\"$value\" >$value</option>";
      $figu.="<br/>";
  }   
   $figu.="</select>";
   echo $figu;
   

       ?>

