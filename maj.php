<?php

$prenom = "votre prénom tout en minuscule";

// Première fonction : ucfirst()
echo $prenom;
echo "\n";
echo ucfirst($prenom);
echo "\n";

// Ceci est un commenaire sur une ligne. Mais que fait-on si on est bavard ?

/*
    Ceci est un commentaire
   sur plusieur lignes !!!
   PHP POWER !!
*/

// Fonctions
function concatNom( $prenom, $nom){
    // Corps de la fonction
    $fullName = ucfirst($prenom) . " " . ucfirst($nom);
    
    return $fullName;
} // Pas de ';'

$monNom = concatNom( "maxime", "kappes");
echo $monNom . "\n";








