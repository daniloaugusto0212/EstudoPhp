<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=testes','root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//Usar somente em mode de desenvolvimento
        
    } catch (Exception $e ) {
        //echo $e->getMessage();
        echo "Não foi possível conectar! Tente novamente mais tarde.";
    }

    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE login = '$login' AND senha = '$senha'");
        $sql->execute();
        if ($sql->rowCount() == 1) {
            echo 'Logado!';
        }else{
            echo 'Falha no login';
        }
    }
        


?>

<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="senha">
    <input type="submit" value="Enviar!" name="acao">
</form>