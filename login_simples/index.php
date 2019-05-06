<?php

session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo "Area restrita para usuarios";
}
else{
    header("Location: login.php");
}


 

?>