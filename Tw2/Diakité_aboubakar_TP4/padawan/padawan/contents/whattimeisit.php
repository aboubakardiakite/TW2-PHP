<h2>Quelle heure est-il ?</h2>
<p>        
<?php
date_default_timezone_set('Europe/Paris');
setlocale (LC_ALL, 'fr_FR.utf8','fr_FR.UTF-8');
$theDay = strftime("%A %d %B %Y");
$theTime = strftime("%Hh %Mmn %Ss");
echo "Aujourd'hui, sur Terre, nous sommes le {$theDay}. Il est {$theTime}, heure de Paris";
?>
</p>

<p>NB : cette page est dynamique, en PHP</p>
