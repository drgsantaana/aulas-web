<?php
require_once '../components/navbar.php';
require_once '../clsEquipe.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icon.svg" type="image/svg">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 5</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form input,
        form select,
        form button {
            margin: 10px;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #5865F2;
        }

        button {
            background-color: #5865F2;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #4752C4;
        }
    </style>
</head>

<body>
    <?php
	renderNavbar();
	?>
    <div class="container">

        <h1>Cadastro de Projetos</h1>

        <form method="POST" action="../cadastrarProjeto.php">
            <input type="text" name="nome" placeholder="Nome do Projeto" required />
            <input
                type="text"
                id="salario"
                name="salario"
                placeholder="R$ 0,00"
                required
                oninput="mascaraDinheiro(this)" />

            <select name="slcEquipe" id="slcEquipe" required>
                <option value="">Selecione uma equipe</option>
                <?php
				$equipe = new clsEquipe();
				$equipes = $equipe->selecionarTodos();
				foreach ($equipes as $e) {
					echo "<option value='" . $e['id'] . "'>" . $e['nome'] . "</option>";
				}
				?>
            </select>

            <button type="submit">Cadastrar</button>
        </form>

    </div>

    <script>
        function mascaraDinheiro(input) {
            let valor = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos
            valor = (valor / 100).toFixed(2) + ""; // Converte para formato de moeda
            valor = valor.replace(".", ","); // Substitui o ponto por vírgula
            valor = valor.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."); // Adiciona os pontos de milhar
            input.value = "R$ " + valor; // Define o valor formatado no campo
        }
    </script>
</body>

</html>