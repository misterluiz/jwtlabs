<?php
require_once('../vendor/autoload.php');
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

$token = $_POST['token'];
$validaToken = $token;


list($headersB64, $payloadB64, $sig) = explode('.', $validaToken);
$decoded = json_decode(base64_decode($headersB64), true);
$decoded2 =  json_decode(base64_decode($payloadB64),true);

$alg = $decoded['alg'];


    if ($alg == "none"){
        $role = $decoded2['role'];
        if ($role == "admin"){
            echo "JWT{YOU_ARE_ADMIN_NONE_ATTACK}";
        }else{
            echo"Voce não é admin";
        }
        
    }else
    echo"Voce não é admin";


?>