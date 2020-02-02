<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $id = 3;

    //OR ou AND

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Joao',sobrenome='Augusto' WHERE nome='Joao' OR nome='Guilherme'");

    if ($sql->execute()) {
        echo 'Meu cliente foi atualizado com sucesso!';
    }

?>