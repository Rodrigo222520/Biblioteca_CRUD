<?php

include 'db_autor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = " INSERT INTO usuarios (nome,email,telefone) VALUE ('$nome','$email', '$telefone')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="nome">Nome:</label>
        <input type="text" nome="nome" required>

        <label for="email">Email:</label>
        <input type="email" nome="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" nome="telefone" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_leitores.php">Ver registros.</a>

</body>

</html>