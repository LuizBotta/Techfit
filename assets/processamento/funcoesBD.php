<?php

function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "", "techfit");
    return $conexao;
}

function inserirCliente($nome, $altura, $peso, $dataNascimento, $genero, $tel, $email, $senha){
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (nome, altura, peso, dataNascimento, genero, telefone, email, senha) 
             VALUES ('$nome', '$altura', '$peso', '$dataNascimento', '$genero', '$tel', '$email', '$senha')";
    mysqli_query($conexao, $consulta);
}

function buscarCliente($email, $senha){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);
    return mysqli_fetch_assoc($resultado);
}


?>