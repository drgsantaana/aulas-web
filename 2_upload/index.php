<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 UPLOAD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
</head>

<body>
    <h2>Carregar e Recortar imagem</h2>
    <input type="file" id="txtCaminhoImagem" accept="image/*">
    <br><br>
    <div>
        <img id="previsaoImagem" style="display: none;">
    </div>
    <button id="btnUpload" style="display: none;">UPLOAD</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        let cropper;
        const txtCaminhoImagem = document.getElementById('txtCaminhoImagem');
        const previsaoImagem = document.getElementById('previsaoImagem');
        const btnUpload = document.getElementById('btnUpload');

        txtCaminhoImagem.addEventListener('change', (event) => {
            const file = txtCaminhoImagem.files[0];
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
                        viewMode: 2,
                    });
                    btnUpload.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        btnUpload.addEventListener('click', () => {
            if (cropper) {
                cropper.getCroppedCanvas().toBlob((blob) => {
                    const formData = new FormData();
                    formData.append('imgRecorte', blob, 'imgRecorte.png');

                    fetch('upload.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            if (data.redirectUrl) {
                                window.location.href = data.redirectUrl;
                            } else {
                                alert('Erro ' + (data.error || 'Erro desconhecido'));
                            }
                        })
                        .catch((error) => {
                            console.error('Erro:', error);
                        });
                });
            }
        });
    </script>
</body>

</html>