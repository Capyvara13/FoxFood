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

// Busca todos os dados da tabela users
$sql = "SELECT id, nome_cliente, email FROM users";
$result = $conn->query($sql);

$dados = array();

if ($result->num_rows > 0) {
  // Armazena cada linha em um array associativo
  while ($row = $result->fetch_assoc()) {
    $dados[] = $row;
  }
}

// Define o cabeçalho para indicar que a resposta é JSON
header('Content-Type: application/json');

// Envia os dados como JSON
echo json_encode($dados);

$conn->close();
?>