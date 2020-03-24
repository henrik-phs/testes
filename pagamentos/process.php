<?php

require("../vendor/autoload.php");
$pagarme = new PagarMe\Client('ak_test_bWX2vmWL8FnObv4rgkE6tl5IzFEzEZ');

$dados = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

$transaction = $pagarme->transactions()->create([
  'amount' => 100,
  'card_id' => 'card_ci6l9fx8f0042rt16rtb477gj',
  'payment_method' => 'credit_card',
  'postback_url' => 'http://requestb.in/pkt7pgpk',
  'customer' => [
    'external_id' => '0001',
    'name' => 'Aardvark Silva', 
    'email' => 'aardvark.silva@pagar.me',
    'type' => 'individual',
      'country' => 'br',
      'documents' => [
        [
          'type' => 'cpf',
          'number' => '67415765095'
        ]
      ],
      'phone_numbers' => [ '+551199999999' ]
  ],
  'billing' => [
      'name' => 'Nome do pagador',
      'address' => [
        'country' => 'br',
        'street' => 'Avenida Brigadeiro Faria Lima',
        'street_number' => '1811',
        'state' => 'sp',
        'city' => 'Sao Paulo',
        'neighborhood' => 'Jardim Paulistano',
        'zipcode' => '01451001'
      ]
  ],
  'shipping' => [
      'name' => 'Nome de quem receberá o produto',
      'fee' => 1020,
      'delivery_date' => '2018-09-22',
      'expedited' => false,
      'address' => [
        'country' => 'br',
        'street' => 'Avenida Brigadeiro Faria Lima',
        'street_number' => '1811',
        'state' => 'sp',
        'city' => 'Sao Paulo',
        'neighborhood' => 'Jardim Paulistano',
        'zipcode' => '01451001'
      ]
  ],
  'items' => [
      [
        'id' => '1',
        'title' => 'R2D2',
        'unit_price' => 300,
        'quantity' => 1,
        'tangible' => true
      ],
      [
        'id' => '2',
        'title' => 'C-3PO',
        'unit_price' => 700,
        'quantity' => 1,
        'tangible' => true
      ]
  ]
]);

var_dump($transaction);