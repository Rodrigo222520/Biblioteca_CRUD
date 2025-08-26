<?php

include 'biblioteca_db';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano_nascimento = $_POST['ano_nascimento'];

    $sql = "UPDATE usuarios SET name ='$name',email ='$email' WHERE id_autor=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update_autor.php?id=<?php echo $row['id'];?>">

        <label for="name">Nome:</label>
        <input type="text" nome="nome" value="<?php echo $row['name'];?>" required>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" nome="nacionalidade" value="<?php echo $row['nacionalidade'];?>" required>

        <label for="ano_nacimento">Ano de naciemnto:</label>
        <input type="text" nome="ano_nacimento" value="<?php echo $row['ano_nascimento'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read_autor.php">Ver registros.</a>

</body>

</html>