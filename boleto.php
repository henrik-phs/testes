<?php

require __DIR__ . "/vendor/autoload.php";

$pagarme = new \PagarMe\Client(PAGARME_API_KEY);

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