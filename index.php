<?php
// Gabarito
$respostas = [
    "pergunta1" => "100",
    "pergunta2" => "4",
    "pergunta3" => "8",
    "pergunta4" => "10",
    "pergunta5" => "40"
];

$pontuacao = 0;
$total = count($respostas);

foreach ($respostas as $pergunta => $correta) {
    if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $correta) {
        $pontuacao++;
    }
}

echo "<h1>Resultado do Quiz</h1>";
echo "<p>Você acertou $pontuacao de $total questões.</p>";
?>
