<?php
    $hostname = 'localhost';
    $user = 'root';
    $senha = '';
    $bd = 'banco3_crud';

    $conn = new mysqli($hostname, $user, $senha, $bd);
    if($conn->connect_error){
        die("Erro ao conectar: ".$conn->connect_error);
    }
    session_start();
?>