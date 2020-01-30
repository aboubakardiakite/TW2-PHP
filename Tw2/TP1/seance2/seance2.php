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
            $file=fopen('liste_noms.txt','r');
            $ligne=TRUE;
            echo "<ul>";
            while($ligne!==FALSE){
                $ligne=fgets($file);
                if($ligne!==FALSE){
                    echo "<li>".$ligne."</li>";
                    
                }

            }
            echo "</ul>";
            fclose($file);

        ?>
        </section>




        
</body>
</html>
