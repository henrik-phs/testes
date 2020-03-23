<?php

require __DIR__ . "/vendor/autoload.php";

$pagarme = new \PagarMe\Client("ak_test_bWX2vmWL8FnObv4rgkE6tl5IzFEzEZ");

$transaction = $pagarme->transactions()->create([
  'amount' => 20000,
  'payment_method' => 'boleto',
  'async' => true,
  'customer' => [
    'external_id' => '1',
    'name' => 'Pedro',
    'type' => 'individual',
    'country' => 'br',
    'documents' => [
      [
        'type' => 'cpf',
        'number' => '00000000001'
      ]
    ],
    'phone_numbers' => [ '+551199999999' ],
    'email' => 'cliente@email.com'
  ]
]);

if($transaction){
    var_dump($transaction);
}
else{
    echo "Transação não Efetuada";
}