
<?php
session_start();
require "config.php";

if(isset($_POST['email']) && empty($_POST['email']) == false){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "
        SELECT *
        FROM usuarios
        WHERE email = :email AND senha = :senha
    ";

    $sql = $pdo->prepare($sql);

    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $senha);

    $sql->execute();

    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
        $_SESSION['id'] = $dado['id'];
        header("Location: index.php");
    }


}



?>







<form method="POST">

Email: <br> 
<input type="email" name="email"> <br>


Senha: <br>
<input type="password" name="senha"> <br>


<input type="submit" value="Entrar">



</form>