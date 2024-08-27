<?php
include_once('conexao.php');

$query = $_GET['query'];
$sql = "SELECT nome_grupo AS nome, foto_grupo FROM grupos WHERE nome_grupo LIKE ? LIMIT 5";
$stmt = $mysqli->prepare($sql);
$searchQuery = "%$query%";
$stmt->bind_param('s', $searchQuery);
$stmt->execute();
$result = $stmt->get_result();

$grupos = [];
while ($row = $result->fetch_assoc()) {
    // Codifica a imagem em base64 para exibição no HTML
    $row['foto_grupo'] = base64_encode($row['foto_grupo']);
    $grupos[] = $row;
}

header('Content-Type: application/json');
echo json_encode($grupos);

$stmt->close();
?>
