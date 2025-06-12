<?php

include 'conexão.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_usuario = $_POST['nome_usuario'];
    $contato_usuario = $_POST['contato_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

    $senha_hash = password_hash($senha_usuario, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro (nome_usuario, contato_usuario, email_usuario, senha_usuario)
    VALUES (?, ?, ?, ?)";

    if ($stmt = $mysqli->prepare($sql)) {

        $stmt->bind_param("ssss", $nome_usuario, $contato_usuario, $email_usuario, $senha_hash);

        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $mysqli->error;
        }

        $stmt->close();
    } else {
        echo "Erro ao preparar a consulta: " . $mysqli->error;
    }
}

$mysqli->close();
?>