<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_grupo = $_POST['nome_grupo'];
    $descricao_grupo = $_POST['descricao_grupo'];
    $codigo_entrada = gerarCodigoEntrada(); // Gerar o código de entrada

    // Upload da foto do grupo
    if (!empty($_FILES['foto_grupo']['tmp_name'])) {
        $foto_grupo = file_get_contents($_FILES['foto_grupo']['tmp_name']);
    } else {
        $foto_grupo = NULL;
    }

    $query = "INSERT INTO grupos (nome_grupo, descricao_grupo, foto_grupo, codigo_entrada) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssss', $nome_grupo, $descricao_grupo, $foto_grupo, $codigo_entrada);

    if ($stmt->execute()) {
        // Redireciona para a página "grupos.php" onde são listados os grupos criados ou entrados
        header("Location: principalGP.php");
        exit(); // Encerra o script após o redirecionamento para evitar execução adicional
    } else {
        echo "Erro ao criar grupo: " . $stmt->error;
    }

    $stmt->close();
}

function gerarCodigoEntrada($length = 8) {
    return substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
}
?>
