<?php

require __DIR__ . "/vendor/autoload.php";

$pagarme = new \PagarMe\Client("ak_test_bWX2vmWL8FnObv4rgkE6tl5IzFEzEZ");

$transaction = $pagarme->transactions()->create([
  'amount' => 1000,
  'payment_method' => 'credit_card',
  'card_holder_name' => 'Anakin Skywalker',
  'card_cvv' => '721',
  'card_number' => '5332682416469495',
  'card_expiration_date' => '0121',
  'customer' => [
    'external_id' => '1',
    'name' => 'Nome do cliente',
    'type' => 'individual',
    'country' => 'br',
    'documents' => [
      [
        'type' => 'cpf',
        'number' => '59079169820'
      ]
    ],
    'phone_numbers' => [ '+551199999999' ],
    'email' => 'cliente@email.com'
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