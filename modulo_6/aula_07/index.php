<?php

	$nome = 'Guilherme';

	/*switch ($nome) {
		case 'Guilherme':
			echo 'Minha variável é Guilherme';
			break;
		case 'João':
			echo "Minha variável é João";
			break;
		
	}*/

	//Break  para loop for, while, do, foreach, e switch.
	for($i = 0; $i < 10; $i++){
		if ($i == 5) {
			continue; //Pula o número 5
		}
		echo $i;
		echo "<hr>";
		/*
		if ($i == 5)
			break;
			*/
	}
	/*$var = false;

	if($var = true)
		$nome = 'Guilherme';
	$idade = 23;

	echo $idade;
	echo "<br>";
	echo $nome;  */  



?>