<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: delicia.php");
    exit;
}

$resultado = shell_exec('./calculaModa.sh');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta Moda</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #fff0e6, #fdf6f0);
            color: #4b2e2e;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-size: 2.2rem;
            color: #b03a2e;
            margin-bottom: 20px;
        }

        pre {
            background-color: #fff;
            border: 1px solid #e0c2b3;
            padding: 20px;
            width: 90%;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            font-size: 1rem;
            white-space: pre-wrap;
            word-break: break-word;
        }

        a {
            margin-top: 30px;
            background-color: #e6b89c;
            color: #fff;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #d67b5c;
        }
    </style>
</head>
<body>
    <h2>📊 Consulta de Moda das Gorjetas</h2>
    <pre><?= htmlspecialchars($resultado) ?></pre>
    <a href="menu.php">⬅️ Voltar ao Menu</a>
</body>
</html>
