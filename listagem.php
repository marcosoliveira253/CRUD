<?php

    session_start();
    include 'conexao.php';

    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true) and (!isset($_SESSION['telefone']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['telefone']);

    }

    $sql = "SELECT * FROM tb_cliente ORDER BY id DESC";

    $result = $conn->query($sql);
    // print_r($result);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>CADASTRO DE CLIENTES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        .btn-submit {
            background-color: #59cc13;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px;
        }
        .btn-submit:hover {
            background-color: #74df19;
        }

        .excluir {
            background-color: #d5321d;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 5px;
        }

        .excluir:hover {
            background-color: #f66b48;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="table-responsive">
            <div class="container">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['id']."</td>"; 
                                echo "<td>".$user_data['nome']."</td>"; 
                                echo "<td>".$user_data['email']."</td>"; 
                                echo "<td>".$user_data['telefone']."</td>";
                                echo "<td>
                                    <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                        </svg>
                                    </a>
                                </td>";
                                echo "<td>
                                    <a class='btn btn-sm btn-danger' href='excluir.php?id=$user_data[id]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                        </svg>
                                    </a>
                                </td>";

                                echo "</tr>";
                            }
                        ?>
                        
                    
                    </tbody>
                    <br>
                    
                        <form action="cadastro.php" method="post">
                            <fieldset style="border: 2px solid #000000; border-radius: 8px; width: 400px; margin: 30px auto; padding:10px">
                                <legend style="text-align: center;">Formulário Cadastro</legend>
                                <label>Nome</label>    
                                <input type="text" name="nome" style="width: 100%;">
                                <br>
                                <label>Email</label>   
                                <input type="email" name="email" style="width: 100%;">
                                <br>
                                <label>Telefone</label>
                                <input type="tel" name="telefone"style="width: 100%;">
                                <br><br>   
                                <input class="btn-submit" type="submit" value="Cadastro">
                            </fieldset>
                        </form>
            
                </table>
            </div>
        </div>
                                
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>