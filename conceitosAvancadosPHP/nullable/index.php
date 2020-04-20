<?php

    function teste() :?string{ 
        return 9;
    }

    function teste2(?string $numero){ //sempre será string
        return $numero;
    }

    $numero = teste2(10);

    var_dump($numero);

?>