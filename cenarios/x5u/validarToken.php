<?php
require_once('../../vendor/autoload.php');
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;


$token = $_POST['token'];
$validaToken = $token;

list($headerBase64, $payloadBase64, $signatureBase64) = explode('.', $validaToken);

$header = json_decode(base64_decode($headerBase64), true);
$payload = json_decode(base64_decode($payloadBase64),true); 


$x5u = $header['x5u']; 

$messageToVerify = "$headerBase64.$payloadBase64";

$signature = base64_decode($signatureBase64);

$key = file_get_contents($x5u);

$verificationResult = openssl_verify($messageToVerify, $signature, $key, OPENSSL_ALGO_SHA256);

// Verificando o resultado
if ($verificationResult == 1) {
    $role = $payload['role'];
        if ($role == "admin"){
            echo "JWT{YOU_ARE_ADMIN_HEADER_X5U}";
        }else{
            echo "Voce não é admin!";
        }
} elseif ($verificationResult == 0) {
    echo 'Assinatura inválida.';
} else {
    echo 'Erro durante a verificação da assinatura.';
}

?>

