<?php
// Incluir a configuração de conexão
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Excluir o registro
    $sql = "DELETE FROM inscricoes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
