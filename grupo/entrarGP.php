<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar em Grupo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-left: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            width: calc(100% - 20px);
            padding: 10px;
            margin-left: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .toggle-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
            color: #007BFF;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Entrar em Grupo</h2>
        <div class="form-group">
    <label for="join-group-name">Nome do Grupo</label>
    <input type="text" id="join-group-name" list="group-suggestions" oninput="sugerirGrupos(this.value)">
    <datalist id="group-suggestions"></datalist>
</div>
        <div class="form-group">
            <button onclick="joinGroup()">Entrar</button>
        </div>
        <a class="toggle-link" href="criarGP.html">Criar Grupo</a>
    </div>

    <script>
        function sugerirGrupos(query) {
    if(query.length > 2) { // Buscar após digitar 3 caracteres
        fetch(`sugerir_grupos.php?query=${query}`)
        .then(response => response.json())
        .then(data => {
            const datalist = document.getElementById('group-suggestions');
            datalist.innerHTML = ''; // Limpar sugestões anteriores
            data.forEach(grupo => {
                const option = document.createElement('option');
                option.value = grupo.nome;
                datalist.appendChild(option);
            });
        })
        .catch(error => console.error('Erro ao buscar grupos:', error));
    }
}
        function joinGroup() {
            const groupName = document.getElementById('join-group-name').value;
            if (groupName) {
                alert(`Você entrou no grupo: ${groupName}`);
                document.getElementById('join-group-name').value = '';
            } else {
                alert('Por favor, insira o nome do grupo.');
            }
        }
    </script>
</body>
</html>
