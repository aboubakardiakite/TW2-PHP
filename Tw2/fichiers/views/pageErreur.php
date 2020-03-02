<?php
function tabToHTML($tb, $withThead = FALSE){
    if ($tb == [])
        return "<p>table vide</p>\n";
    $res  = "<table class=\"assoc_php\">\n";
    if ($withThead)
        $res .= "<thead><tr><th>clé</th><th>val</th></tr></thead>\n";
    $res .= "<tbody>\n";
    foreach ($tb  as $key=>$val){
        $type = gettype($val);
        if (is_array($val))
            $displayVal = tabToHTML($val);
        else
            $displayVal = $val;
        $res .=" <tr><td>$key</td><td>$type</td><td>$displayVal</td></tr>\n";
    }
    $res .="</tbody>\n</table>\n";
    return $res;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Erreur</title>
    </head>
    <body>
        <h1>Erreur</h1>
        <?php
        $liste=['civilite','nom','prenom','voie','complAd','cp','ville'];
        echo tabToHTML($_GET);
        echo tabToHTML(array_intersect_key($GLOBALS,array_fill_keys($liste,1)));
        
        echo "<p>$errorMessage</p>"
        ?>
        
    </body>
</html>