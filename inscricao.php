<?php
// Incluir a configuração de conexão
include('config.php');

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data-nascimento'];

    // Inserir os dados na tabela
    $sql = "INSERT INTO inscricoes (nome, email, telefone, data_nascimento) 
            VALUES ('$nome', '$email', '$telefone', '$data_nascimento')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>
