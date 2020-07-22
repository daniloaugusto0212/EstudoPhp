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
                            <option value="visa">Visa</option>
                        </select>
                    </div>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valores">Valor: </label>
                        <select class="form-control" name="valores" id="">
                            <option value="199.00">1x de R$199.00</option>
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
    <script>
        
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