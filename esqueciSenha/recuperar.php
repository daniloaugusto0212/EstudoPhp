<?php
    session_start();
    if (isset($_POST['acao'])) {
        $token = uniqid();
       $_SESSION['email'] = $_POST['email'];
       $_SESSION['token'] = $token;
?>
    <h2>Você fez uma solicitação de nova senha!</h2>
    <p>Clique <a href="recuperar.php?token=<?php echo $_SESSION['token'] ?>">aqui</a> para redefinir.</p>

<?php
    }else if ($_GET['token']) {
        $token = $_GET['token'];
        if ($token != $_SESSION['token']) {
            die("O token do parâmetro get não é válido!");
        }else{
            echo '<h2>Redefinição de senha para o email: ' .$_SESSION['email'].'</h2>';
            echo '<form action="" method="post">                
                <input type="password" name="password" id="">
                <input type="submit" name="redefinir" value="Redefinir!">
            </form>';
        }
    
?>

<?php
    }
?>

<?php
    if (isset($_POST['redefinir'])) {
        echo 'A SENHA FOI REDEFINIDA COM SUCESSO!';
    }
?>