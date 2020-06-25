<?php 
	
session_start();
setcookie('nome', 'Guilherme', time() - (60*60*24),'/'); //Tempo negativo destroi o cookie

echo $_COOKIE['nome'];

 ?>

