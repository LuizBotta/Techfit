<?php

function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "", "techfit");
    mysqli_set_charset($conexao, "utf8");
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

function atualizarSenha($email, $novaSenha){
    $conexao  = conectarBD();
    $consulta = "UPDATE cliente SET senha = '$novaSenha' WHERE email = '$email'";
    mysqli_query($conexao, $consulta);
}

function inserirExercicio($nome, $grupoMuscular, $descricao, $imagem){
    $conexao  = conectarBD();
    $consulta = "INSERT INTO exercicios (nome, grupo_muscular, descricao, imagem) 
                 VALUES ('$nome', '$grupoMuscular', '$descricao', '$imagem')";
    mysqli_query($conexao, $consulta);
}
function buscarClientePorId($id){
    $conexao  = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $consulta);
    return mysqli_fetch_assoc($resultado);
}

function buscarTodosExercicios(){
    $conexao  = conectarBD();
    $consulta = "SELECT * FROM exercicios ORDER BY grupo_muscular, nome";
    $resultado = mysqli_query($conexao, $consulta);
    $exercicios = [];
    while ($row = mysqli_fetch_assoc($resultado)) {
        $exercicios[] = $row;
    }
    return $exercicios;
}

function inserirTreino($clienteId, $exercicioId, $series, $repeticoes){
    $conexao  = conectarBD();
    $consulta = "INSERT INTO treino_usuario (cliente_id, exercicio_id, series, repeticoes) 
                 VALUES ('$clienteId', '$exercicioId', '$series', '$repeticoes')";
    return mysqli_query($conexao, $consulta);
}

function buscarTreinoUsuario($clienteId){
    $conexao  = conectarBD();
    $consulta = "SELECT t.*, e.nome AS exercicio_nome, e.grupo_muscular 
                 FROM treino_usuario t 
                 JOIN exercicios e ON t.exercicio_id = e.id 
                 WHERE t.cliente_id = '$clienteId'
                 ORDER BY e.grupo_muscular, e.nome";
    $resultado = mysqli_query($conexao, $consulta);
    $treino = [];
    while ($row = mysqli_fetch_assoc($resultado)) {
        $treino[] = $row;
    }
    return $treino;
}

function removerExercicioTreino($id, $clienteId){
    $conexao  = conectarBD();
    $consulta = "DELETE FROM treino_usuario WHERE id = '$id' AND cliente_id = '$clienteId'";
    return mysqli_query($conexao, $consulta);
}

function inserirRegistroCarga($usuarioId, $exercicioId, $peso, $repeticoes, $series, $data){
    $conexao  = conectarBD();
    $consulta = "INSERT INTO registro_carga (usuario_id, exercicio_id, peso, repeticoes, series, data_registro) 
                 VALUES ('$usuarioId', '$exercicioId', '$peso', '$repeticoes', '$series', '$data')";
    return mysqli_query($conexao, $consulta);
}

function buscarHistoricoCarga($usuarioId){
    $conexao  = conectarBD();
    $consulta = "SELECT r.*, e.nome AS exercicio_nome, e.grupo_muscular 
                 FROM registro_carga r 
                 JOIN exercicios e ON r.exercicio_id = e.id 
                 WHERE r.usuario_id = '$usuarioId'
                 ORDER BY r.data_registro DESC, e.nome";
    $resultado = mysqli_query($conexao, $consulta);
    $historico = [];
    while ($row = mysqli_fetch_assoc($resultado)) {
        $historico[] = $row;
    }
    return $historico;
}









?>