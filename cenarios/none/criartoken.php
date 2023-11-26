<?php

require_once('../../vendor/autoload.php');
use \Firebase\JWT\JWT;

// Chave secreta para assinar o token

$key = 'secret';


$headers = [
    'lab' => 'jwt-none-attack'
];
// Dados que você deseja incluir no token (pode ser qualquer informação)
$payload = array(
    "user_id" => 123,
    "username" => "Gabriel",
    "role" => "user",
    "exp" => time() + 3600 // o token expira em 1 hora (3600 segundos)
);

// Gera o token JWT usando a chave secreta
$token = JWT::encode($payload, $key, 'HS256', null, $headers);

// Imprime o token gerado
echo  $token;


?>

