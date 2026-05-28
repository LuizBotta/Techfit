<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cadastrar_usuario.css">
    <title>Cadastrar Exercício</title>
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
                    <h2>CADASTRAR EXERCÍCIO</h2>

                    <?php if (isset($_GET["sucesso"])): ?>
                        <p style="color:lightgreen; text-align:center; margin-top:10px;">Exercício cadastrado com sucesso!</p>
                    <?php endif; ?>

                    <?php if (isset($_GET["erro"])): ?>
                        <p style="color:red; text-align:center; margin-top:10px;">Erro ao cadastrar. Tente novamente.</p>
                    <?php endif; ?>

                    <form method="POST" action="../assets/processamento/processamento_cadastro_exercicio.php" enctype="multipart/form-data">
                        <input type="text" placeholder="Nome do exercício" name="inputNome" required>
                        <input type="text" placeholder="Grupo muscular (ex: Peito, Costas, Pernas)" name="inputGrupoMuscular" required>
                        <textarea name="inputDescricao" placeholder="Descrição do exercício" required
                            style="width:100%; margin-top:12px; padding:12px 16px; border:1px solid #00ACFE55;
                                border-radius:8px; background-color:#07131f; color:white; font-size:14px;
                                resize:vertical; min-height:100px;"></textarea>

                        <label style="display:block; font-size:13px; color:#aaa; margin-top:15px; margin-bottom:4px;">
                            Imagem do exercício (opcional)
                        </label>
                        <input type="file" name="inputImagem" accept="image/*"
                            style="width:100%; margin-top:4px; padding:10px 16px; border:1px solid #00ACFE55;
                                border-radius:8px; background-color:#07131f; color:white; font-size:14px;">

                        <input id="botao" type="submit" value="Cadastrar">
                    </form>
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