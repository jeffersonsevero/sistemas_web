<?php

$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){

    $new_name = md5(time().rand(0,99));

    move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$new_name);
    echo 'Arquivo enviado com sucesso';
}





?>