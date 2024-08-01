<?php

require 'DB.PHP';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";

 if ($conn->query($sql) === TRUE) {
        echo "Cadastro  atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT id, nome, email FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    <input type="submit" value="Atualizar Usuário">
</form>

<?php
$conn->close();
?>



