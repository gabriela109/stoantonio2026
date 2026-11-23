<?php
function somar(float $numero1, float $numero2): float
{
    return $numero1 + $numero2;
}
function subtrair(float $numero1, float $numero2): float
{
    return $numero1 - $numero2;
}
function multiplicar(float $numero1, float $numero2): float
{
    return $numero1 * $numero2;
}
function dividir(float $numero1, float $numero2): float
{
    return $numero1 / $numero2;
}
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim(fgets(STDIN));
}
$numero1Informado = lerEntrada('Digite o primeiro número: ');
$numero2Informado = lerEntrada('Digite o segundo número: ');
$operacao = strtolower(strtr(
    lerEntrada('Escolha a operação (adição, subtração, divisão ou multiplicação): '),
    ['Ç' => 'ç', 'Ã' => 'ã']
));

if (!is_numeric($numero1Informado) || !is_numeric($numero2Informado)) {
    exit("Erro: informe dois números válidos.\n");
}

$numero1 = (float) $numero1Informado;
$numero2 = (float) $numero2Informado;

switch ($operacao) {
    case 'adição':
    case 'adicao':
        $resultado = somar($numero1, $numero2);
        break;
    case 'subtração':
    case 'subtracao':
        $resultado = subtrair($numero1, $numero2);
        break;
    case 'multiplicação':
    case 'multiplicacao':
        $resultado = multiplicar($numero1, $numero2);
        break;
    case 'divisão':
    case 'divisao':
        if ($numero2 === 0.0) {
            exit("Erro: não é possível dividir por zero.\n");
        }
        $resultado = dividir($numero1, $numero2);
        break;
    default:
        exit("Erro: operação inválida.\n");
}

echo "Resultado: {$resultado}\n";
