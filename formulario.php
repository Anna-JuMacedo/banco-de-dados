<?php

include 'conexão.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Cadastro do Usuário</h2>
<form action="cadastrar.php" method="POST">
    <label for="nome_usuario">Nome:</label><br>
    <input type="text" id="nome_usuario" name="nome_usuario" required><br><br>

    <label for="contato_usuario">Contato:</label><br>
    <input type="text" id="contato_usuario" name="contato_usuario" required><br><br>

    <label for="email_usuario">E-mail:</label><br>
    <input type="email" id="email_usuario" name="email_usuario" required><br><br>

    <label for="senha_usuario">Senha:</label><br>
    <input type="password" id="senha_usuario" name="senha_usuario" required><br><br>

<button type="submit">cadastrar</button>
</form>
</body>
</html>