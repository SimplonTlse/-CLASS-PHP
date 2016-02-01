<?php

// if.php

/*
On va créer une fonction generation, avec un paramètres qu'on appellera age.
Si le l'âge est inférieur à 16 : on renvoie "Tu es un enfant"
si égal à 18 : on renvoie "bravo, on va faire la fête"
Si supérieur à 18 : 'tu es un adulte'
Sinon on renvoie "Euh ... C'est louche."

*/
function generation( $age ){	
	$resultat = "Euh... C'est louche";
	
	if($age <= 16 ){
		$resultat = "Tu es un enfant gamin !";
	}elseif($age < 18){ 
		$resultat = "On y est presque";
	}elseif($age == 18){
		$resultat = "Tu es majeur ! Bravo !";
	}elseif($age > 18){
		$resultat = "Bonjour les adultes";
	}else{
		$resultat = "Vraiment louche";
	}
	return $resultat;
}

echo generation(0); // enfant
echo generation(15); // enfant
echo generation(16); // enfant
echo generation(17); // corrgié
echo generation(18);// majeur
echo generation(19); //adulte
echo generation("Simplon"); // enfant
echo generation(true); // Enfant
echo generation(array(0,1,2)); // Adulte

echo "\n";
echo "\n";
