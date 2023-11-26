<?php

require_once('../vendor/autoload.php');
use \Firebase\JWT\JWT;


$key = 'secret';

$headers = [
    'lab' => 'jwt-weak-secret'
];

$payload = array(
    "user_id" => 123,
    "username" => "Gabriel",
    "role" => "user",
    "exp" => time() + 3600 
);


$token = JWT::encode($payload, $key, 'HS256', null, $headers);

echo  $token;


?>

