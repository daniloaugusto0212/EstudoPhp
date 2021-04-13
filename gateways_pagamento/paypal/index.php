<?php
    require('vendor/autoload.php');

    $api = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential('AfYKoq0_K6lPnkRfIrMW7bGTVFLBC8Em5WGWKX_cPpt14jwjVNyyoPSknOvVENJHoAeYHZisU9aG1lGr','EFpuE0piQO3yQkUV_QmE3agsjByuZ0YwFF0G65fJe08epPjIhXBSaWi95Ni20GjAb1h_tcKD_oIbymtj')
    );


    $payer = new \PayPal\Api\Payer();
    $payer->setPaymentMethod('paypal');

    $amount = new \PayPal\Api\Amount();
    $amount->setCurrency('BRL')->setTotal('200.00');

    $transaction = new \PayPal\Api\Transaction();

    $transaction->setAmount($amount);

    $transaction->setInvoiceNumber(time());

    $redirectUrls = new \PayPal\Api\RedirectUrls();

    $redirectUrls->setReturnUrl('http://localhost/dankiCode/Gateways%20de%20pagamento/paypal/obrigado.php');
    $redirectUrls->setCancelUrl('http://localhost/dankiCode/Gateways%20de%20pagamento/paypal/cancelar.php');

    $pagamento = new \PayPal\Api\Payment();
    $pagamento->setIntent('sale');
    $pagamento->setPayer($payer);
    $pagamento->setTransactions(array($transaction));
    $pagamento->setRedirectUrls($redirectUrls);

    try {
        $pagamento->create($api);   
        header('Location: '.$pagamento->getApprovalLink());
    } catch (Exception $e) {
        //throw $th;
    }


?>