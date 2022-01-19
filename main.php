<?php

include 'includes.php';

echo "\n\t\033[32m
 _    _      _     _____                           _
| |  | |    | |   |  __ \                         | |
| |  | | ___| |__ | |  \/ ___ _ __   ___ _ __ __ _| |_ ___  _ __
| |/\| |/ _ \ '_ \| | __ / _ \ '_ \ / _ \ '__/ _` | __/ _ \| '__|
\  /\  /  __/ |_) | |_\ \  __/ | | |  __/ | | (_| | || (_) | |
 \/  \/ \___|_.__/ \____/\___|_| |_|\___|_|  \__,_|\__\___/|_|

\033[0m\n";

echo "WBGenerator V 1.0\n\n";

sleep(2);

//* Affichage du menu principal
echo "MENU:\n";
echo "
[1]- Création des pages\n
[2]- Templates\n
[3]- Config\n
[4]- Aide\n\n";

//* Obligation au choix
while(empty($choix))
{
	$choix = readline("Choisir une option > ");
}

//* Obligation au bon choix d'option
while ($choix < 1 || $choix > 4)
{
	echo "vous devez choisir entre 1 et 4\n\n";
	$choix = readline("Choisir une option > ");
}

//* Switch de lancement au choix
switch ($choix)
{
	case '1':

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
	$page="index.html";

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

		break;

		case '2':

			break;

			case '3':

				break;

				case '4':

					break;

					default:

					break;
				}

				?>

