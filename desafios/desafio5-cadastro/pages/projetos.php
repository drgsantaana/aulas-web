<?php
require_once '../components/navbar.php';
require_once '../clsEquipe.php';
require_once '../clsProjeto.php';
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
        table {
            color: #fff;
        }

        table {

            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #5865F2;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #5865F2;
            color: white;
        }
    </style>
</head>

<body>
    <?php
	renderNavbar();
	?>

    <div class="container">
        <h1>Projetos Cadastrados</h1>

        <?php
		$projeto = new clsProjeto();
		$projetos = $projeto->selecionarTodos();
		?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Salario</th>
                    <th>Equipe</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
				foreach ($projetos as $p) {
					$equipe = new clsEquipe();
					$equipeNome = $equipe->selecionarPorId($p['equipe_id']);
					echo "<tr>";
					echo "<td>" . $p['id'] . "</td>";
					echo "<td>" . $p['nome'] . "</td>";
					echo "<td>" . $p['salario'] . "</td>";
					echo "<td>" . $equipeNome['nome'] . "</td>";
					echo "<td><a href='../removerProjeto.php?id=" . $p['id'] . "'><button class='btnRemove'>
                    <svg viewBox='0 0 15 17.5' height='17.5' width='15' xmlns='http://www.w3.org/2000/svg' class='iconRemove'>
                    <path transform='translate(-2.5 -1.25)' d='M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z' id='Fill'></path>
                    </svg>
                    </button></a></td>";
					echo "</tr>";
				}
				?>
            </tbody>
        </table>

        <a href="./cadastroProjeto.php">
            <button class="btnAdd">
                <span class="text">Cadastrar </span>
                <span class="iconAdd">
                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">

                        <path d="M12 5v14m-7-7h14" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" />
                    </svg>
                    <span class="buttonSpan">+</span>
                </span>
            </button>
        </a>


    </div>

</body>

</html>