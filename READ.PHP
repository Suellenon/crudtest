<?php
require 'DB.PHP';

$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["email"]. "</td>
        <td><a href='update.php?id=" . $row["id"] . "'>Atualizar</a> | 
        <a href='delete.php?id=" . $row["id"] . "'>Deletar</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>