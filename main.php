<?php

echo "\n\t\033[96m
 _    _      _     _____                           _             
| |  | |    | |   |  __ \                         | |            
| |  | | ___| |__ | |  \/ ___ _ __   ___ _ __ __ _| |_ ___  _ __ 
| |/\| |/ _ \ '_ \| | __ / _ \ '_ \ / _ \ '__/ _` | __/ _ \| '__|
\  /\  /  __/ |_) | |_\ \  __/ | | |  __/ | | (_| | || (_) | |   
 \/  \/ \___|_.__/ \____/\___|_| |_|\___|_|  \__,_|\__\___/|_|   
                                                                 
                                                                 \033[0m\n";

echo "WBGenerator V.1.0.0\n\n";
sleep(3);

echo "[1]- Création des pages\n[2]- Templates\n[3]- Config\n[4]- Aide\n\n";

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

	         echo "\n[1]- \033[34m Bleu\033[0m\n[2]- \033[0m Noir\033[0m\n[3]- \033[33m Jaune\033[0m\n[4]- \033[31m Rouge\033[0m\n[5]- \033[32m Vert\033[0m\n[6]- \033[35m Magenta\033[0m\n[7]- \033[36m Cyan\033[0m\n[8]- \033[37m Gris clair\033[0m\n[9]- \033[90m Gris foncé\033[0m\n[10]-\033[91m Rouge clair\033[0m\n[11]-\033[92m Vert clair\033[0m\n[12]-\033[93m Jaune Clair\033[0m\n[13]-\033[94m Bleu clair\033[0m\n[14]-\033[95m Magenta clair\033[0m\n[15]-\033[96m Cyan clair\033[0m\n\n";

while(empty($clPage)
	{

	echo "\n Choisissez la couleur souhaitée pour les pages de votre site :";
	$clPage=readline();
	}

while ($choix < 1 || $choix > 4)
{
	echo "vous devez choisir entre 1 et 4\n\n";
	$choix = readline("Choisir une option > ");
}

	         echo "\nFont police principale :";
	         $fpPage=readline();

		     $tabPage=array();

	         for ($i=0; $i < $nbPage; $i++) 
	         { 
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