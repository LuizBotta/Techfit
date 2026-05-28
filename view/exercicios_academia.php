<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/exercicio_academia.css">

    <title>Exercícios Academia</title>
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

            <li><a href="">TREINOS</a></li>
            <li><a href="nutricao.php">NUTRIÇÃO</a></li>
            <li><a href="sobre_nos.php">SOBRE NÓS</a></li>
        </ul>
    </section>

    <section class="botao-entrar">
        <button>ENTRAR</button> 
    </section>

</header>

<section class="banner-exercicios">

    <section class="texto-banner">

        <h1>EXERCÍCIOS.</h1>
        <h1 id="destaque">TÉCNICA. FOCO.</h1>
        <h1 id="destaque">RESULTADOS.</h1>

        <p>
            Explore nossa biblioteca completa de exercícios
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
        <button>Bíceps</button>
        <button>Tríceps</button>

    </section>


    <section class="lista-exercicios">

        <section class="barra-pesquisa">

            <input type="text" placeholder="Buscar exercício...">

        </section>

        <section class="cards-exercicios">

            <section class="card-exercicio">

                <img src="../assets/img/supino.png" alt="Supino">

                <section class="card-texto">

                    <h3>Supino Reto</h3>

                    <p>
                        Exercício clássico para desenvolvimento
                        do peitoral.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>


            <section class="card-exercicio">

                <img src="../assets/img/agachamento.png" alt="Agachamento">

                <section class="card-texto">

                    <h3>Agachamento</h3>

                    <p>
                        Exercício fundamental para pernas
                        e glúteos.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/remada.png" alt="Remada">

                <section class="card-texto">

                    <h3>Remada Sentada</h3>

                    <p>
                        Fortalece a musculatura das costas
                        e melhora postura.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/rosca.png" alt="Rosca">

                <section class="card-texto">

                    <h3>Rosca Direta</h3>

                    <p>
                        Exercício isolado para bíceps
                        com halteres.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/triceps.png" alt="Triceps">

                <section class="card-texto">

                    <h3>Triceps Pulley</h3>

                    <p>
                        Exercício isolado para triceps
                        com corda na polia.
                    </p>

                    <a href="">VER DETALHES</a>

                </section>

            </section>

            <section class="card-exercicio">

                <img src="../assets/img/legpress.png" alt="Legpress">

                <section class="card-texto">

                    <h3>LegPress</h3>

                    <p>
                        Exercício para quadriceps
                        e posterior de coxa.
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