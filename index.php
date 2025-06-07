<?php
session_start();
$LOGIN = $_POST['lg'] ?? '';
$SENHA = $_POST['se'] ?? '';

if ($LOGIN === "joca" && $SENHA === "1234") {
    $_SESSION['logado'] = true;
    header("Location: menu.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bistrô Delícia - Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #fff0e6, #fdf6f0);
            color: #4b2e2e;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #b03a2e;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
            color: #5a3e36;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #e0c2b3;
            border-radius: 8px;
            background-color: #fff8f3;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #e6b89c;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d67b5c;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>🍷 Bistrô Delícia</h2>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($LOGIN !== "joca" || $SENHA !== "1234")): ?>
            <div class="error">Login ou senha inválidos.</div>
        <?php endif; ?>
        <form method="post">
            <label for="lg">Login</label>
            <input type="text" id="lg" name="lg" required>

            <label for="se">Senha</label>
            <input type="password" id="se" name="se" required>

            <input type="submit" value="Acessar">
        </form>
    </div>
</body>
</html>
