<?php
    $nome = "Danilo";
    function teste(){
        global $nome;  //global permite que se utilize dentro da função variáveis de fora
        echo $nome;
    }
    teste();


//Outro exmplo
    class teste  
    {
        function __construct(){
            global $nome;
            echo $nome;
        }
    }
    
    new teste;

?>