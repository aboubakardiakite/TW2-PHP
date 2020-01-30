<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Premier exercice PHP</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="iniPHP2.css" />
    </head>
    <body>
        <header>
            <h1>Premier exercice PHP</h1>
            <h2>Réalisé par <span class="nom">Aboubakar Diakite</span></h2>
        </header>
        
        
        <section>
            <h2>Exercice 1</h2>
                <h3>Question 1.</h3>
                <?php
                    function chaîne($carak){
                        
                        $newCarak= str_replace("+","</p><p>",$carak);
                        echo "<p>".$newCarak."</p>";
                    }


                ?>
                <?php
                    $carak="Et qu'on sorte+ Vistement : +Car Clément + Le vous mande.";
                    chaîne($carak);
                ?>



                <h3>Question 2.</h3>
                    <?php
                        function enSpan($s){
                            $S=trim($s);
                            $newS= str_replace("-","</span><span>",$S);
                            echo "<span class=\"nom\">".$newS."</span>";
                        }

                    ?>
                    <?php
                        $S="Dupont - Durand";
                        enSpan($S);
                    
                    ?>
        </section>
        
    </body>
    
</html>
