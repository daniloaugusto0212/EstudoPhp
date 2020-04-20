<?php
    class Classe1  
    {
        public function index(){
            echo 'Chamando a classe 1';
        }
    }

    class Classe2
    {
        public function index(){
            echo 'Chamando a classe 2';
        }

        public function callBack($func){
            $func();
        }
    }

    $class1 = new Classe1;
    $class2 = new Classe2;

    $class2->callBack(function() use ($class1){
        $class1->index();
    });


    
    
?>