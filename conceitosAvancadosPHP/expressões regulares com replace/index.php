<?php

    $original = 'danilo@gmail.com.br';

    $modificado = preg_replace('/(.*?)@(.*?)\.(.*?)$/','$1@sitedan.$3',$original);

    echo $modificado;

?>