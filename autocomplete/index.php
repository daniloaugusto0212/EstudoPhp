<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="texto" id=" ">
        <input type="submit" value="Pesquisar!" name="acao">
    </form>

    <?php
        $arr = ['danki code é bom','curso danki code','dankicode desenvolvimento web'];
        if (isset($_POST['acao'])) {
            $texto = $_POST['texto'];
            $finalArr = [];
            foreach ($arr as $key => $value) {      
                if (preg_match('/'.$texto.'/',$value)) {
                    $fianlValue = preg_replace('/'.$texto.'/','<b>$0</b>',$value);
                    $finalArr[] = $fianlValue;
                    
                }
            }
            print_r($finalArr);
        }

    ?>
</body>
</html>