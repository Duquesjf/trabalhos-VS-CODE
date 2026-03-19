<!--
Data: 18/03/2026
Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 6 - Série de Fibonacci
Faça um programa que leia um número n e apresente uma lista com a série de Fibonacci, sendo que o tamanho dessa lista é igual a n.
Exemplo: Valor de n: 12 | Resultado: 0 1 1 2 3 5 8 13 21 34 55 89
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6 - Fibonacci</title>
</head>
<body>
    <h2>Gerador de Sequência de Fibonacci</h2>
    
    <form action="calcula.php" method="POST">
        <label>Quantidade de termos (n):</label>
        <input type="number" name="n" min="1" value="12" required>
        
        <button type="submit">Gerar Sequência</button>
    </form>
</body>
</html>