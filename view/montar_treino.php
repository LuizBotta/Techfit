<?php
session_start();

if (!isset($_SESSION["cliente_id"])) {
    header('Location: login.php');
    die();
}

require "../assets/processamento/funcoesBD.php";

$exercicios = buscarTodosExercicios();
$treino     = buscarTreinoUsuario($_SESSION["cliente_id"]);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/exercicio_academia.css">
    <title>Montar Treino</title>
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
            <li><a href="montar_treino.php">TREINOS</a></li>
            <li><a href="nutricao.php">NUTRIÇÃO</a></li>
            <li><a href="sobre_nos.php">SOBRE NÓS</a></li>

        </ul>
    </section>
    <section class="botao-entrar">
        <a href="visualizar_perfil.php" style="text-decoration:none; color:white;">
            <span>Olá, <?= $_SESSION["cliente_nome"] ?></span>
        </a>
        <a href="../logout.php"><button>SAIR</button></a>
    </section>
</header>

<section class="banner-exercicios">
    <section class="texto-banner">
        <h1>MEU</h1>
        <h1 id="destaque">TREINO.</h1>
        <p>Monte seu treino personalizado com os exercícios disponíveis.</p>
    </section>
</section>

<section class="modalidades">
    <h1>Montar Treino</h1>
</section>

<section class="conteudo-treino">

    <!-- Painel para adicionar exercício -->
    <section class="painel-adicionar">
        <h2>ADICIONAR EXERCÍCIO</h2>

        <?php if (isset($_GET["sucesso"])): ?>
            <p class="msg-sucesso">Exercício adicionado ao treino!</p>
        <?php endif; ?>
        <?php if (isset($_GET["erro"])): ?>
            <p class="msg-erro">Erro ao adicionar. Tente novamente.</p>
        <?php endif; ?>

        <?php if (empty($exercicios)): ?>
            <p style="color:#aaa; font-size:13px;">Nenhum exercício cadastrado ainda. <a href="cadastrar_exercicio.php" style="color:#00ACFE;">Cadastre um.</a></p>
        <?php else: ?>
        <form method="POST" action="../assets/processamento/processamento_treino.php">
            <label>Exercício</label>
            <select name="inputExercicio" required>
                <option value="">Selecione...</option>
                <?php foreach ($exercicios as $ex): ?>
                    <option value="<?= $ex['id'] ?>">
                        <?= htmlspecialchars($ex['nome']) ?> — <?= htmlspecialchars($ex['grupo_muscular']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Séries</label>
            <input type="number" name="inputSeries" min="1" max="20" value="3" required>

            <label>Repetições</label>
            <input type="number" name="inputRepeticoes" min="1" max="100" value="12" required>

            <button type="submit" class="btn-adicionar">+ Adicionar ao Treino</button>
        </form>
        <?php endif; ?>
    </section>

    <!-- Painel com treino atual -->
    <section class="painel-treino">
        <h2>MEU TREINO ATUAL</h2>

        <?php if (isset($_GET["removido"])): ?>
            <p class="msg-sucesso">Exercício removido do treino!</p>
        <?php endif; ?>

        <?php if (empty($treino)): ?>
            <p class="vazio">Seu treino está vazio. Adicione exercícios ao lado!</p>
        <?php else: ?>
        <table class="tabela-treino">
            <tr>
                <th>Exercício</th>
                <th>Grupo Muscular</th>
                <th>Séries</th>
                <th>Repetições</th>
                <th>Remover</th>
            </tr>
            <?php foreach ($treino as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item["exercicio_nome"]) ?></td>
                <td><?= htmlspecialchars($item["grupo_muscular"]) ?></td>
                <td><?= $item["series"] ?>x</td>
                <td><?= $item["repeticoes"] ?></td>
                <td>
                    <form method="POST" action="../assets/processamento/processamento_treino.php">
                        <input type="hidden" name="inputRemover" value="<?= $item["id"] ?>">
                        <button type="submit" class="btn-remover">Remover</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
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

</body>
</html>