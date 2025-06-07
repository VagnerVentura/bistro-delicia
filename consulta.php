<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: delicia.php");
    exit;
}

$GM = shell_exec('./filtroGM.sh');
$GH = shell_exec('./filtroGH.sh');
$CALCS = shell_exec('./calculaNovo.sh');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta por Gênero</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #fff0e6, #fdf6f0);
            color: #4b2e2e;
            margin: 0;
            padding: 40px;
        }

        h2 {
            color: #b03a2e;
            font-size: 2rem;
            border-bottom: 2px solid #e6b89c;
            padding-bottom: 5px;
        }

        h3 {
            color: #a93226;
            margin-top: 25px;
            font-size: 1.5rem;
        }

        pre {
            background-color: #fff8f2;
            padding: 15px;
            border: 1px solid #e6b89c;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            overflow-x: auto;
            font-size: 1rem;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            background-color: #e6b89c;
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #d67b5c;
        }
    </style>
</head>
<body>
    <h2>📊 Gorjetas por Gênero</h2>

    <h3>👩 Mulheres</h3>
    <pre><?= htmlspecialchars($GM) ?></pre>

    <h3>👨 Homens</h3>
    <pre><?= htmlspecialchars($GH) ?></pre>

    <h2>💰 Total das Gorjetas, Média e Desvio Padrão</h2>
    <pre><?= htmlspecialchars($CALCS) ?></pre>

    <a href="menu.php">🔙 Voltar ao Menu</a>
</body>
</html>
