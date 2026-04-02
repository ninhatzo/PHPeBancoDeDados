<?php
    include 'conexao.php';

    mysqli_query($conn, "INSERT INTO usuarios(nome, email) VALUES ('$_POST[nome]','$_POST[email]')");

    header('Location: index.php');
?>