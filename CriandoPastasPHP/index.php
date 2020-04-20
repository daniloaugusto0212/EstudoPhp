<?php
/*
    //Criar pasta
    mkdir('pasta');
    */
    /*
    //Verifica se uma pasta ou um arquivo  existe
    if (is_dir('pasta')) {
        echo 'é uma pasta válida';
    }
    */
    /*
    //Deletar pasta
    rmdir('pasta');
    */

    if ($handle = opendir('pasta')) {        
    
        /* Esta é a forma correta de varrer o diretório */
        while ($file = readdir($handle)) {
            echo "$file\n";
            echo '<br/>';
        }

        closedir($handle);
    
    } 

?>