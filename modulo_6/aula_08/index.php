<?php

/*
$array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
$array2 = array("chave3"=>"valor3", "chave4"=>"valor4");
$array3 = array("chave5"=>"valor5");
$result = array_merge($array1, $array2, $array3); //Serve para unir 1 ou mais arrays
print_r($result);

*/



/*
$array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
$array2 = array("chave1"=>"outrovalor", "chave4"=>"valor4");

print_r(array_intersect_key($array1, $array2)); //Serve para retornar valores com a mesma chave em 1 ou mais arrays

*/


$arr = ['<p>guilherme</p>', 'joão', '<h1>fabricio</h1>'];

print_r(array_map('strip_tags', $arr)); //Serve para aplicar uma função em todos os valores do array
?>