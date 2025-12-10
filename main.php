<?php

require_once __DIR__ . '/imposto.php';

echo "Digite sua renda mensal: ";
$linha = trim(fgets(STDIN));

if (!is_numeric($linha)) {
    echo "Entrada invalida." . PHP_EOL;
    exit(1);
}

$renda = (float) $linha;
$imposto = calcularImposto($renda);

echo "Imposto devido: R$ " . number_format($imposto, 2, ',', '.') . PHP_EOL;