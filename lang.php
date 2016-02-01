<?php

// lang.php

$lang = array("Javascript", "HTML", "CSS", "PHP", "OCaml", "Perl", "C#", "C", "B", "Java");

// En Php
foreach( $lang as $valeur){ 
	// Prendre le tableau $lang, et mettre dans la variable $valeur, les valeurs successives de ce tableau.
	echo $valeur ."\n";
}
/*
Vous allez rajouter une valeur booléenne à chacun des langages du tableau (qui deviennent donc les clés).
Si vous connaissez le langage : true, sinon false.
*/

$lang = array( "Javascript"=> true, "HTML"=> true, "C"=> true, "B"=> false, "Perl"=> false);

echo "Avec les clés \n";

function iKnow( $language, $known ){
	return;
}

// On récupère successivement la cle et la valeur du tableau $lang
foreach($lang as $cle=>$valeur){
	// On parcourt le tableau $lang
	// Successivement, nous mettons la clé et la valeur associée dans les variables '$cle' et '$valeur'.
	// A chaque itération, on avance dans le tableau.
	echo $cle . " : " . $valeur . "\n";
}
// Relancer l'exécution du fichier. QUe voyez-vous ?








