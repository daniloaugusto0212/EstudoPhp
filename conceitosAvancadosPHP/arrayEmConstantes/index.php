<?php
    //pode-se definir um array como uma constante
    define('DADOS', array('host'=>'localhost','dbname'=>'devweb','user'=>'root','password'=>'9090909'));

    print_r(DADOS);
    echo '<br>';
    echo DADOS['user'];

?>