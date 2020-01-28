<?php
   final class Filha{

        public function mostrarOla(){
            echo 'Olá, Mundo';

        }
   } 

   class Pai{

        public function mostrarTchau(){
            echo 'Tchau Mundo';

        }
   }

   $pai = new Pai;

   $pai->mostrarTchau();


?>