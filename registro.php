<?php
include 'banco.php';

// Recebe e sanitiza os dados do formulário
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// Preparar a declaração SQL
$stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)"); // ? é um placeholder para 
                                                                                     // os dados que serão inseridos
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute() === TRUE) {
    $mensagem = "Novo usuário cadastrado com sucesso!";
} else {
    $mensagem = "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<link rel="stylesheet" href="style.css">
    <title>Oficina de Servidores Web</title>
<div class="container">
        <div class="message">
            <?php echo $mensagem; ?>
        </div>
        <div class="button-container">
            <a href="index.php">
                <button>Voltar</button>
            </a>
        </div>
    </div>