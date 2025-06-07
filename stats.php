<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logado'])) {
    header("Location: delicia.php");
    exit;
}

// Executa o script Shell para obter a análise das gorjetas
$CG = shell_exec('./compGorjDMDP.sh');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise das Gorjetas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        h2, h3 {
            color: #333;
        }
        pre {
            text-align: left;
            display: inline-block;
            background: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            white-space: pre-wrap;
            word-wrap: break-word;
            max-width: 80%;
            margin: 0 auto;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Análise das Gorjetas</h2>
    <h3>Em relação à diferença entre a média e o desvio padrão (DMDP)</h3>

    <pre><?php echo htmlspecialchars($CG); ?></pre> <br>

    <a href="menu.php">Voltar</a>

</body>
</html>