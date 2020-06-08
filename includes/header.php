<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Loginsystem</title>
</head>
<body>
    <header>
        <?php if(isset($_SESSION['user'])): ?>
        <a href="?page=home"><h1>Logo</h1></a>
        <nav>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="actions/sair.php">Sair</a></li>
            </ul>
        </nav>
        <?php else: ?>
            <a href="?page=login"><h1>Logo</h1></a>
            <nav>
                <ul>
                    <li><a href="?page=login">Login</a></li>
                    <li><a href="?page=cadastro">Cadastro</a></li>
                </ul>
        </nav>
        <?php endif; ?>
    </header>
</body>
</html>