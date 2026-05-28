<?php
session_start();

// Só acessa se estiver logado
if (!isset($_SESSION["cliente_id"])) {
    header('Location: login.php');
    die();
}

require "../assets/processamento/funcoesBD.php";

$conexao  = conectarBD();
$id       = $_SESSION["cliente_id"];
$consulta = "SELECT * FROM cliente WHERE id = '$id'";
$resultado = mysqli_query($conexao, $consulta);
$cliente  = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cadastrar_usuario.css">
    <title>Meu Perfil</title>

</head>
<body>
    <header>
        <section class="logo">
            <img src="../assets/img/logo.png" alt="Imagem Da Logo">
        </section>

        <section class="menu-horizontal">
            <ul>
                <li><a href="../index.php">INICIO</a></li>
                <li class="dropdown">
                    <a href="">EXERCICIOS</a>
                    <ul class="submenu">
                        <li><a href="exercicios_academia.php">Academia</a></li>
                        <li><a href="exercicios_peso_corporal.php">Peso Corporal</a></li>
                        <li><a href="exercicios_alongamento.php">Alongamento</a></li>
                        <li><a href="visualizar_exercicios.php">Todos os Exercícios</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="">TREINOS</a>
                    <ul class="submenu">
                        <li><a href="montar_treino.php">Montar Treino</a></li>
                        <li><a href="visualizar_exercicios.php">Ver Treinos</a></li>
                        <li><a href="registro_carga.php">Registro de Cargas</a></li>
                    </ul>
                </li>
                <li><a href="nutricao.php">NUTRIÇÃO</a></li>
                <li><a href="sobre_nos.php">SOBRE NÓS</a></li>
                </li>
            </ul>
        </section>

        <section class="botao-entrar">
            <span>Olá, <?= $_SESSION["cliente_nome"] ?></span>
            <a href="../logout.php"><button>SAIR</button></a>
        </section>
    </header>

    <section class="banner">
        <section class="texto-banner">
            <section class="fundo-forms">
                <section class="formulario">

                    <div class="perfil-avatar">
                        <?= strtoupper(mb_substr($cliente["nome"], 0, 1)) ?>
                    </div>

                    <h2>MEU PERFIL</h2>

                    <section class="perfil-info">
                        <section class="perfil-campo">
                            <span>Nome</span>
                            <p><?= htmlspecialchars($cliente["nome"]) ?></p>
                        </section>

                        <section class="perfil-campo">
                            <span>E-mail</span>
                            <p><?= htmlspecialchars($cliente["email"]) ?></p>
                        </section>

                        <section class="perfil-campo">
                            <span>Data de Nascimento</span>
                            <p><?= date("d/m/Y", strtotime($cliente["dataNascimento"])) ?></p>
                        </section>

                        <section class="perfil-campo">
                            <span>Telefone</span>
                            <p><?= htmlspecialchars($cliente["telefone"]) ?></p>
                        </section>

                        <section class="perfil-campo">
                            <span>Gênero</span>
                            <p><?= htmlspecialchars($cliente["genero"]) ?></p>
                        </section>

                        <section class="perfil-campo">
                            <span>Peso</span>
                            <p><?= $cliente["peso"] ?> kg</p>
                        </section>

                        <section class="perfil-campo">
                            <span>Altura</span>
                            <p><?= $cliente["altura"] ?> m</p>
                        </section>
                    </section>

                    <a href="recuperar_senha.php">
                        <input id="botao" type="button" value="Alterar Senha">
                    </a>

                </section>
            </section>
        </section>
    </section>

    <footer>
        <section class="footer-links">
            <section class="navegacao">
                <h3>NAVEGAÇÃO</h3>
                <a href="#">Início</a>
                <a href="#">Exercícios</a>
                <a href="#">Treinos</a>
                <a href="#">Nutrição</a>
            </section>
            <section class="modalidade">
                <h3>MODALIDADES</h3>
                <a href="#">Peso Corporal</a>
                <a href="#">Musculação</a>
                <a href="#">Alongamento</a>
            </section>
            <section class="contato">
                <h3>CONTATO</h3>
                <p>techfit@email.com.br</p>
                <p>Presidente Prudente - SP</p>
                <p>(18) 99799-9999</p>
            </section>
            <section class="redes-sociais">
                <h3>REDES SOCIAIS</h3>
                <section class="item">
                    <img src="../assets/img/facebook.png">
                    <p>Facebook</p>
                </section>
                <section class="item">
                    <img src="../assets/img/instagram.png">
                    <p>Instagram</p>
                </section>
                <section class="item">
                    <img src="../assets/img/twitter.png">
                    <p>Twitter</p>
                </section>
            </section>
        </section>
        <section class="copyright">
            <img src="../assets/img/logo.png" alt="logo techfit">
            <p>© 2026 TECHFIT - Todos os direitos reservados.</p>
        </section>
    </footer>
</body>
</html>