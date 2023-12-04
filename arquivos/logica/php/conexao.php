<?php
    session_start();
    $localhost = "localhost";
    $root = "root";
    $pass = "";
    $nomebanco = "projeto_livro";

    $conn = mysqli_connect($localhost, $root, $pass, $nomebanco);
    if(($conn == TRUE)){
        // echo("Conectado");
    }else{
        header("Location: ../../../index.php");
    }
?>

