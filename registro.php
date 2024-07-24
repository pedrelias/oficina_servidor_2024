<?php
include 'banco.php';

$nome = $_POST['nome'] ;
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    $mensagem = "Novo usuário cadastrado com sucesso!";
} else {
    $mensagem = "Erro: " . $sql . "<br>" . $conn->error;
}

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