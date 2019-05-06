<?php

$infos = 'mysql:dbname=sistema_comentarios;host=localhost';
$db_user = 'jeff';
$db_senha = 'papigaquigrafo';

try{
    $pdo = new PDO($infos, $db_user, $db_senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'ERROR: '.$e->getMessage();
}



?>