<?php

include 'db_autor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano_nascimento = $_POST['ano_nascimento'];

    $sql = " INSERT INTO usuarios (nome,nacionalidade,ano_nascimento) VALUE ('$nome','$nacionalidade', '$ano_nascimento')";

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

        <label for="nome">Nome:</label>
        <input type="text" nome="nome" required>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" nome="nacionalidade" required>

        <label for="ano_nacimento">Ano de nascimento:</label>
        <input type="text" nome="ano_nacimento" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_autor.php">Ver registros.</a>

</body>

</html>