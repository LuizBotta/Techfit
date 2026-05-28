<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login</title>
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
                    </ul>
                </li>
                    <li><a href="nutricao.php">NUTRIÇÃO</a></li>
                    <li><a href="sobre_nos.php">SOBRE NÓS</a></li>
                </ul>
            </section>
            
        <section class="botao-entrar">
            <?php if (isset($_SESSION["cliente_id"])): ?>
                <section>Olá, <?= $_SESSION["cliente_nome"] ?></section>
                <a href="logout.php"><button>SAIR</button></a>
            <?php else: ?>
                <button><a href="login.php">ENTRAR</a></button>
            <?php endif; ?> 
        </section>
    
    </header>
    
    <section class="banner">
            <section class="texto-banner">
                <section class="fundo-forms">   
                    <section class="formulario">
                        <h2>Login</h2>
                        <?php if (isset($_GET["erro"])): ?>
                            <p id="erro">E-mail ou senha incorretos.</p>
                        <?php endif; ?>

                        <form method="POST" action="../assets/processamento/processamento_login.php">
                            <input type="email" placeholder="E-mail" name="inputEmail" required>
                            <input type="password" placeholder="Senha" name="inputSenha" required>
                            <input id="botao" type="submit" value="Entrar">
                        </form>
                        <section class="recuperar-senha">
                            <p>Esqueceu sua senha? <a href="recuperar_senha.php">Clique aqui</a></p>
                        </section>
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
                        <img src="assets/img/facebook.png">
                        <p>Facebook</p>
                    </section>
                    
                    <section class="item">
                        <img src="assets/img/instagram.png">
                        <p>Instagram</p>
                    </section>
                    
                    <section class="item">
                        <img src="assets/img/twitter.png">
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
