<?php

require 'config.php'; 

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "
        INSERT INTO usuarios
        SET nome = :nome,
            email = :email,
            senha = :senha
    ";

    $sql = $pdo->prepare($sql);

    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $senha);

    $sql->execute();

    header("Location: index.php");

}



?>

<form method="POST">
    Nome:<br>
    <input type="text" name="nome"> <br>

    Email: <br
    <input type="email" name="email"> <br>


    Senha: <br>
    <input type="password" name="senha"> <br>


    <input type="submit" value="Cadastrar">

</form>