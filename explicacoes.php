<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xô Bagunça!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #FFD700;
            text-shadow: 2px 2px #000;
        }
        .carousel-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
        }
        .carousel {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }
        .carousel-item {
            flex: 0 0 300px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        .carousel-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        .carousel-item h2 {
            margin-top: 10px;
            font-size: 18px;
        }
        .carousel-item .feature-description {
            display: none;
            margin-top: 10px;
            background: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .cta-button {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        .cta-button:hover {
            background: #333;
        }
        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            z-index: 10;
        }
        .nav-button.prev {
            left: 0;
        }
        .nav-button.next {
            right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Xô Bagunça!</h1>
        <div class="intro">
            <p>Olá, Esse app foi criado pra dar uma mãozinha pros filhos na hora de deixar a casa arrumada e limpa! Além disso, ele também promove um ambiente mais tranquilo e fortalece os laços familiares.</p>
        </div>
        <div class="carousel-container">
            <button class="nav-button prev" onclick="moveCarousel(-1)">&#10094;</button>
            <div class="carousel">
                <div class="carousel-item" onclick="showDescription(this)">
                    <img src="img_pag2/calendario.png" alt="Calendário colaborativo">
                    <h2>Calendário colaborativo</h2>
                    <div class="feature-description">Funcionalidade de calendário colaborativo para organizar as tarefas de todos.</div>
                </div>
                <div class="carousel-item" onclick="showDescription(this)">
                    <img src="img_pag2/recompensas.png" alt="Recompensas personalizadas">
                    <h2>Recompensas personalizadas</h2>
                    <div class="feature-description">Permite criar recompensas personalizadas para motivar os filhos.</div>
                </div>
                <div class="carousel-item" onclick="showDescription(this)">
                    <img src="img_pag2/grupos.png" alt="Criar e configurar grupos">
                    <h2>Criar e configurar grupos</h2>
                    <div class="feature-description">Crie e configure grupos para gerenciar as tarefas em família.</div>
                </div>
                <div class="carousel-item" onclick="showDescription(this)">
                    <img src="img_pag2/tarefas.png" alt="Gerenciamento de tarefas">
                    <h2>Gerenciamento de tarefas</h2>
                    <div class=" feature-description">Gerencie e distribua tarefas de maneira eficiente.</div>
                </div>
                <div class="carousel-item" onclick="showDescription(this)">
                    <img src="img_pag2/gamificacao.png" alt="Gamificação">
                    <h2>Gamificação</h2>
                    <div class="feature-description">Aplique elementos de gamificação para tornar a arrumação divertida.</div>
                </div>
                <div class="carousel-item" onclick="showDescription(this)">
                    <img src="img_pag2/dicas-e-truques.png" alt="Dicas e truques de limpeza">
                    <h2>Dicas e truques de limpeza</h2>
                    <div class="feature-description">Dicas e truques de limpeza para facilitar o dia a dia.</div>
                </div>
            </div>
            <button class="nav-button next" onclick="moveCarousel(1)">&#10095;</button>
        </div>
        <button class="cta-button" onclick="prosseguir()">Prosseguir</button>
    </div>
    <script>
        let currentSlide = 0;
        function showDescription(element) {
            const description = element.querySelector('.feature-description');
            if (description.style.display === "block") {
                description.style.display = "none";
            } else {
                const allDescriptions = document.querySelectorAll('.feature-description');
                allDescriptions.forEach(desc => desc.style.display = 'none');
                description.style.display = "block";
            }
        }

        function prosseguir() {
            window.location.href = 'principal.php';
        }

        function moveCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const totalItems = document.querySelectorAll('.carousel-item').length;
            const itemWidth = document.querySelector('.carousel-item').offsetWidth;
            const visibleItems = Math.floor(document.querySelector('.carousel-container').offsetWidth / itemWidth);

            currentSlide += direction;

            // Ensure currentSlide is within the bounds of the carousel items
            if (currentSlide < 0) {
                currentSlide = 0;
            } else if (currentSlide > totalItems - visibleItems) {
                currentSlide = totalItems - visibleItems;
            }

            const translateX = -currentSlide * itemWidth;
            carousel.style.transform = `translateX(${translateX}px)`;
        }
    </script>
</body>
</html>
