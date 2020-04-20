<?php
    use FlyingLuscas\Correios\Client;
    use FlyingLuscas\Correios\Service;

    require 'vendor/autoload.php';
    
    $correios = new Client;
    
    print_r($correios->freight()
    ->origin('01001-000')
    ->destination('87047-230')
    ->services(Service::SEDEX, Service::PAC)
    ->item(16, 16, 16, .3, 1) // largura, altura, comprimento, peso e quantidade    
    ->calculate());

?>