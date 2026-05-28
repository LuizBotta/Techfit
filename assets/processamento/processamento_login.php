<?php

session_start();
require "funcoesBD.php";

if (!empty($_POST["inputEmail"]) && !empty($_POST["inputSenha"])) {

    $email = $_POST["inputEmail"];
    $senha = $_POST["inputSenha"];

    $cliente = buscarCliente($email, $senha);

    if ($cliente) {
        // Login bem-sucedido: salva os dados na SESSION
        $_SESSION["cliente_id"]   = $cliente["id"];
        $_SESSION["cliente_nome"] = $cliente["nome"];

        header('Location: ../../index.php');
        die();
    } else {
        // Email ou senha errados
        header('Location: ../../view/login.php?erro=1');
        die();
    }

} else {
    header('Location: ../../view/login.php?erro=1');
    die();
}

?>