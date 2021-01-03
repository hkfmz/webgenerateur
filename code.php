<?php

echo "\n[1]- CREATION \n[2]- MODEL \n[3]- CONFIG \n[4]- FAQ\n\n";

/* while de verification : recevoir forcement une valeur */

	while(empty($choix))
		{ $choix = readline("Choisir une option >>>>>>>>>>>>>>>>>>>>>>>>>> "); }

	while ($choix < 1 || $choix > 4)
	{ echo "vous devez choisir entre 1 et 4\n\n"; $choix = readline("Choisir une option >>>>>>>>>>>>>>>>>>>>>>>>>> "); }
     
     echo "\n";

/* while de verification end*/

/* Switch de personnalisation & création */
	switch ($choix) 
	{
		case '1':

             echo "Nombre de page :";
	         $nombreDePage=readline();
		
			break;

		default:
			
			break;
	}
/* Switch de personnalisation & création end */

?>

