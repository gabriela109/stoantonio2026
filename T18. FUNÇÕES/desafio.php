<?php
function verificarAceitacao(string $sexo, int $idade): string
{
    $sexo = strtolower(trim($sexo));

    if (($sexo === 'f' || $sexo === 'feminino') && $idade < 25) {
        return 'ACEITA';
    }

    return 'NAO ACEITA';
}

echo 'Digite seu nome: ';
$nome = trim(fgets(STDIN));

echo 'Digite seu sexo (F/M): ';
$sexo = trim(fgets(STDIN));

echo 'Digite sua idade: ';
$idadeInformada = trim(fgets(STDIN));

if ($nome === '') {
    exit("Erro: informe seu nome.\n");
}

$idade = filter_var($idadeInformada, FILTER_VALIDATE_INT);

if ($idade === false || $idade < 0) {
    exit("Erro: informe uma idade válida.\n");
}

echo $nome . ': ' . verificarAceitacao($sexo, $idade) . PHP_EOL;