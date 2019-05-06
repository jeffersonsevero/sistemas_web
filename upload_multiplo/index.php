<form method="POST" enctype="multipart/form-data">
    <h2>Insira o arquivo</h2>
    <input type="file" name="arquivo[]" multiple> <br><br>
    <input type="submit" value="Enviar arquivos">
     
</form>






<?php

if(isset($_FILES['arquivo']) && empty($_FILES['arquivo']) == false){

    if(count($_FILES['arquivo']['tmp_name']) > 0){
        for ($i=0; $i < count($_FILES['arquivo']['tmp_name']); $i++) {
            
            $array = explode('.', $_FILES['arquivo']['name'][$i]);
            $extensao = end($array); 
            $nome = md5(time().rand(0,99));

            move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], 'arquivos/'.$nome.'.'.$extensao);
        }
        echo '<h3>Arquivos enviados com sucesso</h3>';
    }

}


//Logo após o pdo para colocar um modo verboso pra descobrir erros se faz assim
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





?>






