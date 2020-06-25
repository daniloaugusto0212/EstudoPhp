<?php
    require('vendor/autoload.php');


    $stripe = [
        "secret_key"      => "sk_test_51GxjerJTnDtd1yAYx8Y62X7ogWAl1RRIo4lLDrqyZMdR29c8PCXGdXybU6pNhfBMF1PmK9n9YVPEJFDSWkCyzcNu00dPy7FptW",
        "publishable_key" => "pk_test_51GxjerJTnDtd1yAY4sM0VWXkNf2H8IJxs1pUEJxukgKeEayTKJXvu9XxZvJgYajXdkRS1T1Ch3UQbwlYLMWxqvhr00RwFG7KEU",
    ];

    \Stripe\Stripe::setApiKey($stripe['secret_key']);

    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];

    $customer = \Stripe\Customer::create([
        'email' => $email,
        'source'  => $token,
    ]);

    $charge = \Stripe\Charge::create([
        'customer' => $customer->id,
        'amount'   => $_POST['amount'],
        'currency' => 'brl',
    ]);

    echo '<h1>Cobrança efetuada com sucesso!</h1>';

?>      