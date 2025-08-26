<?php

include 'biblioteca_db';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE usuarios SET name ='$name',email ='$email' WHERE id_leitores=$id";

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

$sql = "SELECT * FROM usuarios WHERE id_leitores=$id";
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

    <form method="POST" action="update_leitores.php?id=<?php echo $row['id'];?>">

        <label for="nome">Nome:</label>
        <input type="text" nome="nome" value="<?php echo $row['nome'];?>" required>

        <label for="email">Email:</label>
        <input type="email" nome="email" value="<?php echo $row['email'];?>" required>

        <label for="telefone">Telefone:</label>
        <input type="text" nome="telefone" value="<?php echo $row['telefone'];?>" required>


        <input type="submit" value="Atualizar">

    </form>

    <a href="read_leitores.php">Ver registros.</a>

</body>

</html>