<!doctype html>
<html lang="pt-br">
  <head>
    <title>Pagseguro Transparente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <br>
  <br>
  <section class="pagamento">  
    <div class="container">
    <h2>Efetuar Pagamento</h2>
    <br>
        <form method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nome">Nome Completo: </label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Insira seu nome...">
                    </div><!--col-md-12-->
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="cpf">CPF: </label>
                        <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF...">
                    </div>
                </div><!--col-md-12-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bandeira">Bandeira: </label>
                        <select class="form-control" name="bandeira" id="">
                            
                        </select>
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valores">Valor: </label>
                        <select class="form-control" name="valores" id="">
                            
                        </select>
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numero_cartao">Número do Cartao: </label>
                        <input name="numero_cartao" type="text" class="form-control"  placeholder="Número do cartão">
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mes_validade">Mês de Validade: </label>
                        <input name="mes_validade" type="text" class="form-control"  placeholder="MM">
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ano_validade">Ano de Validade: </label>
                        <input name="ano_validade" type="text" class="form-control"  placeholder="AA">
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cvv">CVV: </label>
                        <input name="cvv" type="text" class="form-control"  placeholder="CVV do cartão">
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-12">
                    <button name="acao" type="submit" class="btn btn-primary">Enviar!</button>
                </div>
            </div>
        </form>
    </div>
  </section> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Modo de testes -->
    <script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <!-- Basta retirar o 'sandbox' para entrar em modo de produção -->

    <script>

        valor = 400.50;
        var imagens = [];

        //Listar bandeiras

        $.ajax({
            dataType:'json',
            url:'cartao_credito.php',
            method:'post',
            data:{'gerar_sessao':'true'}
        }).done(function(data){
            PagSeguroDirectPayment.setSessionId(data.id);
            PagSeguroDirectPayment.getPaymentMethods({

                success: function(response){
                    var bancos = '';
                    var bandeiras = '';

                    $.each(response.paymentMethods.CREDIT_CARD.options,function(key,value){
                        imagens[value.name.toLowerCase()] = 'https://stc.pagseguro.uol.com.br'+value.images.MEDIUM.path;
                        bandeiras+='<option value="'+value.name.toLowerCase()+'">'+value.name+'</option>';
                    })
                    $('select[name=bandeira]').html(bandeiras);
                }
            })

        })

    //Detectando a bandeira do cartão.

    $('input[name=numero_cartao]').on('keyup',function(){
        if ($(this).val().length == 6) {
            PagSeguroDirectPayment.getBrand({
                cardBin:$(this).val(),
                success:function(v){
                    var cartao = v.brand.name;

                    PagSeguroDirectPayment.getInstallments({
                        amount:valor,
                        maxInstallmentNoInterest:4, //Quantidade o parcelamento sem juros
                        brand:cartao,
                        success:function(data){
                            var bandeirasSelect = $('select[name=bandeira]');
                            bandeirasSelect.find('option').removeAttr('selected');
                            bandeirasSelect.find('option[value='+cartao+']').attr('selected','selected');

                            //Listar opções de parcelamento

                            $.each(data.installments[cartao],function(index,value){
                                var htmlAtual = $('select[name=valores]').html();
                                var valorParcela = value.installmentAmount;
                                var juros = value.interestFree == true ? ' sem juros' : ' com juros';$('select[name=valores]').html(htmlAtual+'<option value="'+(index+1)+':'+valorParcela+'">'+valorParcela+juros+'</option>');
                            })
                        }
                    })
                }
            })
        }
    })

    //Formulário principal
        
        $('form').submit(function(e){
            e.preventDefault()
            disableForm()            
        })

        function disableForm(){
            $('form').animate({'opacity':'0.4'})
            $('form').find('input').attr('disabled','disabled')
            $('form').find('select').attr('disabled','disabled')
            $('form').find('button').attr('disabled','disabled')        
        }

        function enableForm(){
            $('form').animate({'opacity':'1'})
            $('form').find('input').removeAttr('disabled')
            $('form').find('select').removeAttr('disabled')
            $('form').find('button').removeAttr('disabled')
        }
    </script>
  </body>
</html>