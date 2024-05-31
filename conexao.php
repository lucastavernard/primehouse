<?php
// Configurações do banco de dados
$servername = "localhost"; // Endereço do servidor do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = "pitoco"; // Senha do banco de dados
$dbname = "primehouse"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário
    $nome_usuario = $_POST['inputUser'];
    $email = $_POST['emailUser'];
    $telefone = $_POST['telInput'];

    // Inserir os dados na tabela do banco de dados
    $sql = "INSERT INTO usuarios (nome_usuario, email, telefone) VALUES ('$nome_usuario', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>
