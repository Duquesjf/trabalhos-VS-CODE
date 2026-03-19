<?php
// 1. Criamos o vetor principal e preenchemos com 8 números aleatórios
$numeros = [];
for ($i = 0; $i < 8; $i++) {
    $numeros[$i] = rand(-100, 100); 
}

$positivos = [];
$negativos = [];

$posp = 0; // Contador para o índice do vetor de positivos
$posn = 0; // Contador para o índice do vetor de negativos

// 2. Lógica de separação: percorre o vetor original
for ($i = 0; $i < 8; $i++) {
    if ($numeros[$i] >= 0) {
        $positivos[$posp] = $numeros[$i];
        $posp++;
    } else {
        $negativos[$posn] = $numeros[$i];
        $posn++;
    }
}

// 3. Exibição dos resultados formatada
echo "<b>Números Gerados Aleatoriamente:</b><br>";
echo implode(", ", $numeros);

echo "<br><br>";

echo "<b>Apenas os Positivos:</b><br>";
echo implode(" | ", $positivos);

echo "<br><br>";

echo "<b>Apenas os Negativos:</b><br>";
echo implode(" | ", $negativos);

echo "<br><br><a href='index.php'>Voltar</a>";
?>