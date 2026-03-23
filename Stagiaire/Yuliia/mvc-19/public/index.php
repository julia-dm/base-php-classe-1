<?php
# Stagiaire\Yuliia\mvc-19\public\index.php

#ICI
/* Chargement une seul fois
et qui arrete 
le script en cas d'échec
*/
require_once "../config.php";

#Affichage de la racine du projet 
echo 'Racine du projet dans ROOT_PATH : '.ROOT_PATH;
echo "<hr>";

#Affichage du __DIR__
echo 'Chamain ver le dossier public via __DIR__ : '.__DIR__;
