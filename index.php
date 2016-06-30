<?php

$file = fopen("texte.txt", "r");
var_dump(fread($file, filesize("texte.txt")));
fclose($file);
//Utiliser les 3 fonctions systématiquement

//Pour ecrire dans un fichier
$file = fopen("texte.log", "a");
fwrite($file, date("Y-m-d-H:i:s")." : Le script a été ouvert\r\n");
fclose($file);


?>