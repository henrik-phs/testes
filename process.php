<?php

require("vendor/autoload.php");
$pagarme = new PagarMe\Client('ak_test_bWX2vmWL8FnObv4rgkE6tl5IzFEzEZ');

$dados = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

$getCreditCard = $pagarme->cards()->create([
  'holder_name' => 'Yoda',
  'number' => '5167244180341689',
  'expiration_date' => '1121',
  'cvv' => '159'
]);

var_dump($getCreditCard);