<?php
function lerNumero(string $mensagem): float
{
    echo $mensagem;
    $entrada = trim((string) fgets(STDIN));
    return (float) str_replace(',', '.', $entrada);
}

$quantidade = lerNumero('Digite a quantidade de itens vendidos: ');
$valorUnitario = lerNumero('Digite o valor de cada item (R$): ');
$total = $quantidade * $valorUnitario;

echo 'Total da venda: R$ ' . number_format($total, 2, ',', '.') . PHP_EOL;