<?php
// Recebe a quantidade de termos via POST
$n = $_POST['n']; 

// Inicializa a lista
$fibonacci = [];

// Define os valores base dependendo do tamanho solicitado
if ($n >= 1) $fibonacci[0] = 0;
if ($n >= 2) $fibonacci[1] = 1;

// começa do 2, pois as posições 0 e 1 já foram tratadas
for ($i = 2; $i < $n; $i++) {
    // O número atual é a soma dos dois anteriores
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

// Exibindo o resultado formatado
echo "<h3>Série de Fibonacci com $n elementos:</h3>";
echo "<p>" . implode(" ", $fibonacci) . "</p>";

echo "<br><a href='index.php'>Voltar</a>";
?>