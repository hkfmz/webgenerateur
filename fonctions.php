<?php

//* Nombre de page
$typedesite=0;

//* Nombre de page
$nombredepage=0;

function spa()
{
    echo "\n\033[32mHEADER:\033[0m\n";
    echo "\033[32m----------------------------------------------------------------------------------\033[0m\n\n";
echo "Liste d'elements possible de l'entête du site :\n";
echo "[A]-Mini bar d`infos\n";
echo "[B]-Logo\n[C]-Navbar\n[D]-Logo + navbar\n";
echo "[E]-Intro text\n[F]-Intro image\n[G]-Intro image + text\n[H]-Intro image + text + formulaire\n";
echo "[I]-Intro image + text + bouton\n[J]-Intro slide images\n[K]-Intro slide images + text\n";
echo "[L]-Intro slide images + text + bouton\n[M]-Intro slide images + text + formulaire\n[N]-Intro vidéo\n";
echo "[O]-Intro vidéo + text\n[P]-Intro vidéo + text + bouton\n[Q]-Intro vidéo + text + formulaire\n";
echo "\033[32m----------------------------------------------------------------------------------\033[0m\n\n";

echo "Renseignez le nombre de composant à intégrer dans votre Header :";
$nb_composant =readline("");

// * Obligation à renseigner une valeur
while (empty($nb_composant) OR !is_numeric($nb_composant))
{
    print "Veillez renseignez le nombre de composant à intégrer dans votre Header :";
    $nb_composant = readline("");
}

echo "À present renseigner hiérarchiquement le(s) $nb_composant composant(s) à y intégrer\n\n";
$composant = null;
$composants = [];

for($i=1; $i<=$nb_composant; $i++)
{
    $composant = readline("Composant n° $i: ");
    $composants[] = $composant;
}

echo "\n---------------------------------\n\n";

foreach ($composants as $j => $valeurs) {
    $j = $j + 1;
    echo "Composant n°" . $j . " = " . "$valeurs\n";
    //echo "$valeurs\n";
}

}

?>