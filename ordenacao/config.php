<?php


$infos = 'mysql:dbname=projeto_ordenar;host=localhost'; 
$db_user = 'jeff';
$db_senha = 'password';


try{
    $pdo = new PDO($infos, $db_user, $db_senha);
}catch(PDOException $e){
    echo 'Error: '.$e->getMessage();
}




?>
