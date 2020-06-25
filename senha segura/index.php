<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="password" name="senha" id="">
        <input type="submit" value="Enviar!" name="acao">
    </form>
    <?php
        if (isset($_POST['acao'])) {
            $senha = $_POST['senha'];
            if (preg_match('/^[A-Z]{1}[a-z]{2}[0-9]{3,}$/', $senha)) { 
                echo '<h1>Sua senha foi definida</h1>'; 
            }else{
                echo '<h1>Erro! Sua senha precisa ter ao menos um caractere maiúsculo, 2 caracteres normal e 3 número!</h1>';
            }
            
        }
    ?>
</body>
</html>