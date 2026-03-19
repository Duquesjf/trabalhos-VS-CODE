<?php
// Recebe o array de valores do formulário
$valores = $_POST['valores']; 
$soma_total = 0;

// percorre os 5 valores recebidos
for ($i = 0; $i < 5; $i++) {
    $fatorial = 1;
    
    // Calcula o fatorial multiplicando o número pelos seus antecessores
    for ($j = $valores[$i]; $j > 1; $j--) {
        $fatorial = $fatorial * $j;
    }
    
    // Soma o fatorial calculado ao total geral
    $soma_total = $soma_total + $fatorial;
    
    echo "Fatorial de " . $valores[$i] . " é: " . $fatorial . "<br>";
}

// Exibe o somatório final de todos os fatoriais
echo "<h4>Somatório total: " . $soma_total . "</h4>";
echo "<br><a href='index.php'>Voltar</a>";
?>