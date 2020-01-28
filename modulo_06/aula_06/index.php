<?php

    $conteudo = 'Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um livro de espécimes. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.';

    echo substr($conteudo,0,20) ; //Recortar uma string

    $nome = 'Guilherme Cherem Grillo';

    $nomes = explode(' ',$nome); //Recortar a variavel transformado em arrays

    //print_r($nomes);

    $nomes = implode(' ', $nomes); // PAra juntar um array com um delimitador ' '

    //echo $nomes;

    $conteudo = '<h1>Guilherme</h1>Outra coisa';

    //echo strip_tags($conteudo); //Retirar todo o código html

    echo htmlentities('<div</div>'); //Mostra o conteúdo html da página

    
?>