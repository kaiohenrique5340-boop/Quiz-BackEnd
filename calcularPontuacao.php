<?php
session_start();
include 'perguntas.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['opcao'])) {
    
    $perguntaAtualNum = $_SESSION['perguntaAtualNum'];
    $indicesSorteados = $_SESSION['perguntasAleatoria'];
    $indiceReal = $indicesSorteados[$perguntaAtualNum];
    $opcao = $_POST['opcao'];

    // Verificação da resposta correta
    if ($opcao == $perguntas[$indiceReal]['gabarito']) {
        $_SESSION['acertos']++;
    }
    
    // Avança para a próxima pergunta
    $_SESSION['perguntaAtualNum']++;
}

// Redireciona para a próxima pergunta ou para o resultado
if (isset($_SESSION['perguntaAtualNum']) && $_SESSION['perguntaAtualNum'] < 10) {
    header('Location: quiz.php');
    exit;
} else {
    header('Location: resultado.php');
    exit;
}
?>