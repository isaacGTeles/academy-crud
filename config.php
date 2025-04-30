<?php
$servername = "localhost";
$username = "root"; // usuário padrão do MySQL no XAMPP
$password = ""; // senha padrão do MySQL no XAMPP
$dbname = "academia_estacio"; // nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
