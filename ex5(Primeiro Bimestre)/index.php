<!--
Data: 19/03/2026
Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 5 - Somatório de Fatoriais
Faça um programa que efetue a leitura de 5 valores numéricos inteiros e no final apresente o total do somatório da fatorial de cada valor lido.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 - Fatorial</title>
</head>
<body>
    <h2>Somatório de Fatoriais</h2>
    
    <form action="calcula.php" method="POST">
        <p>Digite 5 números inteiros:</p>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br>
        <input type="number" name="valores[]" required><br><br>
        
        <button type="submit">Calcular Somatório</button>
    </form>
</body>
</html>