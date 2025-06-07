<?php
 session_start();
 if (!isset($_SESSION['logado'])) {
     header("Location: delicia.php");
     exit;
 } 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "/var/www/html/betadir/dados/" . $_FILES["fileToUpload"]["name"]);
     echo "Arquivo enviado com sucesso.";
 }
?>
