<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Recuperar Senha</title>
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
            </ul>
        </section>

        <section class="botao-entrar">
            <?php if (isset($_SESSION["cliente_id"])): ?>
                <section>Olá, <?= $_SESSION["cliente_nome"] ?></section>
                <a href="../logout.php"><button>SAIR</button></a>
            <?php else: ?>
                <a href="login.php"><button>ENTRAR</button></a>
            <?php endif; ?>
        </section>
    </header>

    <section class="banner">
        <section class="texto-banner">
            <section class="fundo-forms">
                <section class="formulario">
                    <h2>RECUPERAR SENHA</h2>

                    <?php if (isset($_GET["erro"])): ?>
                        <p style="color:red;">E-mail não encontrado.</p>
                    <?php endif; ?>

                    <?php if (isset($_GET["sucesso"])): ?>
                        <p style="color:lightgreen;">Senha alterada com sucesso!</p>
                    <?php endif; ?>

                    <form method="POST" action="../assets/processamento/processamento_recuperar_senha.php">
                        <input type="text" placeholder="E-mail cadastrado" name="inputEmail" required>
                        <input type="password" placeholder="Nova senha" name="inputNovaSenha" required>
                        <input type="password" placeholder="Confirmar nova senha" name="inputConfirmarSenha" required>
                        <input id="botao" type="submit" value="Alterar Senha">
                    </form>

                    <p>Lembrou a senha? <a href="login.php">Voltar ao login</a></p>
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