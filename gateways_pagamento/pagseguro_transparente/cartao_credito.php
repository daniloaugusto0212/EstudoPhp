<?php

include('hidden.php');

    ini_set('max_execution_time', '0');

if (isset($_POST['gerar_sessao'])) {
    $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions?email=' . EMAIL_PAGSEGURO . '&token=' . TOKEN_PAGSEGURO . '';
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $retorno = curl_exec($curl);
    curl_close($curl);
    $session = simplexml_load_string($retorno);
    die(json_encode($session));
} elseif (isset($_POST['fechar_pedido'])) {
    $data = [
        'email' => EMAIL_PAGSEGURO,
        'token' => TOKEN_PAGSEGURO,
        'paymentMode' => 'default',
        'paymentMethod' => 'creditCard',
        'receiverEmail' => EMAIL_PAGSEGURO,
        'currency' => 'BRL',
        'extraAmount' => '0.00', //Caso deseje colocar algum valor extra
        'itemId1' => '1',
        'itemDescription1' => 'Camiseta',
        'itemAmount1' => number_format($_POST['amount'], 2, '.', ''),
        'itemQuantity1' => '1', //quantidade do item
        'notificationURL' => 'https://dankicode.com',
        'reference' => uniqid(),
        //Informaçõies do usuário
        'senderName' => 'Pessoa que está comprando',
        'senderCPF' => CPF,
        'senderAreaCode' => '11',
        'senderPhone' => '25695473',
        'senderEmail' => 'c29293888717991657379@sandbox.pagseguro.com.br',
        'senderHash' => $_POST['hash'],
        'shippingAddressStreet' => 'Rua Moisés Alves dos Santos',
        'shippingAddressNumber' => ADDRESS_NUMBER,
        'shippingAddressComplement' => 'Casa 2',
        'shippingAddressDistrict' => 'Jd das Oliveiras',
        'shippingAddressPostalCode' => '08111510',
        'shippingAddressCity' => 'São Paulo',
        'shippingAddressState' => 'SP',
        'shippingAddressCountry' => 'BRA',
        'shippingType' => '3',
        'shippingCost' => '0.00',
        'creditCardToken' => $_POST['token'],
        'installmentQuantity' => $_POST['parcelas'],
        'installmentValue' => number_format($_POST['valorParcela'], 2, '.', ''),
        'noInterestInstallmentQuantity' => 4,
        'creditCardHolderName' => 'DANILO AUGUSTO',
        'creditCardHolderCPF' => CPF,
        'creditCardHolderBithDate' => '02/12/1985',
        'creditCardHolderAreaCode' => '11',
        'creditCardHolderPhone' => TELEPHONE_NUMBER,
        'billingAddressStreet' => 'Rua Moisés Alves dos Santos',
        'billingAddressNumber' => ADDRESS_NUMBER,
        'billingAddressComplement' => 'Casa 2',
        'billingAddressDistrict' => 'Jd Das Oliveiras',
        'billingAddressPostalCode' => '08111510',
        'billingAddressCity' => 'São Paulo',
        'billingAddressState' => 'SP',
        'billingAddressCountry' => 'BRA'
        ];
        $query = http_build_query($data);
        $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/transactions';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded;charset=UTF-8'));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $query);

        $retorno = curl_exec($curl);
        $xml = json_encode(simplexml_load_string($retorno));

        die($xml);
}
