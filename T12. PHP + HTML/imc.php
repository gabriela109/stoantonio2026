<?php
$peso = 70; // peso em quilogramas
$altura = 1.75; // altura em metros

if ($altura > 0) {
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC é " . number_format($imc, 2, ',', '.') . ".";
} else {
    echo "A altura deve ser maior que zero.";
}
