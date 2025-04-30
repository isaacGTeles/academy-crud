<?php
// Incluir a configuração de conexão
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buscar os dados atuais
    $sql = "SELECT * FROM inscricoes WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data-nascimento'];

    // Atualizar os dados no banco
    $sql = "UPDATE inscricoes SET nome='$nome', email='$email', telefone='$telefone', data_nascimento='$data_nascimento' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="editar.php?id=<?php echo $id; ?>" method="POST">
    <label for="nome">Nome Completo</label>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>

    <label for="email">E-mail</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

    <label for="telefone">Telefone</label>
    <input type="tel" name="telefone" value="<?php echo $row['telefone']; ?>" required>

    <label for="data-nascimento">Data de Nascimento</label>
    <input type="date" name="data-nascimento" value="<?php echo $row['data_nascimento']; ?>" required>

    <button type="submit">Atualizar</button>
</form>
