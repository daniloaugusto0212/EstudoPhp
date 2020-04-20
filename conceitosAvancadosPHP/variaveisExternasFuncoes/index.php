<?php

    $nome = "Danilo";

    $func = function() use ($nome){
        echo $nome;
    };

    $func();

    //è possivel usar variáveis externas dentro de uma função somente quando a função está dentro de uma variável
?>