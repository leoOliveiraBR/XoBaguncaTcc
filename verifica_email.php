<?php
include 'conexao.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Verifica se o email existe no banco de dados
$sql = "SELECT * FROM usuario WHERE email_usuario = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verifica a senha
    if (password_verify($password, $user['senha_usuario'])) {
        header('Location: pag2_e3_4/explicacoes.html');
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "E-mail não encontrado.";
}

$stmt->close();
$mysqli->close();
?>
