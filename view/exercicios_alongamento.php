<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/exercicios_peso_corporal.css">

    <title>Exercícios Peso Corporal</title>
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

<section class="banner-exercicios">

    <section class="texto-banner">

        <h1>EXERCÍCIOS.</h1>
        <h1 id="destaque">TÉCNICA. FOCO.</h1>
        <h1 id="destaque">RESULTADOS.</h1>

        <p>
            Explore nossa biblioteca completa de alongamento
            para todos os grupos musculares.
        </p>

    </section>

</section>

<section class="modalidades">   
            <h1>Exercicios</h1>
        </section>

<section class="conteudo-exercicios">

    <section class="filtro">

        <h2>FILTRAR EXERCÍCIOS</h2>

        <p>GRUPO MUSCULAR</p>

        <button>Peito</button>
        <button>Costas</button>
        <button>Pernas</button>
        <button>Ombros</button>
        

    </section>

    <section class="lista-exercicios">

        <section class="barra-pesquisa">

            <input type="text" placeholder="Buscar exercício...">

        </section>


        <section class="cards-exercicios">

            <section class="card-exercicio">

                <img src="../assets/img/peito.png" alt="peito">

                <section class="card-texto">

                    <h3>Alongamento para Peitoral</h3>

                    <p>
                        Mãos entrelaçadas atrás do corpo, puxando os braços para trás e expandindo o tórax.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/triceps_alongamento.png" alt="triceps">

                <section class="card-texto">

                    <h3>Alongamento de triceps</h3>

                    <p>
                        Braço elevado e dobrado atrás da cabeça, puxado pelo outro braço.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/posterior.png" alt="posterior">

                <section class="card-texto">

                    <h3>Alongamento de Posterior</h3>

                    <p>
                        Tronco inclinado à frente com pernas estendidas, tocando os pés.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/quadril.png" alt="quadril">

                <section class="card-texto">

                    <h3>Alongamento de quadril</h3>

                    <p>
                        Postura de avanço com o joelho no chão, empurrando o quadril à frente para abrir a região.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/panturrilha.png" alt="panturrilha">

                <section class="card-texto">

                    <h3>Alongamento da Panturrilha</h3>

                    <p>
                        Corpo inclinado à frente com uma perna estendida e o calcanhar pressionado contra o solo.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/trapezio.png" alt="trapezio">

                <section class="card-texto">

                    <h3>Alongamento do Trapezio</h3>

                    <p>
                        Cabeça inclinada lateralmente com a mão puxando suavemente.
                    </p>

                    <a href="">VER DETALHES</a>

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