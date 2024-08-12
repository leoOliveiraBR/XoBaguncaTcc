<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_grupo = $_POST['nome_grupo'];
    $descricao_grupo = $_POST['descricao_grupo'];

    // Upload da foto do grupo
    if (!empty($_FILES['foto_grupo']['tmp_name'])) {
        // Ler o conteúdo do ficheiro em bits
        $foto_grupo = file_get_contents($_FILES['foto_grupo']['tmp_name']);
    } else {
        // Usar uma imagem padrão em bits (podes adicionar uma imagem em binário ou deixar NULL)
        $foto_grupo = NULL;
    }

    $query = "INSERT INTO grupos (nome_grupo, descricao_grupo, foto_grupo) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('sss', $nome_grupo, $descricao_grupo, $foto_grupo);

    if ($stmt->execute()) {
        echo "Grupo criado com sucesso!";
    } else {
        echo "Erro ao criar grupo: " . $stmt->error;
    }

    $stmt->close();
}
?>

