<?php

/*
    $date = DateTime::createFromFormat('d/m/Y', '02/12/1985');
    echo $date->format('Y-m-d');
    */

    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i:s', strtotime('1993-05-25 19:00:00'));

?>