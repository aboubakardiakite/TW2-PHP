<?php
function readItem($file){
	$line = fgets($file);
	while ($line !== FALSE && trim($line) == "")
		$line = fgets($file);
    if ($line === FALSE)
        return FALSE;
	$result = array();
	while ($line !== FALSE && trim($line) != ""){
		$pos = strpos($line,":");
		if ($pos === FALSE){
			throw new Exception("Absence de ':' ");
		}
		$name = trim(substr($line,0,$pos));
		$value = trim(substr($line, $pos+1));
		$result[$name] = $value;
		$line = fgets($file);
	}
	return $result;
}
function readConfig($file){
    $result = array();
    $item = readItem($file);
    while ($item !== FALSE){
        $result[$item['Id']] = $item;
        $item = readItem($file);
    }
    return $result;
}
function listContents($config){
    $res = "<ul>\n";
    foreach ($config as $item){
        $res .= "<li id='item_{$item['Id']}'><a href='?page={$item['File']}'>{$item['Description']}</a></li>\n";
    }
    $res .="</ul>\n";
    return $res;
}

?>