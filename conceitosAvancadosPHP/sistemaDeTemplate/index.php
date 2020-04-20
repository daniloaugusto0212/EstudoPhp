<?php
    include('Template.php');

    $template = new Template();
    $template->render(['titulo'=>'Meu titulo','nome'=>'Danilo','idade'=> 34],'sobre.phtml');
    


?>