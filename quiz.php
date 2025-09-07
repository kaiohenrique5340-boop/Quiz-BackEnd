<?php
    session_start();
    include 'perguntas.php';

    $indice = $_SESSION['indice'] ?? 0;
    $perguntaAtual = $perguntas[$indice];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Quiz Back-End</title>
    </head>
    <body>
        <h1>Quiz Back-End PHP</h1>
        <p>Teste seus conehcimentos em PHP</p>

        <section id="secao_iniciar">
            <form action="calcularPontuacao.php" method="post">
                <h3><?$perguntaAtual['enunciado']?></h3>
                <input type="radio" nome="opcao" value="A"><?= $perguntaAtual['respostas']['A']?><br>
                <input type="radio" nome="opcao" value="B"><?= $perguntaAtual['respostas']['B']?><br>
                <input type="radio" nome="opcao" value="C"><?= $perguntaAtual['respostas']['C']?><br>
                <input type="radio" nome="opcao" value="D"><?= $perguntaAtual['respostas']['D']?><br>
                <button type="submit">Confirmar</button>
            </form>
        </section>
    </body>
</html>