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
    <title>Bistrô Delícia</title>
    <style>
        /* Estilo geral da página */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #fff0e6, #fdf6f0);
            color: #4b2e2e;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            font-size: 2.8rem;
            margin-bottom: 40px;
            color: #b03a2e;
            text-shadow: 1px 1px #fff;
        }

        a {
            display: block;
            background-color: #e6b89c;
            color: #fff;
            text-decoration: none;
            padding: 15px 25px;
            margin: 10px;
            width: 250px;
            text-align: center;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #d67b5c;
            transform: scale(1.03);
        }

        a:last-child {
            background-color: #a93226;
        }

        a:last-child:hover {
            background-color: #922b21;
        }
    </style>
</head>
<body>
    <h2>🍽️ Bistrô Delícia</h2>
    <a href="enviar.php">📤 Enviar Arquivos</a>
    <a href="consulta.php">🔎 Consultar por Gênero</a>
    <a href="consultamoda.php">📊 Consulta Moda</a>
    <a href="graf.html">📉 Gráfico Gorjetas</a>
     <a href="stats.php">📈 DMDP</a>
    <a href="sair.php">🚪 Sair</a>
</body>
</html>
