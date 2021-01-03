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

             /*echo "Nombre de page :";
	         $nombreDePage=readline();*/

	         echo "Nom de la page + ext :";
	         $nomDePage=readline();

/* Ouverture et création ficher */
	$myfile = fopen($nomDePage, "w");

	$txt = '<html>
	<head>
		<title></title>
	</head>
	<body style="margin: 0; padding: 0;">
	    <center>
	    	<!--<div style="background-color: #3498c4; height: 40%; width: 100%; ">
	            <img src="https://github.com/ColorlibHQ/email-templates/blob/master/10/images/email.png?raw=true" 
	            style="width: 10%; height: 10%;">	
	    	</div>-->
	    	<table cellspacing="0" cellpadding="100%" border="0" width="100%">

	            <tr bgcolor="#3498c4"> <!--<h3 style="display: block;">header</h3>	-->
	            	<td style="display: flex; justify-content: center; color: white"><img src="https://github.com/ColorlibHQ/email-templates/blob/master/10/images/email.png?raw=true" width="100" 
	            ></td>

	            </tr>

	            <tr>
	            	<td style="text-align: center;"> <h3>Message</h3> Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Quasi vero similique ut labore reprehenderit sit excepturi, nobis. Placeat quisquam cum delectus rem natus, aspernatur corrupti omnis fuga alias, fugiat ullam molestiae suscipit iusto deleniti amet dolorem a voluptas. Corrupti, fuga deleniti laboriosam adipisci rem quos voluptatibus? Iure ad eum doloremque laboriosam doloribus ab saepe autem incidunt dolore quis ullam libero, reprehenderit et dolorem nulla. Adipisci ducimus amet neque, laudantium explicabo pariatur, vel, itaque deleniti nemo est iste, asperiores consequatur doloribus rerum omnis at voluptas iure non et tenetur. Illo perspiciatis, pariatur expedita, deserunt mollitia architecto quis cupiditate blanditiis autem numquam.</td>
	            </tr>';

	fwrite($myfile, $txt);




	$txt = '<tr bgcolor="#001">
	            	<td style="text-align: center; color: white"><h3>footer</h3></td>
	            </tr>

	    	</table>
	    </center>
	</body>
	</html>';


	fwrite($myfile, $txt);

/* Ouverture et création ficher end*/

	fclose($myfile);

		
			break;

		default:
			
			break;
	}
/* Switch de personnalisation & création end */

?>

