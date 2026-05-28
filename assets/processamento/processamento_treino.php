<?php

session_start();
require "funcoesBD.php";

if (!isset($_SESSION["cliente_id"])) {
    header('Location: ../../view/login.php');
    die();
}

$clienteId = $_SESSION["cliente_id"];

// Remover exercício do treino
if (!empty($_POST["inputRemover"])) {
    $id = $_POST["inputRemover"];
    removerExercicioTreino($id, $clienteId);
    header('Location: ../../view/montar_treino.php?removido=1');
    die();
}

// Adicionar exercício ao treino
if (!empty($_POST["inputExercicio"]) && !empty($_POST["inputSeries"]) && !empty($_POST["inputRepeticoes"])) {
    $exercicioId = $_POST["inputExercicio"];
    $series      = $_POST["inputSeries"];
    $repeticoes  = $_POST["inputRepeticoes"];

    $result = inserirTreino($clienteId, $exercicioId, $series, $repeticoes);

    if ($result) {
        header('Location: ../../view/montar_treino.php?sucesso=1');
    } else {
        header('Location: ../../view/montar_treino.php?erro=1');
    }
    die();
}

header('Location: ../../view/montar_treino.php');
die();

?>