<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        /* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

a {
    text-decoration: none;
    color: #0066cc;
}

a:hover {
    text-decoration: underline;
}
 </style>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à Biblioteca</h1>
        <p><a href="logout.php">Sair</a></p>
    </div>
</body>
</html>
