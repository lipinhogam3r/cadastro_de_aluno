<?php
// Dados de conexão (ajuste conforme seu ambiente)
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'cadastro_alunos';

// Conexão
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

// Recebendo dados POST
$cgm      = $_POST['cgm']      ?? null;
$nome     = $_POST['nome']     ?? null;
$email    = $_POST['email']    ?? null;
$turma    = $_POST['turma']    ?? null;
$serie    = $_POST['serie']    ?? null;
$cel      = $_POST['cel']      ?? null;
$endereco = $_POST['endereco'] ?? null;
$cep      = $_POST['cep']      ?? null;
$cidade   = $_POST['cidade']   ?? null;
$estado   = $_POST['estado']   ?? null;

// Inserção
$sql = "INSERT INTO alunos (cgm, nome, email, turma, serie, celular, endereco, cep, cidade, estado)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $cgm, $nome, $email, $turma, $serie, $cel, $endereco, $cep, $cidade, $estado);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
