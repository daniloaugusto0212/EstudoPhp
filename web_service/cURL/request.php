<?php

    if (isset($_POST['request']) && $_POST['request'] == 'name_return') {

        //seleciona as notícias
        $noticias = array('titulo'=>array('noticia 1','noticia 2'),'conteudo'=>array('conteudo da noticia 1','conteudo da noticia 2'));
        die(json_encode($noticias));
    }


?>