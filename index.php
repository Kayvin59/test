<?php

//fonction equivalentes (lecture)
echo file_get_contents("texte.log");

//Pour ecrire dans un fichier
$file = fopen("texte.log", "a");
fwrite($file, date("Y-m-d-H:i:s")." : Le script a été ouvert\r\n");
fclose($file);


?>