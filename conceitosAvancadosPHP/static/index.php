<?php
    function teste(){
        static $n = 0;
        $n++;
        return $n;
    }
/*
    echo teste();
    echo '<br/>';
    echo teste();

    */

    class Teste
    {
        public function mostrar(){
            static $n = 0;
            $n++;
            return $n;

        }
    }

    $t = new Teste();
    echo $t->mostrar();
    echo '<br/>';
    echo $t->mostrar();

?>