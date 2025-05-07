<?php
// Configurações do banco de dados
$servername = "localhost"; // Geralmente é localhost
$username = "seu_usuario"; // Seu nome de usuário do banco de dados
$password = "sua_senha"; // Sua senha do banco de dados
$dbname = "FoxFood"; // O nome do seu banco de dados

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados JSON enviados pelo JavaScript
$json_data = file_get_contents("php://input");
$data = json_decode($json_data, true);

if ($data) {
  $nome = $conn->real_escape_string($data['nome']); // Sanitize para evitar SQL injection
  $email = $conn->real_escape_string($data['email']); // Sanitize para evitar SQL injection

  $sql = "INSERT INTO users (nome_cliente, email) VALUES ('$nome', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
  } else {
    echo "Erro ao salvar os dados: " . $conn->error;
  }
} else {
  echo "Nenhum dado recebido.";
}

$conn->close();
?>