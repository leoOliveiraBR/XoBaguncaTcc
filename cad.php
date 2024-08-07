        <?php
        include 'conexao.php';

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash da senha para segurança
        $data_nasc = $_POST['dob'];
        $idtipo_usuario = 1; // Ajuste conforme necessário

        // Inserindo os dados no banco de dados
        $sql = "INSERT INTO usuario (tipo_usuario_idtipo_usuario, nome_usuario, email_usuario, senha_usuario, data_nasc_usuario) VALUES (?, ?, ?, ?, ?)";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("issss",$tipo_usuario_idtipo_usuario, $nome, $email, $senha, $data_nasc);

        if ($stmt->execute()) {
            header('Location: pag2_e3_4/explicacoes.html');
            exit();
        } else {
            echo "Erro: " . $sql . "<br>" . $mysqli->error;
        }

        $stmt->close();
        $mysqli->close();
        ?>
