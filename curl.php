<?php

// phpinfo();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://www.google.com.br");

if(curl_exec($ch) === false){
    echo curl_error($ch);
}
else{
    echo "Sucesso";
}
curl_close($ch);