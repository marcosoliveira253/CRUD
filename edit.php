<?php

if (!empty($_GET['id'])) {

    include 'conexao.php';

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM tb_cliente WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $tel = $user_data['telefone'];
        }
    } else {
        header('Location: listagem.php');
    }
}


?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Editar</title>
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
    </style>
</head>

<body>
    <main>
        <a href="listagem.php">Voltar</a>

        <form action="saveEdit.php" method="post">
            <fieldset style="border: 2px solid #000000; border-radius: 8px; width: 400px; margin: 30px auto; padding:10px">
                <legend style="text-align: center;">Formulário Editar</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label>Nome</label>
                <input type="text" name="nome" style="width: 100%;" value="<?php echo $nome; ?>"><br>
                <label>Email</label>
                <input type="email" name="email" style="width: 100%;" value="<?php echo $email; ?>"><br>
                <label>Telefone</label>
                <input type="tel" name="telefone" style="width: 100%;" value="<?php echo $tel; ?>"><br><br>
                <input class="btn-submit" type="submit" name="update" id="update">
            </fieldset>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>