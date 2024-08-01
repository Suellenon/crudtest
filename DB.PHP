<?php
$host = '127.0.0.1';
$user = 'root'; 
$password = '';    
$db = 'dados';

// Criar conexão
$conn = new mysqli($host, $user, $password, $db);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>