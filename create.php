<?php
 require 'DB.PHP';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome=  $_POST['nome'];
    $email= $POST['email'];

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo cadastro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
   
$conn->close();

    ?>
    <form method="post">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Adicionar Usuário">
</form>