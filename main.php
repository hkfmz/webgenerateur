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

// sleep(2);

//* Affichage du menu principal
echo "\033[32mMENU:\033[0m\n";
echo "
[1]- Créations\n
[2]- Historiques\n
[3]- Paramètres\n
[4]- Aide\n\n";

//* Obligation au choix & option
while (empty($choix) || $choix < 1 || $choix > 4)
{
	$choix = readline("Choississez une option > ");
}

//* Switch de lancement au choix
switch ($choix)
{
case '1':
//* CREATION ---------------------------------------------------------------
echo "\n\033[32m[1]- Créations:\033[0m\n";
echo "\033[32m---------------\033[0m
\t1- Application web statique\n
\t2- Application web dynamique\n
\t3- Application mobile\n
\t4- Application desktop\n\n";

//* Obligation au choix & option
while (empty($choix2) || $choix2 < 1 || $choix2 > 4)
{
	$choix2 = readline("Choississez une option > ");
}

	switch ($choix2)
		{
			case '1':
			//* APPLICATION WEB STATIQUE ##############################################

			echo "\n\033[32m1- Application web statique:\033[0m\n";
			echo "\033[32m----------------------------\033[0m\n";
			echo "\t1- Basics : [HTML / CSS / JavaScript]\n";
			echo "\t2- Frameworks : [Bootstrap / React JS / Vue JS / Angular JS / Tailwind CSS]\n\n";

			//* Obligation au choix & option
			while (empty($choix3) || $choix3 < 1 || $choix3 > 2)
			{
				$choix3 = readline("Choississez une option > ");
			}

                switch($choix3)
				{
					case '1':
						//* BASICS **************************************************

					echo "\n\033[32m1- Basics:\033[0m\n";
					echo "\033[32m----------\033[0m\n";
					echo "\t1- Mode libre\n\t2- Mode template\n";

						//* Obligation au choix & option
						while (empty($choix4) || $choix4 < 1 || $choix4 > 2)
						{
							$choix4 = readline("Choississez une option > ");
						}

							switch($choix4)
							{
								case '1':
									//* MODE LIBRE |||||||||||||||||||||||||||||||||||||

								break;

								case '2':
									//* MODE TEMPLATE ||||||||||||||||||||||||||||||||||

								break;

							}

					break;

					case '2':
						//* FRAMEWORKS **********************************************

					echo "\n\033[32m2- Frameworks:\033[0m\n";
					echo "\033[32m--------------\033[0m\n";
					echo "\t1- Bootstrap\n\t2- React JS\n\t3- Angular JS\n\t4- Tailwind CSS\n\t5- Vue JS\n";

					break;
				}

			break;
		}

break;

case '2':
	//* HISTORIQUES -------------------------------------------------------
echo "\n\033[32m[2]- Historiques:\033[0m\n";
echo "\033[32m---------------\033[0m";

break;

case '3':
	//* PARAMÈTRES -------------------------------------------------------
echo "\n\033[32m[3]- Paramètres:\033[0m\n";
echo "\033[32m---------------\033[0m";

break;

case '4':
	//* AIDES -----------------------------------------------------------
echo "\n\033[32m[4]- Aide:\033[0m\n";
echo "\033[32m---------------\033[0m";

break;

default:

break;
}

?>

