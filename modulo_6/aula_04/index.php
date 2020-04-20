<?php
    function mostrarNome($nome, $idade){
        echo '<h2>Nome e: </h2>'.$nome;
        echo '<hr/>';
        echo "Idade: $idade";
    }
    function calculardora($numero1 = 2, $numero2 = 5){
        echo ($numero1 + $numero2);
    }
    function verdade(){
        return true;
    }
    function retornarString(){
        return 'Danilo';
    }
    echo retornarString();
    $variavel = verdade();

    //calculardora();
    mostrarNome('João', 35);

?>