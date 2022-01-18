<?php
echo "\n[1]- CREATION \n[2]- MODEL \n[3]- CONFIG \n[4]- FAQ\n\n";

while(empty($choix)){ 
			$choix = readline("Choisir une option > "); 
		}

while ($choix < 1 || $choix > 4){ 
	  echo "vous devez choisir entre 1 et 4\n\n"; 
	  $choix = readline("Choisir une option > "); 
	}
echo "\n";

switch ($choix){

	case '1':
	         echo "Nom de la page + ext :";
	         $nomDePage=readline();
		
		break;
	case 2 : 
		
		// exec("git clone https://github.com/hkfmz/projet.git");
		// exec("whoami");
		// echo getcwd(); 
		
		break;
	default:
			
		break;
	}

?>