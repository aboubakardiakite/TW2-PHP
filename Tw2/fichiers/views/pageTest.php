<?php
// script de test, uniquement pour la partie 1, invoqué par le script principal

require('lib/debugFunctions.php');

if (isset($errorPage) && $errorPage===TRUE) // on est dans la page d'erreur
    $message = "<p class=\"message error\">Il y a une erreur. Message  : <span class=\"error\">$errorMessage</span></p>\n";
else
    $message = "<p class=\"message\">Page normale, pas d'erreur détectée</p>\n";


$parmsAttendus = ['civilite','nom','prenom','voie','complAd','cp','ville','adhesion','fig'];

$parmsString =  '<code class="variable">'.implode($parmsAttendus,'</code>, <code class="variable">').'</code>';

$variablesDefinies = array_intersect_key($GLOBALS, array_fill_keys($parmsAttendus,1));

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Page test</title>
        <style>
            body {
                font-family : arial, sans-serif;
            }
            table.tab_php>*>tr>td {
                border : solid 1px black;
                padding :3px;
            }
            table.tab_php>*>tr>td:nth-child(2n+1) {
                font-family : monospace;
            }
            table.tab_php.variable>*>tr>td:first-child::before,
            code.variable:before {
                content :'$'
            }         
            span.error {
                padding : 3px;
                font-weight : bold;
                    
            }
            p.message{
                color : darkgreen;
            }
            p.message.error {
                color : red;
            }
        </style>
    </head>
    <body>
        <h1>Page test</h1>
        <?php
            echo $message;
        ?>
        
        <h2>Contenu du tableau <code>$_GET</code></h2>
        <?php
            echo tabToHTML($_GET);
        ?>
        
        <h2>Variables globales définies</h2>
        <p>Parmi les noms suivants : <code><?php echo $parmsString ?></code><p>
        <?php
            echo tabToHTML($variablesDefinies,['variable']); 
        ?>
        
    </body>
</html>