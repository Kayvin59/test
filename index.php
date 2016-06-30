<?php

//fonction equivalentes (lecture)
echo file_get_contents("texte.log");

//Pour ecrire dans un fichier
$file = fopen("texte.log", "a");
fwrite($file, date("Y-m-d-H:i:s")." : Le script a été ouvert.\r\n");
fclose($file);

//equivalent pour ecrire dans un fichier 
$content = file_get_contents("texte.log");
$content .= date("Y-m-d-H:i:s")." : FPC : Le script a été ouvert.\r\n";
file_put_contents("texte.log", $content);

//Pour supprimer un fichier
//unlink("texte.log")

//Veifier si un fichier existe ou non
//is_file est un equivalent
if(file_exists("texte.log")){
	echo "le fichier existe.";
}

//Verifier si un repertoire existe
if( !is_dir('var')){
	mkdir('var');
}

//modifier les permissions d'un fichier
chmod('texte.txt', 0644);

//Deplacer ou renommer un fichier
rename('texte.log', 'var/texte.log');

//Recuperer le nom du dossier courant
//Recuperer le chemin du fichier courant
echo __DIR__;
echo dirname(__FILE__);
echo __FILE__;

//Recuperer la date de derniere modificationd'un fichier
echo date("Y-m-d-H:i:s", filemtime("var/texte.log"));

//Copier un fichier
copy("var/texte.log", "var/texte.log.backup");
?>