<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];



    $sql = 'INSERT INTO mensagens SET data_msg = NOW(),nome = :nome, mensagem = :mensagem';

    $sql = $pdo->prepare($sql);

    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":mensagem",$mensagem);

    $sql->execute();


}
else{
    echo 'Comentario não enviado';
}


?>

<fieldset>
    <form method="POST">
        Nome: <br>
        <input type="text" name="nome"> <br><br>

        Mensagem: <br>
        <textarea name="mensagem" id="" cols="30" rows="10">

        </textarea> <br>

        <input type="submit" value="Enviar">
    </form>
</fieldset>

<br><br>

<?php
$sql = '
    SELECT *
    FROM mensagens
    ORDER BY data_msg DESC
    
';

$sql = $pdo->query($sql);

if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $mensagem){
        echo '<strong>'.$mensagem['nome'].'</strong>';
        echo '<br>';
        echo $mensagem['mensagem'];
        echo '<hr>';
    }
}
else{
    echo 'Não há mensagens';
}

?>
