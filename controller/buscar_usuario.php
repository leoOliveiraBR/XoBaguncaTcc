<?php
include_once('conexao.php');

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    
    // Preparar a consulta para evitar SQL Injection
    $query = "SELECT nome_usuario, foto_usuario FROM usuarios WHERE email_usuario = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        echo json_encode($usuario);
    } else {
        echo json_encode(null);
    }

    $stmt->close();
}
?>
