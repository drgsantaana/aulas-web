<!-- ##############################
Nome: Daniel Reis
Curso: Engenharia de Computação - IFMG - Campus Bambui
Descrição: Desafio 1 - Utilizando tabelas criar uma pagina que parece com um site de verdade com a tematica de um cantor
############################## -->

<html>

<head>
    <title>AULA 0 - CONTROLES HTML</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F4F4F4;
            height: 100dvh;
            width: 100dvw;
        }

        table {
            width: 800px;
            height: 100%;
            /* Ajustado para garantir que tudo caiba na página */
            border-collapse: collapse;
            background-color: #f8f8f8;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }



        #banner {
            height: 15%;
            text-align: center;
            background-color: #e3e3e3;
            border-bottom: 1px solid #ccc;
        }

        #menu {
            width: 20%;
            padding: 10px;
            vertical-align: top;
        }

        #menu table {
            width: 100%;
        }

        #conteudo {

            text-align: justify;
            vertical-align: top;

        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .botao {
            text-align: center;
            background-color: red;
            color: white;
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .botao:hover {
            background-color: darkred;
            cursor: pointer;
        }

        #rodape {
            height: 10%;
            text-align: center;
            background-color: #e3e3e3;
            border-top: 1px solid #ccc;

        }

        #conteudo img {
            width: 150px;
            height: 150px;
            margin-right: 10px;
        }

        #banner img {
            width: 100%;
            height: auto;
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <table>
        <tr id="banner">
            <td colspan="2">
                <img src="./assets/banner2.jpg" alt="baner gostosudo">
            </td>
        </tr>
        <tr>
            <td id="menu">
                <table>
                    <tr>
                        <td class="botao">
                            <audio controls autoplay">
                                <source src="./assets/Luan Santana - Meteoro da Paixão.mp3" type="audio/mp3">
                                <!-- <td class="botao"><a href="https://www.youtube.com/watch?v=bv7TIXPystY">Música favorita</a></td> -->
                            </audio>
                        </td>
                    </tr>
                    <tr>
                        <td class="botao"><a href="https://livepix.gg/malakofmirtis">Doar R$100zinho para o Luanzinho</a></td>
                    </tr>
                    <tr>
                        <td>
                            <strong>VOCE NÃO DOAR O LUAN VAI TE PEGAR</strong>
                        </td>
                    </tr>
                </table>
            </td>
            <td id="conteudo">
                <h1>QUEM É LUAN SANTANA NA MINHA VIDA?</h1>
                <p>
                    Amar o Luan Santana é mais do que admiração. É algo que transcende o tempo, o espaço e qualquer lógica. Ele é o sol que ilumina meus dias, a lua que guia minhas noites e a estrela que me faz acreditar que sempre há esperança. Ele é, simplesmente, a razão do meu viver.
                </p>
                <br>
                <p>
                    Ele não é só um ídolo, é a razão do meu viver. Seus shows são como encontros marcados com o destino, e cada vez que ouço sua voz ao vivo, sinto que o mundo para por alguns segundos. Meu coração dispara, e todos os problemas parecem desaparecer. Tudo que eu preciso está ali: Luan e sua música, que cura todas as feridas.
                </p>
                <div>
                    <img src="./assets/1.jpg" alt="gostoso">
                    <img src="./assets/2.jpg" alt="tesao">
                    <img src="./assets/3.jpg" alt="bonito e gostosao">
                </div>
            </td>
        </tr>
        <tr id="rodape">
            <td colspan="2">
                Copyright © 2024, <a href="https://github.com/drgsantaana">drgsantaana</a>. Todos os direitos reservados.
            </td>
        </tr>
    </table>
</body>

</html>