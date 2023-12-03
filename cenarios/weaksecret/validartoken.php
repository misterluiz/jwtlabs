<?php
require_once('../../vendor/autoload.php');
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;


$key = 'secret';


    $token = $_POST['token'];
    $validaToken = $token;
  
    
 
    try{
    $decoded = JWT::decode($validaToken, new Key($key, 'HS256'));


    $role = $decoded -> role;
    
    if ($role == "admin"){
        echo "JWT{YOU_ARE_ADMIN_WEAK_SECRET}";
    }else
    echo "Voce não é admin!";

}catch(Exception $e) {
       
        echo 'Erro: ' . $e->getMessage();
    }



?>