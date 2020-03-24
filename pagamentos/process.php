<?php

require("../vendor/autoload.php");
$pagarme = new PagarMe\Client('ak_test_bWX2vmWL8FnObv4rgkE6tl5IzFEzEZ');

$dados = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

var_dump($dados);


if(@$dados["btn-cartao"]) {
    $transaction = $pagarme->transactions()->create([
        'amount' => $dados["amount"],
        'card_id' => 'card_ci6l9fx8f0042rt16rtb477gj',
        'payment_method' => 'credit_card',
        'postback_url' => 'http://requestb.in/pkt7pgpk',
        'customer' => [
          'external_id' => '0001',
          'name' => $dados["titular"], 
          'email' => $dados["email"],
          'type' => 'individual',
            'country' => 'br',
            'documents' => [
              [
                'type' => 'cpf',
                'number' => $dados["cpf"]
              ]
            ],
            'phone_numbers' => [ '+551199999999' ]
        ],
        'billing' => [
            'name' => $dados["nome"],
            'address' => [
              'country' => 'br',
              'street' => $dados["rua"],
              'street_number' => $dados["numero"],
              'state' => $dados["estado"],
              'city' => $dados["cidade"],
              'neighborhood' => $dados["bairro"],
              'zipcode' => $dados["cep"]
            ]
        ],
        'shipping' => [
            'name' => $dados["nome"],
            'fee' => 1020,
            'delivery_date' => '2020-04-22',
            'expedited' => false,
            'address' => [
              'country' => 'br',
              'street' => $dados["rua"],
              'street_number' => $dados["numero"],
              'state' => $dados["estado"],
              'city' => $dados["cidade"],
              'neighborhood' => $dados["bairro"],
              'zipcode' => $dados["cep"]
            ]
        ],
        'items' => [
            [
              'id' => $dados["itemid"],
              'title' => $dados["title"],
              'unit_price' => $dados["price"],
              'quantity' => $dados["quantity"],
              'tangible' => true
            ]
        ]
      ]);

      var_dump($transaction);
}

if($dados["btn-boleto"]) {
    $transaction = $pagarme->transactions()->create([
        'amount' => 1000,
        'payment_method' => 'boleto',
        'async' => false,
        'customer' => [
          'external_id' => '1',
          'name' => 'Nome do cliente',
          'type' => 'individual',
          'country' => 'br',
          'documents' => [
            [
              'type' => 'cpf',
              'number' => '00000000000'
            ]
          ],
          'phone_numbers' => [ '+551199999999' ],
          'email' => 'cliente@email.com'
        ]
      ]);
}