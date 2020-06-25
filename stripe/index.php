<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRIPE</title>
</head>
<body>
<?php
    $valor = 147.90;
    $valor = $valor*100;
?>
<form action="processar.php" method="POST">
<input type="hidden" name="amount" value="<?php echo $valor ?>">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_51GxjerJTnDtd1yAY4sM0VWXkNf2H8IJxs1pUEJxukgKeEayTKJXvu9XxZvJgYajXdkRS1T1Ch3UQbwlYLMWxqvhr00RwFG7KEU"
    data-amount="<?php echo $valor ?>"
    data-name="SiteDan" 
    data-label="Pagar com cartão"
    data-currency="brl"
    data-panel-label="Pagar"
    data-description="Pagamento referente ao seu pedido"
    data-image="logo.png"
    data-locale="auto">
  </script>
</form>
</body>
</html>