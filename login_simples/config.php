<?php


$infos = "mysql:dbname=blog;dbhost=localhost";
$db_user = "jeff";
$db_senha = "password";

try{
    $pdo = new PDO($infos, $db_user, $db_senha);

}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}



?>
