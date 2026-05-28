<?php
session_start();
require "../assets/processamento/funcoesBD.php";

$conexao   = conectarBD();
$consulta  = "SELECT * FROM exercicios ORDER BY grupo_muscular, nome";
$resultado = mysqli_query($conexao, $consulta);
$exercicios = [];
while ($row = mysqli_fetch_assoc($resultado)) {
    $exercicios[] = $row;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/exercicio_academia.css">
    <title>Todos os Exercícios</title>
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
        </ul>
    </section>

    <section class="botao-entrar">
        <?php if (isset($_SESSION["cliente_id"])): ?>
            <span>Olá, <?= $_SESSION["cliente_nome"] ?></span>
            <a href="../logout.php"><button>SAIR</button></a>
        <?php else: ?>
            <a href="login.php"><button>ENTRAR</button></a>
        <?php endif; ?>
    </section>
</header>

<section class="banner-exercicios">
    <section class="texto-banner">
        <h1>TODOS OS</h1>
        <h1 id="destaque">EXERCÍCIOS.</h1>
        <p>Biblioteca completa de exercícios cadastrados no sistema.</p>
    </section>
</section>

<section class="modalidades">
    <h1>Exercícios Cadastrados</h1>
</section>

<section class="conteudo-exercicios">

    <section class="filtro">
        <h2>FILTRAR</h2>
        <p>GRUPO MUSCULAR</p>
        <button onclick="filtrar('todos')">Todos</button>
        <?php
        $grupos = array_unique(array_column($exercicios, 'grupo_muscular'));
        foreach ($grupos as $grupo):
        ?>
            <button onclick="filtrar('<?= htmlspecialchars($grupo) ?>')"><?= htmlspecialchars($grupo) ?></button>
        <?php endforeach; ?>

        <?php if (isset($_SESSION["cliente_id"])): ?>
            <hr style="margin: 20px 0; border-color: #00AC;">
            <p>AÇÕES</p>
            <a href="cadastrar_exercicio.php">
                <button>+ Cadastrar Exercício</button>
            </a>
        <?php endif; ?>
    </section>

    <section class="lista-exercicios">
        <section class="barra-pesquisa">
            <input type="text" id="busca" placeholder="Buscar exercício..." oninput="buscar()">
        </section>

        <?php if (empty($exercicios)): ?>
            <p style="color:#aaa; text-align:center; margin-top:40px;">Nenhum exercício cadastrado ainda.</p>
        <?php else: ?>
        <section class="cards-exercicios" id="cards">
            <?php foreach ($exercicios as $ex): ?>
                <section class="card-exercicio" data-grupo="<?= htmlspecialchars($ex['grupo_muscular']) ?>">
                    <?php if (!empty($ex['imagem'])): ?>
                        <img src="<?= htmlspecialchars($ex['imagem']) ?>" alt="<?= htmlspecialchars($ex['nome']) ?>">
                    <?php else: ?>
                        <div style="width:100%; height:200px; background:#0d2235; display:flex; align-items:center; justify-content:center; color:#555;">
                            Sem imagem
                        </div>
                    <?php endif; ?>
                    <section class="card-texto">
                        <h3><?= htmlspecialchars($ex['nome']) ?></h3>
                        <p style="color:#00ACFE; font-size:12px; margin-bottom:8px;"><?= htmlspecialchars($ex['grupo_muscular']) ?></p>
                        <p><?= htmlspecialchars(mb_substr($ex['descricao'], 0, 100)) ?>...</p>
                    </section>
                </section>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>
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

<script>
function filtrar(grupo) {
    const cards = document.querySelectorAll('.card-exercicio');
    cards.forEach(card => {
        if (grupo === 'todos' || card.dataset.grupo === grupo) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function buscar() {
    const termo = document.getElementById('busca').value.toLowerCase();
    const cards = document.querySelectorAll('.card-exercicio');
    cards.forEach(card => {
        const nome = card.querySelector('h3').textContent.toLowerCase();
        card.style.display = nome.includes(termo) ? 'block' : 'none';
    });
}
</script>

</body>
</html>