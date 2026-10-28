<?php
function lerNumero(string $mensagem): float
{
    echo $mensagem;
    $entrada = trim((string) fgets(STDIN));
    return (float) str_replace(',', '.', $entrada);
}

$salarioBruto = lerNumero('Digite o salário bruto (R$): ');
$aliquotaInss = lerNumero('Digite a alíquota de INSS (%): ');
$aliquotaIrrf = lerNumero('Digite a alíquota de IRRF (%): ');
$aliquotaValeTransporte = lerNumero('Digite a alíquota de vale-transporte (%): ');
$outrosDescontos = lerNumero('Digite outros descontos (R$), ou 0 se não houver: ');

// Cálculo simplificado: informe as alíquotas aplicáveis ao seu caso.
$descontoInss = $salarioBruto * ($aliquotaInss / 100);
$baseIrrf = $salarioBruto - $descontoInss;
$descontoIrrf = $baseIrrf * ($aliquotaIrrf / 100);
$descontoValeTransporte = $salarioBruto * ($aliquotaValeTransporte / 100);
$totalDescontos = $descontoInss + $descontoIrrf + $descontoValeTransporte + $outrosDescontos;
$salarioLiquido = $salarioBruto - $totalDescontos;

echo PHP_EOL . 'Desconto de INSS: R$ ' . number_format($descontoInss, 2, ',', '.') . PHP_EOL;
echo 'Desconto de IRRF (cálculo simplificado): R$ ' . number_format($descontoIrrf, 2, ',', '.') . PHP_EOL;
echo 'Desconto de vale-transporte: R$ ' . number_format($descontoValeTransporte, 2, ',', '.') . PHP_EOL;
echo 'Outros descontos: R$ ' . number_format($outrosDescontos, 2, ',', '.') . PHP_EOL;
echo 'Total de descontos: R$ ' . number_format($totalDescontos, 2, ',', '.') . PHP_EOL;
echo 'Salário líquido: R$ ' . number_format($salarioLiquido, 2, ',', '.') . PHP_EOL;