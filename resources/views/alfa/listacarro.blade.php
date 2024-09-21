<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <button class="hamburger-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>                
                <figure class="nome">
                    <img src="{{ asset('alfa/Logo alfa6.png')}}" alt="Nome da alfa">
                </figure>
                <figure class="logo"> 
                    <img src="{{ asset('alfa/Logo alfa3.png')}}" alt="Logo de veículos">
                </figure>
                <h2>VEÍCULOS</h2>
            </ul>
        </nav>
    </header>
    <main>
        <aside class="lado">
            <ul>
                <li><a href="{{ url('relatorios')}}">Relatórios</a></li>
            </ul>
        </aside>
    </main>
    <footer>
        <button class="back-button" onclick="window.history.back()">
            <span class="back-arrow">←</span> VOLTAR
        </button>

    </footer>
</body>
</html>
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
    aside {
        color:#FFFF;
    }
    aside.lado {
    position: relative; /* Mantém o aside em seu lugar padrão */
    padding: 20px; /* Adiciona algum espaçamento interno */
}

    header {
        background-color: #222B45;
        display: flex; /*alinhar os itens*/
        justify-content: center; /*espaçamento igual entre os trem*/
        align-items: center; /*os trem fica no centro da barra*/
        position: fixed; /*quando abaixar a página fica em cima de todo jeito*/
        width: 100vw; /*o cabeçalho ocupar toda a largura*/
        height: 60px; /*define a altura do cabeçalho*/
    }
    nav ul {
        display: flex; /*alinhar na horizontal*/
    }
    .nome img {
        width: 92%;
        position: relative;
        top: 5px;
        right: 40rem;
    }
    .logo img {
        width: 15%;
    }
    footer {
        position: fixed; /*ficar fixo no fim da pág.*/
        bottom: 0; /*ficar no fundo*/
        width: 100vw;
        display: flex;
        align-items: right;
        padding: 2%;
    }
.back-button {
    border: 2px solid #ff4d8b; 
    background-color: #1b2237; /* Cor de fundo do botão */
    color: #ff4d8b; /* Cor do texto */
    padding: 10px 20px;
    font-size: 16px;
    font-family: 'Arial', sans-serif;
    cursor: pointer;
    display: flex;
    align-items: center;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.back-button:hover {
    background-color: #38334f; /* Cor ao passar o mouse */
    border-color: #ff709d;
}

.back-arrow {
    margin-right: 5px; /* Espaço entre a seta e o texto */
}
.hamburger-button {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 30px; /* Largura do botão */
    height: 25px; /* Altura total */
    background: none; /* Remove o fundo */
    border: none; /* Remove a borda */
    cursor: pointer;
    padding: 0;
    position: relative;
    top: 10px;
    right: 43rem;

}

.hamburger-button span {
    display: block;
    width: 100%;
    height: 4px; /* Altura das linhas */
    background-color: #ffffff; /* Cor das linhas */
    border-radius: 2px; /* Bordas arredondadas nas linhas */
}
</style>