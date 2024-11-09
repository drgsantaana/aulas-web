<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="cadastrar.php" method="post" class="formCadastro">
            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" required>
            <label for="email">Email:</label>
            <input type="email" name="txtEmail" id="txtEmail" required>
            <label for="cpf">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" required>
            <label for="txtData">Data:</label>
            <input type="date" name="
            txtData" id="txtData" required>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
            <input type="submit" value="Cadastrar">

        </form>
    </div>

</body>

</html>