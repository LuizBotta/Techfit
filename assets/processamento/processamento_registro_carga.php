<?php

session_start();
require "funcoesBD.php";

if (!isset($_SESSION["cliente_id"])) {
    header('Location: ../../view/login.php');
    die();
}

if (!empty($_POST["inputExercicio"]) && !empty($_POST["inputSeries"]) &&
    !empty($_POST["inputRepeticoes"]) && isset($_POST["inputPeso"]) && !empty($_POST["inputData"])) {

    $usuarioId   = $_SESSION["cliente_id"];
    $exercicioId = $_POST["inputExercicio"];
    $peso        = $_POST["inputPeso"];
    $series      = $_POST["inputSeries"];
    $repeticoes  = $_POST["inputRepeticoes"];
    $data        = $_POST["inputData"];

    $result = inserirRegistroCarga($usuarioId, $exercicioId, $peso, $repeticoes, $series, $data);

    if ($result) {
        header('Location: ../../view/registro_carga.php?sucesso=1');
    } else {
        header('Location: ../../view/registro_carga.php?erro=1');
    }
    die();
}

header('Location: ../../view/registro_carga.php?erro=1');
die();

?>