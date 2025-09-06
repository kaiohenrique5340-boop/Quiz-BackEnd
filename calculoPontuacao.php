<?php
session_start();//inicia a sessao
include 'perguntas.php';

/*se houver sessao iniciada esse bloco
ira iniciar com indice e acertos com valor de 0*/
if (!isset($_SESSION['indice'])){
    $_SESSION['indice'] = 0;
    $_SESSION['acertos'] = 0;
}

/*
*/ 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $opcao = $_POST['opcao'];
    $indice = $_SESSION['indice'];

    if ($opcao == $perguntas[$indice]['gabarito']){
        $_SESSION['acertos']++;
    }
    $indice++;
}

$_session['indice'] = $indice;

if ($indice < count($perguntas)){
    header('Location: Quiz.php');
    exit;
}else{
    header('Location: resultado.php');
    exit;
}
?>