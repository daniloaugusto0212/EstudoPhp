<?php
    session_start();
    $_SESSION['login'] = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <?php
    $logado = true;
    include('pages/home.php');

    ?>
</body>
</html>


