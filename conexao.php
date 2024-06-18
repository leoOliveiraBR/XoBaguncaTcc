<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>banco</title>
</head>
<body>
<?php
// Configurações do banco de dados
$servername = "localhost"; // endereço do servidor MySQL
$username = "seu_usuario"; // nome de usuário do MySQL
$password = "sua_senha"; // senha do MySQL
$dbname = "db_xo_bagunca"; // nome do banco de dados

// Conectando ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Processando os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $data_nascimento = $_POST['dob'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // Inserindo os dados na tabela do banco de dados
    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, data_nasc_usuario, senha_usuario) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
    } else {
        echo "Erro ao registrar usuário: " . $conn->error;
    }
}

// Fechando a conexão com o banco de dados
$conn->close();
?>
</body>
</html>