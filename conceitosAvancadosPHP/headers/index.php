<?php
    header('Location: http://sitedan.com.br'); /*redireciona diretamente para o endereço específicado*/
    die();


    header('Content-type: image/jpg');
    readfile('img.jpg');
    die();

?>
