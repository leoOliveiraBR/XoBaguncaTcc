<?php
include_once('conexao.php');

// Obtenha os grupos que o usuário criou ou entrou
$query = "SELECT nome_grupo, descricao_grupo, codigo_entrada FROM grupos";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos Criados</title>
    <style>
        /* Seu CSS permanece o mesmo */
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #1d1b1b;
            color: #fff;
        }

        /* Telas */
        .main-screen {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 50px 0;
            min-height: 100vh;
        }

        /* Cabeçalho */
        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .menu-content,
        .profile-content {
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .menu-content a,
        .profile-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .menu-content a:hover,
        .profile-content a:hover {
            background-color: #f0f0f0;
        }

        /* Grupo */
        .group-list {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            margin-top: 70px;
        }

        .group-item {
            width: 100%;
            padding: 15px;
            background-color: #333;
            border-radius: 10px;
            margin-bottom: 10px;
            position: relative;
        }

        .group-item h3 {
            color: yellow;
            margin-bottom: 5px;
        }

        .group-item p {
            margin-bottom: 10px;
        }

        .group-item button {
            position: absolute;
            right: 15px;
            top: 15px;
            background: none;
            border: none;
            color: yellow;
            font-size: 20px;
            cursor: pointer;
        }

        .group-item .group-details {
            display: none;
            background-color: #444;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .group-item .group-details h4 {
            color: #fff;
            margin-bottom: 5px;
        }

        .group-item .group-details ul {
            list-style-type: none;
            padding-left: 10px;
            color: #ddd;
        }

        .group-item .group-details ul li {
            margin-bottom: 5px;
        }

        .group-item .group-details p {
            color: yellow;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .group-list {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-screen">
        <div class="header">
            <div class="header-content">
                <div class="menu">
                    <button id="menuToggle">☰</button>
                    <div class="menu-content" id="menuContent">
                        <a href="criarGP.php" id="createGroupOption">Criar Grupo</a>
                        <a href="entrarGP.php" id="joinGroupOption">Entrar em um Grupo</a>
                    </div>
                </div>
        <div class="group-list" id="groupList">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="group-item">';
                    echo '<h3>' . htmlspecialchars($row['nome_grupo']) . '</h3>';
                    echo '<p>' . htmlspecialchars($row['descricao_grupo']) . '</p>';
                    echo '<button onclick="toggleDetails(this)">⋮</button>';
                    echo '<div class="group-details">';
                    echo '<h4>Membros do Grupo:</h4>'; // Aqui você pode adicionar membros reais se tiver essa funcionalidade
                    echo '<ul>';
                    echo '<li>Usuário 1</li>';
                    echo '<li>Usuário 2</li>';
                    echo '<li>Usuário 3</li>';
                    echo '</ul>';
                    echo '<p>Código do Grupo: <strong>' . htmlspecialchars($row['codigo_entrada']) . '</strong></p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Nenhum grupo criado ou entrado.</p>';
            }
            ?>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var menuToggle = document.getElementById("menuToggle");
            var menuContent = document.getElementById("menuContent");

            menuToggle.addEventListener("click", function () {
                menuContent.style.display = menuContent.style.display === "block" ? "none" : "block";
            });
        });

        function toggleDetails(button) {
            var groupDetails = button.nextElementSibling;
            groupDetails.style.display = groupDetails.style.display === "block" ? "none" : "block";
        }
    </script>
</body>
</html>
