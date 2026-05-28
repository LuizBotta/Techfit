<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tela Inicial</title>
</head>
<body>
    <header> 
        
        <section class="logo">
            <img src="assets/img/logo.png" alt="Imagem Da Logo">
        </section>

        <section class="menu-horizontal">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li class="dropdown">
                    <a href="">EXERCICIOS</a>
                <ul class="submenu">
                    <li><a href="view/exercicios_academia.php">Academia</a></li>
                    <li><a href="view/exercicios_peso_corporal.php">Peso Corporal</a></li>
                    <li><a href="view/exercicios_alongamento.php">Alongamento</a></li>
                </ul>
                </li>
                <li><a href="">TREINOS</a></li>
                <li><a href="view/nutricao.php">NUTRIÇÃO</a></li>
                <li><a href="view/sobre_nos.php">SOBRE NÓS</a></li>
            </ul>
        </section>
        
        <section class="botao-entrar">
            <?php if (isset($_SESSION["cliente_id"])): ?>
                <section>Olá, <?= $_SESSION["cliente_nome"] ?></section>
                <a href="logout.php"><button>SAIR</button></a>
            <?php else: ?>
                <button><a href="view/login.php">ENTRAR</a></button>
            <?php endif; ?> 
        </section>

    </header>
    <!-- **************************************************************************** -->
   
    <section class="conteudo">
        <section class="banner">
            <section class="texto-banner">

                <h1>SEU CORPO.</h1>
                <h1>SUA TECNOLOGIA.</h1>
                <h1 id="destaque">SUA MELHOR VERSÃO.</h1>

                <p>Treinos personalizados para todos os níveis.</p>
                <p>Conquiste resultados com inteligência e disciplina</p>

                <button>COMEÇAR AGORA</button>

                <button>VER EXERCICIOS</button>

            </section>
        </section>

        <section class="modalidades">   
            <h1>Nossas Modalidades</h1>
        </section>
        <section class="modalidades-opcoes"> 
            <section class="modalidade-card">
                <a href="view/exercicios_peso_corporal.php" ><img src="assets/img/flexao.png" alt="Rapaz fazendo flexão"></a>
                <p>Peso Corporal</p>
            </section>
            
            <section class="modalidade-card">
                <a href="view/exercicios_academia.php" ><img src="assets/img/biceps.png" alt="Rapaz fazendo biceps"></a>
                <p>Musculação</p>
            </section>
            
            <section class="modalidade-card">
                <a href="" ><img src="assets/img/mobilidade.png" alt="Rapaz fazendo mobilidade"> </a>
                <p>Mobilidade</p>
            </section>
            
            <section class="modalidade-card">
                <a href="" ><img src="assets/img/alongamento.png" alt="Rapaz fazendo alongamento"> </a>
                <p>Alongamento</p>
            </section>
    </section>

        <section class="banner-barra">
            <img src="assets/img/banner_barra.png" alt="Imagem de uma barra com anilhas">
            <section class="banner-barra-texto">
                <p class="banner-barra-titulo">PRONTO PARA TRANSFORMAR SEU CORPO?</p>
                <p class="banner-barra-subtitulo">Crie sua conta e tenha acesso a treinos, planos e muito mais!</p>
            </section>
             <a href="view/login.php" class="banner-barra-btn">CRIAR CONTA</a>
</section>
        <!-- *********************************************************** -->
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
                <img src="assets/img/logo.png" alt="logo techfit">
                <p>© 2026 TECHFIT - Todos os direitos reservados.</p>
            </section>
        </footer>
    </section>

</body>
</html>