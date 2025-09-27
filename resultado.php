<?php
session_start();

// Garante que a pontuação só é lida se existir, caso contrário, é 0.
$resultado = isset($_SESSION['acertos']) ? $_SESSION['acertos'] : 0;

// Destrói a sessão para que o próximo quiz comece do zero.
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Quiz Back-End</title>
    </head>
    <body>
        <h1>Quiz Back-End PHP</h1>
        
        <section id="secao_resultado">
            <h2>Resultado</h2>
            <h2> <?= htmlspecialchars($resultado) ?> Pontos </h2>

            <button type="button" id="btn_iniciar" onclick="window.location.href='quiz.php'">Recomeçar</button>
        </section>
    </body>
</html>