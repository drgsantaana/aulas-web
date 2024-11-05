<!-- ##############################
Nome: Daniel Reis
Curso: Engenharia de Computação - IFMG - Campus Bambui
Descrição: Desafio 2 - Utilizando php e tabelas criar um tabuleiro de xadrez com as peças
############################## -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xadrez - Daniel</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .tabuleiro {
            border: 1px solid;
            height: 600px;
            width: 600px;
            border-collapse: collapse;
        }

        .tabuleiro td {
            width: 75px;
            height: 75px;
            text-align: center;
            vertical-align: middle;
        }

        .escuro {
            background-color: #006400;
            color: #fff;
        }

        .claro {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Xadrez dos cria</h1>
        <table class="tabuleiro">
            <?php
            $pecas = [
                'brancas' => [
                    'torre' => '<img src="./assets/torreBranca.svg" alt="torreBranca">',
                    'cavalo' => '<img src="./assets/cavaloBranca.svg" alt="cavaloBranca">',
                    'bispo' => '<img src="./assets/bispoBranca.svg" alt="bispoBranco">',
                    'rainha' => '<img src="./assets/rainhaBranca.svg" alt="rainhaBranca">',
                    'rei' => '<img src="./assets/reiBranca.svg" alt="reiBranco">',
                    'peao' => '<img src="./assets/peaoBranca.svg" alt="peaoBranco">'
                ],
                'pretas' => [
                    'torre' => '<img src="./assets/torrePreta.svg" alt="torrePreta">',
                    'cavalo' => '<img src="./assets/cavaloPreta.svg" alt="cavaloPreto">',
                    'bispo' => '<img src="./assets/bispoPreta.svg" alt="bispoPreto">',
                    'rainha' => '<img src="./assets/rainhaPreta.svg" alt="rainhaPreta">',
                    'rei' => '<img src="./assets/reiPreta.svg" alt="reiPreto">',
                    'peao' => '<img src="./assets/peaoPreta.svg" alt="peaoPreto">'
                ]
            ];

            $posicoesIniciais = [
                0 => ['torre', 'cavalo', 'bispo', 'rainha', 'rei', 'bispo', 'cavalo', 'torre'],
                1 => array_fill(0, 8, 'peao'),
                6 => array_fill(0, 8, 'peao'),
                7 => ['torre', 'cavalo', 'bispo', 'rainha', 'rei', 'bispo', 'cavalo', 'torre']
            ];

            function gerarCelula($i, $j, $pecas, $posicoesIniciais)
            {
                $cor = ($i + $j) % 2 == 0 ? 'escuro' : 'claro';
                if (isset($posicoesIniciais[$i])) {
                    $peca = $posicoesIniciais[$i][$j];
                    $corPeca = $i < 2 ? 'brancas' : 'pretas';
                    return "<td class=\"$cor\">{$pecas[$corPeca][$peca]}</td>";
                }
                return "<td class=\"$cor\"></td>";
            }

            for ($i = 0; $i < 8; $i++) {
                echo '<tr>';
                for ($j = 0; $j < 8; $j++) {
                    echo gerarCelula($i, $j, $pecas, $posicoesIniciais);
                }
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>