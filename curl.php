<?php

// phpinfo();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.php.net/manual/pt_BR/function.curl-setopt.php");

if(curl_exec($ch) === false){
    echo curl_error($ch);
}
else{
    echo "Sucesso";
}
curl_close($ch);