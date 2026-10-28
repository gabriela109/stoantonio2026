<?php
function lerNumero(string $mensagem): float
{
    echo $mensagem;
    $entrada = trim((string) fgets(STDIN));
    return (float) str_replace(',', '.', $entrada);
}

$mensalidade = lerNumero('Digite o valor atual da mensalidade (R$): ');
$taxaReajuste = lerNumero('Digite a taxa de reajuste (%): ');
$valorReajuste = $mensalidade * ($taxaReajuste / 100);
$mensalidadeAtualizada = $mensalidade + $valorReajuste;

echo 'Valor do reajuste: R$ ' . number_format($valorReajuste, 2, ',', '.') . PHP_EOL;
echo 'Mensalidade reajustada: R$ ' . number_format($mensalidadeAtualizada, 2, ',', '.') . PHP_EOL;