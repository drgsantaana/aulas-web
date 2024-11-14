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
    <div class="container" id="buttonContainer">
        <button class="continue-application" id="btnRegister">
            <div>
                <div class="pencil"></div>
                <div class="folder">
                    <div class="top">
                        <svg viewBox="0 0 24 27">
                            <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                        </svg>
                    </div>
                    <div class="paper"></div>
                </div>
            </div>
            Gerar Carteirinha
        </button>
    </div>

    <div class="container" id="formContainer" style="display: none;">
        <!-- Formulário de Cadastro -->
        <form action="cadastrar.php" method="post" enctype="multipart/form-data" class="formCadastro" id="formCadastro">
            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" required>
            <label for="txtEmail">Email:</label>
            <input type="email" name="txtEmail" id="txtEmail" required>
            <label for="txtCpf">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" required>
            <label for="txtData">Data:</label>
            <input type="date" name="txtData" id="txtData" required>
            <label for="foto">Foto</label>
            <input type="file" id="txtCaminhoImagem" accept="image/*">

            <br><br>
            <div>
                <img id="previsaoImagem" style="display:none;">
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        // Variáveis para o botão e o formulário
        const buttonContainer = document.getElementById('buttonContainer');
        const btnRegister = document.getElementById('btnRegister');
        const formContainer = document.getElementById('formContainer');

        // Exibe o formulário e oculta o botão de registro ao clicar no botão
        btnRegister.addEventListener('click', () => {
            formContainer.style.display = 'flex';
            buttonContainer.style.display = 'none'; // Esconde o container do botão
        });

        let cropper;
        const txtCaminhoImagem = document.getElementById('txtCaminhoImagem');
        const previsaoImagem = document.getElementById('previsaoImagem');
        const formCadastro = document.getElementById('formCadastro');

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

        formCadastro.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(formCadastro);

            if (cropper) {
                cropper.getCroppedCanvas().toBlob((blob) => {
                    formData.append('imgRecorte', blob, 'imgRecorte.png');
                    enviarFormulario(formData);
                });
            } else {
                enviarFormulario(formData);
            }
        });

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