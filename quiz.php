<?php
    session_start();
    include 'perguntas.php';

    // Bloco de inicialização: Só executa se um quiz não estiver em andamento.
    if (!isset($_SESSION['perguntasAleatoria'])){
        $indices = array_keys($perguntas);
        shuffle($indices);
        
        $_SESSION['perguntasAleatoria'] = array_slice($indices, 0, 10);
        $_SESSION['acertos'] = 0; 
        $_SESSION['perguntaAtualNum'] = 0;
    }

    // Pega os dados da sessão para exibir a pergunta correta
    $perguntaAtualNum = $_SESSION['perguntaAtualNum'];
    $indicesSorteados = $_SESSION['perguntasAleatoria'];
    $indiceReal = $indicesSorteados[$perguntaAtualNum];
    $perguntaAtual = $perguntas[$indiceReal];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Quiz Back-End</title>
    </head>
    <body>
        <h1>Quiz Back-End PHP</h1>
        <p>Teste seus conhecimentos em PHP</p>
        <h3>Pergunta <?= $perguntaAtualNum + 1 ?> de 10</h3>

        <section id="secao_quiz">
            <form action="calcularPontuacao.php" method="post">
                <h3><?= htmlspecialchars($perguntaAtual['enunciado']) ?></h3>
                
                <?php foreach ($perguntaAtual['respostas'] as $letra => $texto): ?>
                    <input type="radio" name="opcao" value="<?= $letra ?>" required> <?= htmlspecialchars($texto) ?><br>
                <?php endforeach; ?>
                
                <br>
                <button type="submit">Confirmar</button>
            </form>
        </section>
    </body>
</html>