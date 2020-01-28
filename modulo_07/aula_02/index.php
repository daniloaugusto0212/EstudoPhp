<?php 
	include('Exemplo.class.php');
	//Instancia de objeto
	$exemplo = new Exemplo();
	$exemplo->setVar1('Guilherme');
	echo $exemplo->pegaVar1();
	//$exemplo->var2 = 'Guilherme';
	
	echo "<hr/>";
	$exemplo2 = new Exemplo;
	$exemplo2->setVar1('João');
	echo $exemplo2->pegaVar1();
	//$exemplo2->var2 = 'João';

	/*
	echo $exemplo->var2;
	echo "<br/>";
	echo $exemplo2->var2;
	*/
	//Exemplo::$var3 = 'Outra variável';
	//echo Exemplo::$var3;

	//Exemplo:: metodoEstatico();






 ?>