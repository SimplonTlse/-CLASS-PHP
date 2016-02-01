<?php

// Mais que nous réserve ce tab.php : tableau ? tabouret ? 

$monTableau = array(20, "mars", 1990);

print_r($monTableau);

// $tabCourt = [20, "mars", 1990];

// print_r($tabCourt);
echo "\n";
echo $monTableau[0]; // Le premier élément est à l'indice 0

$alpha = array("jour"=>20, "mois"=>"mars", "année"=>1900 );
print_r($alpha);

echo $alpha["mois"]; // valeur associée à la clé "mois"
echo "\n";
echo $alpha["année"];
echo "\n";


// SUPERGLOBALS : dispo partout
echo "GLOBALS:";
echo "\n";
echo $GOBALS;
echo "\n";
echo $_SERVER;
print_r($_SERVER);
echo "\n";
echo $_ENV;
echo "\n";
print_r($_ENV);
echo "\n";
echo $_GET;
echo "\n";
print_r($_GET);
echo "\n";
echo "\n";
