<?php
include_once('conexao.php');

$query = $_GET['query'];
$sql = "SELECT nome_usuario AS nome, email_usuario AS email, foto_usuario AS foto FROM usuarios WHERE email_usuario LIKE ? LIMIT 5";
$stmt = $mysqli->prepare($sql);
$searchQuery = "%$query%";
$stmt->bind_param('s', $searchQuery);
$stmt->execute();
$result = $stmt->get_result();

$usuarios = [];
while ($row = $result->fetch_assoc()) {
    $usuarios[] = $row;
}

header('Content-Type: application/json');
echo json_encode($usuarios);

$stmt->close();
?>
