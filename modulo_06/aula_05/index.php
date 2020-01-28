<?php
//Trabalhando com datas


/*
date_default_timezone_set('America/Sao_Paulo'); //Hora atual de São Paulo

    $data = date('d/m/Y H:i:s', time()+(60)*10); //DAta e hora atual, time() adiciona o tempo escolhido em segundos


    echo $data;*/
    $titulo_site = 'Título do meu site';

    include('header.php');


?>
<h1>Meu conteúdo da home!</h1>

<?php

    include('footer.php');
?>