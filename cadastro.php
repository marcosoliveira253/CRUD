<?php
    
    include 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];

    $recebendo_cadastros = "INSERT INTO tb_cliente
    VALUE ('', '$nome', '$email', '$tel')";

    $query_cadastros = mysqli_query($conn, $recebendo_cadastros);

    header('Location: listagem.php');
?>