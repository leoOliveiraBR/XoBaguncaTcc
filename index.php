<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<?php
include_once('conexao.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Registro Novo Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/fundo.png');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .hidden {
            display: none;
        }


        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .form-container {
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
            letter-spacing: 2px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="text"].error,
        input[type="date"].error,
        input[type="email"].error,
        input[type="password"].error {
            border-color: red;
        }

        .error-message {
            color: red;
            display: none;
            margin-top: -10px;
            margin-bottom: 10px;
            font-size: 12px;
        }

        button {
            padding: 10px;
            background-color: #000000;
            color: #ffee00;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #111111;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            display: block;
            margin-bottom: 10px;
            color: #000000;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        img {
            width: 300px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        .image-button-container {
            display: inline-block;
            text-align: center;
            margin-bottom: 20px;
        }

        .entrar-img {
            display: block;
            margin: 0 auto;
        }

        #show-form-button {
            display: block;
            margin: 10px auto;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="image-button-container">
            <img src="img/seila.png" alt="Imagem" class="entrar-img">
            <button id="show-form-button">entrar</button>
        </div>
        <div class="form-container hidden" id="form-container">
            <img src="img/titulo.png" alt="Imagem do Título">
            <form id="register-form" action="cad.php" method="POST">
                <input type="text" id="name" name="name" placeholder="Nome:" required>
                <span class="error-message" id="name-error">Por favor, insira seu nome.</span>
                <input type="date" id="dob" name="dob" placeholder="Data de Nascimento:" required>
                <span class="error-message" id="dob-error">Por favor, insira sua data de nascimento.</span>
                <input type="email" id="email" name="email" placeholder="E-mail:" required>
                <span class="error-message" id="email-error">Por favor, insira um e-mail válido.</span>
                <input type="password" id="password" name="password" placeholder="Senha:" required>
                <span class="error-message" id="password-error">Por favor, insira uma senha.</span>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar Senha:"
                    required>
                <span class="error-message" id="confirm-password-error">Por favor, confirme sua senha.</span>
                <button type="submit" id="register-button">Registrar</button>
            </form>
            <div class="links">
                <a href="recu.php">Esqueceu a Senha?</a>
                <a href="antigoUser.php">Já tem uma conta? Faça login</a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('show-form-button').addEventListener('click', function () {
            document.getElementById('form-container').classList.toggle('hidden');
        });

        document.getElementById('register-button').addEventListener('click', function (event) {
            event.preventDefault();

            var inputs = document.querySelectorAll('#register-form input');
            var errorMessages = document.querySelectorAll('.error-message');

            var allValid = true;

            function validateInput(input, errorMessage) {
                if (input.value.trim() === '') {
                    input.classList.add('error');
                    errorMessage.style.display = 'block';
                    allValid = false;
                } else {
                    input.classList.remove('error');
                    errorMessage.style.display = 'none';
                }
            }

            inputs.forEach(function (input) {
                var errorMessage = document.getElementById(input.id + '-error');
                validateInput(input, errorMessage);
            });

            if (allValid) {
                document.getElementById('register-form').submit();
            }
        });
    </script>
</body>
</html>