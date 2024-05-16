<?php
    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['telefone'];

        $sqlUpdate = "UPDATE tb_cliente SET nome = '$nome', email = '$email', telefone = '$tel' WHERE id = '$id'";

        $result = $conn->query($sqlUpdate);
    }
    header('Location: listagem.php');
?>