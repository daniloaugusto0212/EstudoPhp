<?php
    require('vendor/autoload.php');

    $api = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential('AfYKoq0_K6lPnkRfIrMW7bGTVFLBC8Em5WGWKX_cPpt14jwjVNyyoPSknOvVENJHoAeYHZisU9aG1lGr','EFpuE0piQO3yQkUV_QmE3agsjByuZ0YwFF0G65fJe08epPjIhXBSaWi95Ni20GjAb1h_tcKD_oIbymtj')
    );

    $paymentId = $_GET['paymentId'];

    $payment = \PayPal\Api\Payment::get($paymentId,$api);

    $execute = new \PayPal\Api\PaymentExecution();

    $execute->setPayerId($_GET['PayerID']);

    try {
        $result = $payment->execute($execute,$api);
        
    } catch (Exceptio $e) {
        echo $e->getMensage();
    }

?>