<?php

//* Recuperation du nombre de pages pour itération
echo "\nNombre de page :";
$nbPage=readline();

//* Tant que le nombre de page n'est pas précisé obliger le choix
while ($nbPage < 1 || !is_numeric($nbPage)){
echo "vous devez choisir un nombre de page\n\n";
$nbPage = readline("Nombre de page > ");
}

// $tabPage=array();
//* Génération de chaque pages
for ($i=0; $i < $nbPage; $i++){
//* Le titre du site
echo "\nTitre sur la page d`accueil (page ".($i+1)."):";
$nomDePage=readline();

//* Nom du fichier
$page="doc/index.html";

//* Ouverture et création des fichers

$myfile = fopen($page, "w");

//* entête
$entete = '
<!DOCTYPE HTML>
<html>
<head>
<title>'.$nomDePage.'</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>';

//* Ajout de l'entête & titre
fwrite($myfile, $entete);

//* Le Body
$myheader = theheader($nomDePage);
$body ='
<body class="homepage is-preload">
<div id="page-wrapper">
'.$myheader;

//* Ajout du body, header et grand titre
fwrite($myfile, $body);

//*Le main
$mymain = themain();
$main = $mymain;

//* Ajout du main
fwrite($myfile, $main);

//* Footer
$footer = thefooter().'</div>';

//* Ajout du footer
fwrite($myfile, $footer);

//* SCRIPTS
$scripts = thescripts().'</body>
</html>';

//* Ajout du script
fwrite($myfile, $scripts);

fclose($myfile);

echo "\n\t\033[32m La page ".$page."-".$i." a été créer !\033[0m\n";
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

class Color
{
    const BLACK = "\033[0;30m";
    const DARK_GRAY = "\033[1;30m";
    const BLUE = "\033[0;34m";
    const LIGHT_BLUE = "\033[1;34m";
    const GREEN = "\033[0;32m";
    const LIGHT_GREEN = "\033[1;32m";
    const CYAN = "\033[0;36m";
    const LIGHT_CYAN = "\033[1;36m";
    const RED = "\033[0;31m";
    const LIGHT_RED = "\033[1;31m";
    const PURPLE = "\033[0;35m";
    const LIGHT_PURPLE = "\033[1;35m";
    const BROWN = "\033[0;33m";
    const YELLOW = "\033[1;33m";
    const LIGHT_GRAY = "\033[0;37m";
    const WHITE = "\033[1;37m";

    const BG_BLACK = "\033[40m";
    const BG_RED = "\033[41m";
    const BG_GREEN = "\033[42m";
    const BG_YELLOW = "\033[43m";
    const BG_BLUE = "\033[44m";
    const BG_MAGENTA = "\033[45m";
    const BG_CYAN = "\033[46m";
    const BG_LIGHT_GRAY = "\033[47m";
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// * Obligation à renseigner une valeur
while (empty($nombreDePage))
{
    print "\tRenseigner le nombre de page : ";
    $nombreDePage = readline("");
}