<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Antigo Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(img/fundo.png);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
        }

        .form-container {
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #333333;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input.invalid {
            border-color: red;
        }

        .error-message {
            color: red;
            font-size: 0.875em;
            display: none;
        }

        button {
            padding: 10px;
            background-color: #000000;
            color: #eeff00;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d1e1f;
        }

        img {
            width: 300px;
            height: auto;
            display: block;
            margin-left: auto; 
            margin-right: auto; 
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <img src="img/antigo.png" alt="Imagem do Título">
            <form id="login-form" action="verifica_email.php" method="POST">
                <input type="email" id="email" name="email" placeholder="E-mail:" required>
                <span class="error-message" id="email-error">Por favor, insira um e-mail válido.</span>
                <input type="password" id="password" name="password" placeholder="Senha:" required>
                <span class="error-message" id="password-error">Por favor, insira uma senha.</span>
                
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('email');
            var password = document.getElementById('password');
            var emailError = document.getElementById('email-error');
            var passwordError = document.getElementById('password-error');

            var isValid = true;

            if (email.value.trim() === '') {
                email.classList.add('invalid');
                emailError.style.display = 'block';
                isValid = false;
            } else {
                email.classList.remove('invalid');
                emailError.style.display = 'none';
            }

            if (password.value.trim() === '') {
                password.classList.add('invalid');
                passwordError.style.display = 'block';
                isValid = false;
            } else {
                password.classList.remove('invalid');
                passwordError.style.display = 'none';
            }

            if (isValid) {
                window.location.href = 'pag2/explicacoes.php';
            }
        }
    </script>
</body>
</html>
