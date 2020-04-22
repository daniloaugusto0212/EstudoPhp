<?php
    $login = 'guilherme';

    //pode-se usar md5 para criptografia ou sha1
    $senha = md5('guilherme');
    if (isset($_POST['login'])) {
        if ($_POST['login'] == $login && md5($_POST['senha']) == $senha) {
            echo 'Logado!';
        }else{
            echo 'Falha no login!';
        }
    }
  
?>

<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="senha">
    <input type="submit" value="Enviar!" name="acao">
</form>