<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            border: 0;
            padding: 0;
            box-sizing: border-box;
            margin: 0;
        }
        body {
            background-color: #1b2237;
            color: #FFFF;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-style: italic;
        }
        header {
            background-color: #222B45;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            width: 100vw;
            height: 60px;
            z-index: 10;
        }
        aside {
            position: fixed;
            top: 60px;
            left: 0;
            width: 250px;
            height: calc(100vh - 60px);
            background-color: #1b2237;
            padding: 20px;
        }
        .toggle-section {
            cursor: pointer;
            margin-bottom: 20px;
        }
        .options {
            margin-top: 10px;
            display: none; /* Inicialmente, as opções estão ocultas */
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100vw;
            padding: 2%;
        }
        .back-button {
            background-color: #1b2237;
            color: #ff4d8b;
            padding: 10px 20px;
            border: 2px solid #ff4d8b;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h2>VEÍCULOS</h2>
    </header>
    <aside>
        <section class="toggle-section">
            <h2>Gerenciar</h2>
            <div class="options">
                <p><a href="#">Veículos</a></p>
                <p><a href="#">Relatórios</a></p>
                <p><a href="#">Motoristas</a></p>
            </div>
        </section>
    </aside>
    <footer>
        <button class="back-button" onclick="window.history.back()">
            VOLTAR
        </button>
    </footer>

    <script>
        document.querySelectorAll('.toggle-section').forEach(section => {
            section.addEventListener('click', () => {
                const options = section.querySelector('.options');
                options.style.display = options.style.display === 'none' || options.style.display === '' ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>