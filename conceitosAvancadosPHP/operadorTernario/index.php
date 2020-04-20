<?php

    $nome = "Danilo";

    $mensagem = 'Olá '.(isset($nome) ? $nome : 'Visitante');

    echo $mensagem;
?>