<?php
    namespace Models;

    class ContatoModel{

        public static function enviarFormulario(){
            $mail = new \Email('smtp.hostinger.com.br','contato@sitedan.com.br','681015','Danilo');
            $mail->addAdress('contato@sitedan.com.br','DanSol');
            $mail->formatarEmail(array('assunto'=> 'Mensagem do site','corpo'=>'Aqui é uma mensagem do site'));
            $mail->enviarEmail();
        }
    }  
        
    
?>