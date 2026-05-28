<?php

require "funcoesBD.php";

if (!empty($_POST["inputEmail"]) && !empty($_POST["inputNovaSenha"]) && !empty($_POST["inputConfirmarSenha"])) {

    $email          = $_POST["inputEmail"];
    $novaSenha      = $_POST["inputNovaSenha"];
    $confirmarSenha = $_POST["inputConfirmarSenha"];

    if ($novaSenha !== $confirmarSenha) {
        header('Location: ../../view/recuperar_senha.php?erro=1');
        die();
    }

    $conexao  = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $atualizar = "UPDATE cliente SET senha = '$novaSenha' WHERE email = '$email'";
        mysqli_query($conexao, $atualizar);

        header('Location: ../../view/recuperar_senha.php?sucesso=1');
        die();
    } else {
        
        header('Location: ../../view/recuperar_senha.php?erro=1');
        die();
    }

} else {
    header('Location: ../../view/recuperar_senha.php?erro=1');
    die();
}

?>