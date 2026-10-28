<?php
echo "Digite o primeiro valor: ";
$valor1 = (float) str_replace(',', '.', trim((string) fgets(STDIN)));

echo "Digite o segundo valor: ";
$valor2 = (float) str_replace(',', '.', trim((string) fgets(STDIN)));

echo "Digite o terceiro valor: ";
$valor3 = (float) str_replace(',', '.', trim((string) fgets(STDIN)));

$soma = $valor1 + $valor2 + $valor3;
echo "A soma dos três valores é: " . $soma . PHP_EOL;
