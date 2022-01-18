<?php

echo "\n\t\033[31m
 _    _      _     _____                           _
| |  | |    | |   |  __ \                         | |
| |  | | ___| |__ | |  \/ ___ _ __   ___ _ __ __ _| |_ ___  _ __
| |/\| |/ _ \ '_ \| | __ / _ \ '_ \ / _ \ '__/ _` | __/ _ \| '__|
\  /\  /  __/ |_) | |_\ \  __/ | | |  __/ | | (_| | || (_) | |
 \/  \/ \___|_.__/ \____/\___|_| |_|\___|_|  \__,_|\__\___/|_|

                                                                 \033[0m\n";

echo "WBGenerator V 1.0\n\n";

sleep(2);

echo "MENU:\n";
echo "
[1]- Création des pages\n
[2]- Templates\n
[3]- Config\n
[4]- Aide\n\n";

while(empty($choix))
{
	$choix = readline("Choisir une option > ");
}

while ($choix < 1 || $choix > 4)
{
echo "vous devez choisir entre 1 et 4\n\n";
$choix = readline("Choisir une option > ");
}

switch ($choix)
{
	case '1':

		echo "\nNombre de page :";
		$nbPage=readline();

		while ($choix < 1 || $choix > 4){
			echo "vous devez choisir entre 1 et 4\n\n";
			$choix = readline("Choisir une option > ");
		}

		$tabPage=array();

		for ($i=0; $i < $nbPage; $i++){
			echo "\nNom + extension de la page ".($i+1)." :";
			$tabPage[]=readline();
			echo "\n\t\033[93m La page ".$tabPage[$i]." a été créer !\033[0m\n";
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

