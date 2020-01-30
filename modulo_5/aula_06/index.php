<?php
    //Arrays
    
    //Primeira forma de declarar array
    $nome = array('Guilherme', 'João', 'Felipe');

    //Segunda forma de declarar array
    $nome[] = 'João';
    $nome[] = 'Felipe';

    //Terceira(e mais atual),  forma de declarar array
    $nome[0] = 'João'; 
    $nome[100] = 'Danilo';

    //Quarta (e mais atual),  forma de declarar array
    $variaveis = ['Guilherme', 'João', 'Filipe'];

    echo $nome[100];

    $informacao['nome'] = 'Danilo';
    $informacao['idade'] = 35;
    $informacao['cidade'] = 'São Paulo';


    echo $informacao['nome'];
    echo '<br/>';
    echo $informacao['idade'];
    echo '<br/>';
    echo $informacao['cidade'];
    echo '<br/>';
    

?>