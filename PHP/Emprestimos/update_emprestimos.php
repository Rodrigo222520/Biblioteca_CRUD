<?php

include 'biblioteca_db';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['nome'];
    $genero = $_POST['genero'];
    $ano_publicao = $_POST['ano_publicacao'];

    $sql = "UPDATE usuarios SET name ='$name',email ='$email' WHERE id_emprestimos=$id";

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

$sql = "SELECT * FROM usuarios WHERE id_emprestimos=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update_emprestimos.php?id=<?php echo $row['id'];?>">

        <label for="data_emprestimo">Data de empréstimo:</label>
        <input type="text" nome="data_emprestimo" value="<?php echo $row['data_emprestimo'];?>" required>

        <label for="data_devolucao">Data de devolução:</label>
        <input type="text" nome="data_devolucao" value="<?php echo $row['data_devolucao'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read_emprestimos.php">Ver registros.</a>

</body>

</html>