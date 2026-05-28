<?php

session_start();
require "funcoesBD.php";

if (!empty($_POST["inputNome"]) && !empty( $_POST["inputAltura"]) &&
    !empty($_POST["inputPeso"]) && !empty( $_POST["inputDataNascimento"]) &&
    !empty($_POST["inputSexo"]) && !empty( $_POST["inputTel"]) &&
    !empty($_POST["inputEmail"]) && !empty( $_POST["inputSenha"])) {

    $nome = $_POST["inputNome"];
    $altura = $_POST["inputAltura"];
    $peso = $_POST["inputPeso"];
    $dataNascimento = $_POST["inputDataNascimento"];
    $sexo = $_POST["inputSexo"];
    $tel = $_POST["inputTel"];
    $email = $_POST["inputEmail"];
    $senha = $_POST["inputSenha"];

    inserirCliente($nome, $altura, $peso, $dataNascimento, $sexo, $tel, $email, $senha);


    header('Location: ../../view/login.php');
    die();
    }
    



?>