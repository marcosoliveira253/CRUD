<?php
    
    if (!empty($_GET['id'])) {

        include 'conexao.php';
    
        $id = $_GET['id'];
    
        $sqlSelect = "SELECT * FROM tb_cliente WHERE id=$id";
    
        $result = $conn->query($sqlSelect);
    
        if ($result->num_rows > 0) {
            $sqlDelete = "DELETE FROM tb_cliente WHERE id=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: listagem.php');
?>