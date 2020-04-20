<?php
    require('vendor/autoload.php');
    use Carbon\Carbon;
    $tomorrow = Carbon::now()->addDay(); //Pega data de amanhã
    echo date('d/m/Y',strtotime($tomorrow));

    
?>