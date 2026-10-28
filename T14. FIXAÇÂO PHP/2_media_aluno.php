<?php
echo "Digite o nome do aluno: ";
$nome = trim((string) fgets(STDIN));

echo "Digite a primeira nota: ";
$nota1 = (float) str_replace(',', '.', trim((string) fgets(STDIN)));

echo "Digite a segunda nota: ";
$nota2 = (float) str_replace(',', '.', trim((string) fgets(STDIN)));

echo "Digite a terceira nota: ";
$nota3 = (float) str_replace(',', '.', trim((string) fgets(STDIN)));

$media = ($nota1 + $nota2 + $nota3) / 3;
$situacao = $media >= 7 ? 'Aprovado' : 'Reprovado';

echo "Aluno: " . $nome . PHP_EOL;
echo "Média: " . number_format($media, 2, ',', '.') . PHP_EOL;
echo "Situação: " . $situacao . PHP_EOL;
