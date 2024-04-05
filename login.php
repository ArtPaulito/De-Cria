<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        <style>
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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="post" action="autenticar.php">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
