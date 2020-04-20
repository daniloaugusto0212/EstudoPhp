<?php

    $valor = $_POST['nome'] ??  $_POST['outro'] ?? 'Nada deu certo :(';

    echo $valor;

?>