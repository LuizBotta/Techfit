<?php

require "funcoesBD.php";

$conexao       = conectarBD();
$nome          = $_POST["inputNome"];
$grupoMuscular = $_POST["inputGrupoMuscular"];
$descricao     = $_POST["inputDescricao"];
$imagem        = null;


if (!empty($_FILES["inputImagem"]["name"])) {

    $nomeArquivo  = basename($_FILES["inputImagem"]["name"]);
    $extensao     = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $permitidas   = ["jpg", "jpeg", "png", "gif", "webp"];

    if (!in_array($extensao, $permitidas)) {
        header('Location: ../../view/cadastrar_exercicio.php?erro=2');
        die();
    }

    $nomeUnico  = uniqid("exercicio_") . "." . $extensao;
    $destino    = $_SERVER['DOCUMENT_ROOT'] . "/projeto_eletiva/techfit/Techfit/assets/img/exercicios/" . $nomeUnico;

    // Cria a pasta se não existir
    if (!is_dir($_SERVER['DOCUMENT_ROOT'] . "/projeto_eletiva/techfit/Techfit/assets/img/exercicios/")) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . "/projeto_eletiva/techfit/Techfit/assets/img/exercicios/", 0755, true);
}

    if (move_uploaded_file($_FILES["inputImagem"]["tmp_name"], $destino)) {
        $imagem = "../assets/img/exercicios/" . $nomeUnico;
    } else {
        header('Location: ../../view/cadastrar_exercicio.php?erro=3');
        die();
    }
}

$consulta = "INSERT INTO exercicios (nome, grupo_muscular, descricao, imagem) 
             VALUES ('$nome', '$grupoMuscular', '$descricao', '$imagem')";

$result = mysqli_query($conexao, $consulta);

if ($result) {
    header('Location: ../../view/cadastrar_exercicio.php?sucesso=1');
} else {
    header('Location: ../../view/cadastrar_exercicio.php?erro=1');
}
die();

?>