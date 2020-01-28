<?php
    //Arrays single
    $arr = ['guilherme', 'joao'];
    $arr = array('guilherme', 'chave2'=>'joao');

    $arr[0] = 'guilherme';
    $arr[] = 'joao';

    //Arrays multidimensionais
    $arr2 = array(array('Guilherme', 'João'), array(23, 45));

    $arr2[0] = array('Guilherme', 'João'); 

    echo $arr2[1][0];
    
    


?>