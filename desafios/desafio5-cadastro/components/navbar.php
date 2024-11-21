<?php
function renderNavbar() {
	$baseURL = '/aulas-web/desafios/desafio5-cadastro';
?>
    <style>
        .navbar-container {
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        nav {
            padding: 20px 30px;
            border: 2px solid #5865F2;
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        nav ul li a:hover {
            color: #5865F2;
            transform: scale(1.1);
        }

        .logo {
            color: #5865F2;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>

    <div class="navbar-container">
        <nav>
            <div class="logo">Desafio 5</div>
            <ul>
                <li><a href="<?php echo $baseURL; ?>/index.php">Menu</a></li>
                <li><a href="<?php echo $baseURL; ?>/pages/funcionarios.php">Funcionários</a></li>
                <li><a href="<?php echo $baseURL; ?>/pages/equipes.php">Equipes</a></li>
                <li><a href="<?php echo $baseURL; ?>/pages/projetos.php">Projetos</a></li>
            </ul>
        </nav>
    </div>
<?php
}
?>