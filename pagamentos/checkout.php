<?php

$dados = $_GET;
$plano = @$dados["pl"];

if($dados == false OR @$plano == false) {
    echo "Produto não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header">
                <img src="imgs/capa-blend.jpg" alt="" width="100%">
                <img src="imgs/avisos.png" alt="" width="100%">
            </div>
        </div>
    </div>

    <form action="process.php" method="post">
    <div class="row">
    
        <div class="col-md-7">
        <div class="cabecalho">
            <h3>1 - Entrega</h3>
        </div>

        <div class="corpo">
            
        <input type="hidden" name="amount" value="300">
        <input type="hidden" name="itemid" value="<?=$dados["pl"]?>">
        <input type="hidden" name="title" value="Teste">
        <input type="hidden" name="price" value="30000">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="tangible" value="true">
                <label for="nome"><i class="fa fa-user"></i> Nome Completo</label>
                <input type="text" id="nome" name="nome" class="form-control">
                
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" class="form-control">

                <div class="row">
                    <div class="col-6">
                        <label for="cpf"><i class="fa fa-address-card-o"></i> CPF/CNPJ</label>
                        <input type="text" id="cpf" name="cpf" class="form-control">
                    </div>

                    <div class="col-6">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control">
                    </div>
                </div>
                
                <label for="rua">Rua</label>
                <input type="text" id="rua" name="rua" class="form-control">

                <div class="row">
                    <div class="col-6">
                        <label for="numero">Número</label>
                        <input type="text" id="numero" name="numero" class="form-control">
                    </div>

                    <div class="col-6">
                        <label for="complemento">Complemento</label>
                        <input type="text" id="complemento" name="complemento" class="form-control">
                    </div>
                </div>
                
                <label for="bairro"><i class="fa fa-institution"></i> Bairro</label>
                <input type="text" id="bairro" name="bairro" class="form-control">

                <div class="row">
                    <div class="col-6">
                        <label for="cidade"><i class="fa fa-institution"></i> Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="form-control">
                    </div>

                    <div class="col-6">
                        <label for="estado"><i class="fa fa-institution"></i> Estado</label>
                        <input type="text" id="estado" name="estado" class="form-control">
                    </div>
                </div>
            
        </div>
        </div>

        <div class="col-md-5">
        <div class="cabecalho">
            <h3>2 - Pagamento</h3>
        </div>

        <div class="corpo">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#cartao" role="tab" aria-controls="nav-home" aria-selected="true">Cartão de Crédito</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#boleto" role="tab" aria-controls="nav-profile" aria-selected="false">Boleto</a>
        </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="cartao" role="tabpanel" aria-labelledby="nav-home-tab">
                <label for="numcart">Número do cartão</label>
                <input type="text" id="numcart" name="numcart" placeholder="1111-2222-3333-4444" class="form-control">

                <label for="titular">Nome impresso no cartão</label>
                <input type="text" id="titular" name="titular" placeholder="John More Doe" class="form-control">

                <div class="row">
                <div class="col-6">
                    <label for="validade">Validade</label>
                    <input type="text" id="validade" name="validade" placeholder="01/21" class="form-control">
                </div>

                <div class="col-6">
                    <label for="cvv">Código de segurança</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352" class="form-control">
                </div>
                </div>

                <label for="parcelas">Parcelamento</label>
                <input type="text" id="parcelas" name="parcelas" placeholder="10" class="form-control"><br>
                
                <input type="submit" name="btn-cartao" class="btn btn-success form-control" value="Comprar Agora">

            </div><!-- FIM TAB CARTÃO -->

            <div class="tab-pane fade" id="boleto" role="tabpanel" aria-labelledby="nav-profile-tab">
                
            <div class="center">
                <img src="imgs/boleto.png" alt="" width="70%">
            </div>
                <p>
                    Atenção: <br>
                    1 - Boleto (somente à vista) <br>
                    2 - Pagamentos com Boleto Bancário levam até 3 dias úteis para serem compensados e então terem os produtos liberados <br>
                    3 - Depois do pagamento, fique atento ao seu e-mail para receber os dados de acesso ao produto (verifique também a caixa de SPAM) <br>
                </p>

                <input type="submit" name="btn-boleto" class="btn btn-success form-control" value="Comprar Agora!">
            </div><!-- FIM TAB BOLETO -->

            <div class="center">
                <img src="imgs/cadeado.jpg" alt="" width="70%">
            </div> 
        </div>
        

        </div>

        </form>
        </div>

        <p class="center">Essa compra será processada pela PagarMe</p>
    </div>
</div>
</body>
</html>