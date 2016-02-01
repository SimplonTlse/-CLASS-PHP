<?php

$lang = array( "Javascript"=> true, "HTML"=> true, "C"=> true, "B"=> false, "Perl"=> false);


function iKnow( $language, $known ){
	/* Si le langage est connu
		retourner 'je connais XXX'
	Sinon, retourner "Je ne connais pas YYY".
	*/
	return $language;
}


foreach($lang as $cle=>$valeur){
	echo iKnow($cle, $valeur);
	echo "\n";
}








