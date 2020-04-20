<?php
    namespace Models;

    class ContatoModel{

        public static function enviarFormulario(){
            $mail = new \Email('smtp.hostinger.com.br','contato@dansol.com.br','','Danilo');
            $mail->addAdress('contato@dansol.com.br','DanSol');
            $mail->formatarEmail(array('assunto'=> 'Mensagem do site','corpo'=>'Aqui é uma mensagem do site'));
            $mail->enviarEmail();
        }
    }  
        
    
?>