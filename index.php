<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas Web - Página Principal</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .main-container {
            display: flex;
            gap: 50px;
            max-width: 1200px;
            width: 100%;
            justify-content: center;
        }

        .column {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
            max-width: 500px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            text-align: center;
            padding: 20px;
            text-decoration: none;
            color: #333;
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
        }

        .card h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .card p {
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>

<body>

    <h1>Aulas Web</h1>
    <div class="main-container">
        <!-- coluna esquerda: aulas -->
        <div class="column">
            <h1>Modulos</h1>
            <a href="0_componentes_html" class="card">
                <h2>Componentes HTML</h2>
                <p>Primeiro módulo de aulas, aprendendo componentes HTML.</p>
            </a>

            <a href="1_login_session" class="card">
                <h2>Login Session</h2>
                <p>Módulo para aprender sobre sessões de login em sites.</p>
            </a>
            <a href="2_upload" class="card">
                <h2>Upload</h2>
                <p>Módulo para aprender sobre upload de arquivos assincronos em sites.</p>
            </a>
            <a href="3_banco_simples" class="card">
                <h2>Banco simples</h2>
                <p>Módulo para aprender sobre conexoes com banco de dados simples.</p>
            </a>
        </div>
        <!-- coluna direita: desafios -->
        <div class="column">
            <h1>Desafios</h1>
            <a href="desafios/desafio1-cantor" class="card">
                <h2>Desafio 1 - Cantor</h2>
                <p>Página construída com tabelas para exibir informações sobre cantores.</p>
            </a>

            <a href="desafios/desafio2-xadrez" class="card">
                <h2>Desafio 2 - Xadrez</h2>
                <p>Tabuleiro de xadrez replicado utilizando PHP para gerar as peças dinamicamente.</p>
            </a>

            <a href="desafios/desafio3-cantor-login" class="card">
                <h2>Desafio 3 - Cantor Login</h2>
                <p>Criando uma sessão de login para o site do Desafio 1, com login e logout funcionais.</p>
            </a>
            <a href="desafios/desafio4-carteirinha" class="card">
                <h2>Desafio 4 - Carteirinha</h2>
                <p>Gerador de carteirinhas utilizando upload assincrono</p>
            </a>
        </div>




    </div>

</body>

</html>