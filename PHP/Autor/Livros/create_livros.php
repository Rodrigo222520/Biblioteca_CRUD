<?php

include 'db_livros.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['nome'];
    $genero = $_POST['genero'];
    $ano_publicao = $_POST['ano_publicacao'];

    $sql = " INSERT INTO usuarios (titulo,genero,ano_publicacao) VALUE ('$titulo','$genero', '$ano_publicacao')";

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
    <title>Create</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="titulo">Título:</label>
        <input type="text" nome="titulo" required>

        <label for="genero">Gênero:</label>
        <input type="text" nome="genero" required>

        <label for="ano_publicacao">Ano de publicação:</label>
        <input type="text" nome="ano_publicacao" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_livros.php">Ver registros.</a>

</body>

</html>