<?php

/*

    $teste = "Guilherme";

  /*  if (preg_match('/ilo/', $teste)) {
        echo 'Verdade';
    }

    preg_match('/(.*?)lhe(.*)/',$teste,$retorno);
    echo $retorno[2];*/
/*
    function cpfValido($cpf){
        //000.000.000-00;
        $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
        return preg_match($expressao, $cpf);
    }
    if (isset($_POST['acao'])) {
        $cpf =$_POST['cpf'];

        if (cpfValido($cpf)) {
            echo 'O cpf é válido.';

        }else{
            echo 'O cpf não é válido.';
        }

    }


?>

<form method="post">
    <input type="text" name="cpf">
    <input name="acao" type="submit">
</form>*/


    $str = '<div>
    <h2>Olá mundo!</h2>
    </div>';

   // preg_match('/(.*)/',$str, $matches); //pega a string $str até a quebra de linha.

    //preg_match('/(.*)/s',$str, $matches); //pega a string $str completa.

    preg_match('/<div>(.*?)<\/div>/s',$str, $matches); // retorna somente o que está dentro da div na posição 1 do array

    

    echo htmlentities($matches[1]); //pega a string $str até a quebra de linha.




?>







