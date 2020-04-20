<?php

    $func = function($nome){
        echo $nome;
    };

    //$func('Danilo');

    function one(){
        $func = function(){
            echo 'Olá mundo!';
        };
        $func();
    }

    call_user_func('one'); //chama a função através de uma string
?>