<?php

require 'config.php';


if (isset($_GET['ordem']) && empty($_GET['ordem']) == false) {
    $ordem = $_GET['ordem'];

    $sql = '
    SELECT *
    FROM usuarios
    ORDER BY ' . $ordem;
} else {
    $ordem = '';
    $sql = '
    SELECT *
    FROM usuarios
    ';
}


?>

<form method="GET">
    <select name="ordem" onchange="this.form.submit()">
        <option value=""></option>
        <option value="nome" <?php echo ($ordem == 'nome')?'selected="selected"':''; ?>>Ordenar pelo nome</option>
        <option value="idade"<?php echo ($ordem == 'idade')?'selected="selected"':''; ?>>Ordenar pela idade</option>

    </select>
</form>

<table border="1" width='400'>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php



    $sql = $pdo->query($sql);



    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $usuario) {
            echo '<tr>';
            echo '<td>' . $usuario['nome'] . '</td>';
            echo '<td>' . $usuario['idade'] . '</td>';
            echo '</tr>';
        }
    }

    ?>


</table>