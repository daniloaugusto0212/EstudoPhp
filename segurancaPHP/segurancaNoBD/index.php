<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=sistema','root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//Usar somente em mode de desenvolvimento
    
} catch (Exception $e ) {
    //echo $e->getMessage();
    echo "Não foi possível conectar! Tente novamente mais tarde.";
}
    


?>