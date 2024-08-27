<?php
include 'conexao.php';

$email = $_POST['email'];

$sql_check = "SELECT email_usuario FROM usuario WHERE email_usuario = ?";
$stmt_check = $mysqli->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    echo 'exists';
} else {
    echo 'not_exists';
}

$stmt_check->close();
$mysqli->close();
?>
