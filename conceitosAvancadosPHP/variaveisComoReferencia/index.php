<?php
    $nome = "Danilo";
    function teste(&$nome){
        $nome = "João";
    }
    teste($nome);
    echo $nome;
?>