<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cadastrar_usuario.css">
    <title>Cadastro</title>
</head>
<body>
    <header> 
            
            <section class="logo">
                <img src="../assets/img/logo.png" alt="Imagem Da Logo">
            </section>
    
            <section class="menu-horizontal">
                <ul>
                    <li><a href="index.php">INICIO</a></li>
                    <li class="dropdown">
                        <a href="">EXERCICIOS</a>
                    <ul class="submenu">
                        <li><a href="exercicios_academia.php">Academia</a></li>
                        <li><a href="exercicios_peso_corporal.php">Peso Corporal</a></li>
                        <li><a href="exercicios_alongamento.php">Alongamento</a></li>
                    </ul>
                    </li>
                    <li><a href="">TREINOS</a></li>
                    <li><a href="view/nutricao.php">NUTRIÇÃO</a></li>
                    <li><a href="view/login.php">SOBRE NÓS</a></li>
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
                        <h2>CADASTRO</h2>
                        <form method="POST" action="../assets/processamento/processamento_cadastro.php">
                            <!-- Dados pessoais -->
                            <input type="text" placeholder="Nome" name="inputNome" required>
                            <input type="number" placeholder="Altura" step="0.01" min="0" name="inputAltura" required>
                            <input type="number" placeholder="Peso(Kg)" step="0.01" min="0" name="inputPeso" required>
                            <label class="label-nascimento" for="nascimento">Selecione sua data de nascimento:</label>
                            <input type="date" name="inputDataNascimento" required>
                            <!-- escolha de gênero-->
                            <section class="genero-grupo">
                                <label class="label-genero">Gênero:</label>
                                <section class="genero-opcoes">
                                    <label class="radio-label">
                                        <input type="radio" name="inputSexo" value="feminino">
                                        <section>Feminino</section>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="inputSexo" value="masculino">
                                        <section>Masculino</section>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="inputSexo" value="nao informar">
                                        <section>Prefiro não informar</section>
                                    </label>
                                </section>
                            </section>
                            <!-- informações de login  -->
                            <input type="text" placeholder="Tel" name="inputTel">
                            <input type="text" placeholder="E-mail" name="inputEmail">
                            <input type="password" placeholder="Senha" name="inputSenha">
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