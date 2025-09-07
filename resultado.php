<?php
session_start();
$resultado = $_SESSION['acertos'];
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
            <h2> <?= $resultado ?> Pontos </h2>

            <button type="button" id="btn_iniciar" onclick="window.location.href='quiz.php'">Recomecar</button>
        </section>
    </body>