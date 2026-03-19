<?php
// Função que calcula o somatório de 0 até $n
function soma($n) {
    $total = 0; // Variável que guarda o valor da soma
    for ($i = 0; $i <= $n; $i++){
        $total = $total + $i; // Soma cada número ao total acumulado
    }
    return $total;
}

// Recebe o número do formulário via POST
$numero_informado = $_POST['n_valor'];

// Executa a função e guarda o resultado
$resultado = soma($numero_informado);

echo "<h3>Exercício 8 - Soma de 0 até N</h3>";
echo "Valor informado (N): " . $numero_informado . "<br>";
echo "<b>A soma total: " . $resultado . "</b>";

echo "<br><br><a href='index.php'>Voltar</a>";
?>