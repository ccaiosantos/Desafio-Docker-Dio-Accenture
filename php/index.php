<?php
$servername = "db";
$username   = "root";
$password   = "Senha123";
$database   = "meubanco";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$conn->query("CREATE TABLE IF NOT EXISTS dados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    cidade VARCHAR(50)
)");

$conn->query("INSERT INTO dados (nome, cidade) VALUES ('Visitante', 'São Paulo')");

$result = $conn->query("SELECT * FROM dados");

echo "<h2>Registros no banco:</h2>";
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Nome: " . $row['nome'] . " | Cidade: " . $row['cidade'] . "<br>";
}

$conn->close();
?>