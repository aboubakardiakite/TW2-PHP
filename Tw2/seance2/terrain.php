<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Premier exercice PHP</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <header>
            <h1>Premier exercice PHP</h1>
            <h2>Réalisé par <span class="nom">Aboubakar Diakite</span></h2>
        </header>

        <section>
        <?php
             $file=fopen('terrain.txt','r');
             $ligne=TRUE;
             
             while($ligne!==FALSE){
                 $ligne=fgets($file);
                 
                     echo "$ligne"."<br/>";
                 
             }
             
             fclose($file);
        ?>
        </section>




        
</body>
</html>
