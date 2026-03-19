<!-- 
 Data: 18/03/2026
 Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 8 - Soma de 0 até N com Função
Faça um programa que receba um número inteiro, determinando a soma de 0 até tal número (incluso) por meio de uma função soma(n) que retorne tal soma.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8 - Função Soma</title>
</head>
<body>
    <h2>Somatório de 0 até N</h2>
    
    <form action="calcula.php" method="POST">
        <label>Informe o valor de N:</label>
        <input type="number" name="n_valor" min="0" required>
        
        <button type="submit">Calcular Soma</button>
    </form>
</body>
</html>