<!-- ##############################
Nome: Daniel Reis
Curso: Engenharia de Computação - IFMG - Campus Bambui
Descrição: Desafio 4 - Criar um formulário de cadastro com campos de texto e upload de imagem, com pré-visualização da imagem e recorte opcional.
############################## -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/card.svg" type="image/svg">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
</head>

<body>
    <div class="container">
        <form action="cadastrar.php" method="post" enctype="multipart/form-data" class="formCadastro" id="formCadastro">

            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" id="txtNome">
            <label for="txtEmail">Email:</label>
            <input type="email" name="txtEmail" id="txtEmail">
            <label for="txtCpf">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf">
            <label for="txtData">Data:</label>
            <input type="date" name="txtData" id="txtData">
            <label for="foto">Foto</label>
            <input type="file" id="txtCaminhoImagem" accept="image/*">

            <br><br>
            <div>
                <img id="previsaoImagem" style="display:none;">
            </div>
            <input type="submit" value="Cadastrar">

        </form>
    </div>

    <!-- SCRIPTS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        let cropper;
        const txtCaminhoImagem = document.getElementById('txtCaminhoImagem');
        const previsaoImagem = document.getElementById('previsaoImagem');
        const formCadastro = document.getElementById('formCadastro');

        // Exibir a pré-visualização da imagem carregada
        txtCaminhoImagem.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    previsaoImagem.src = reader.result;
                    previsaoImagem.style.display = 'block';
                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(previsaoImagem, {
                        aspectRatio: 1,
                        viewMode: 2
                    });
                };
                reader.readAsDataURL(file);
            }
        });

        // Enviar o formulário
        formCadastro.addEventListener('submit', (event) => {
            event.preventDefault(); // Evita o envio padrão para manipular com JS

            const formData = new FormData(formCadastro);

            // Verificar se há uma imagem recortada (se não, o PHP atribui a default)
            if (cropper) {
                cropper.getCroppedCanvas().toBlob((blob) => {
                    formData.append('imgRecorte', blob, 'imgRecorte.png');
                    enviarFormulario(formData); // Enviar com imagem recortada
                });
            } else {
                enviarFormulario(formData); // Enviar sem imagem recortada (o PHP atribui a default)
            }
        });

        // Função para enviar o formulário via fetch
        function enviarFormulario(formData) {
            fetch('cadastrar.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.redirectUrl) {
                        window.location.href = data.redirectUrl;
                    } else {
                        alert('Erro: ' + data.error || 'Erro desconhecido.');
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                });
        }
    </script>
</body>

</html>