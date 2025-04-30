<?php
// Incluir a configuração de conexão
include('config.php');

// Consultar os dados
$sql = "SELECT id, nome, email, telefone, data_nascimento FROM inscricoes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir os dados
    echo "<table><tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Data de Nascimento</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["email"]. "</td><td>" . $row["telefone"]. "</td><td>" . $row["data_nascimento"]. "</td>
        <td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='deletar.php?id=" . $row["id"] . "'>Excluir</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
