<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: delicia.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    <h2>Envie um arquivo</h2>
    <input type="file" id="fileInput" required><br><br>
    <button onclick="uploadFile()">Enviar Arquivo</button>
    <p id="message"></p>

    <script>
        function uploadFile() {
            const fileInput = document.getElementById("fileInput");
            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append("fileToUpload", file);

            fetch("upload.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("message").innerText = data;
            });
        }
    </script>
    <a href="menu.php">Voltar</a>
</body>
</html>
   
