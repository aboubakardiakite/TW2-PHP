<?php
function tabToHTML($tb, $classes = [], $withThead = FALSE){
    if ($tb == [])
        return "<p>table vide</p>\n";
    $classes[] = "tab_php";
    $classString = implode($classes,' ');
    $res  = "<table class=\"$classString\">\n";
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
