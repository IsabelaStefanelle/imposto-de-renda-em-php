<?php

require_once __DIR__ . '/imposto.php';

function aproximadamenteIgual(float $a, float $b, float $tol): bool
{
    return abs($a - $b) <= $tol;
}

$casos = [
    ['renda' => 2000.00, 'esperado' => 0.00],
    ['renda' => 2500.00, 'esperado' => 5.34],
    ['renda' => 3000.00, 'esperado' => 55.84],
    ['renda' => 4000.00, 'esperado' => 224.51],
    ['renda' => 5000.00, 'esperado' => 466.27],
];

$falhou = false;
$tol = 0.05;

foreach ($casos as $caso) {
    $renda = $caso['renda'];
    $esperado = $caso['esperado'];
    $obtido = calcularImposto($renda);

    if (!aproximadamenteIgual($obtido, $esperado, $tol)) {
        $falhou = true;
        echo "FALHA: renda = {$renda}, esperado = {$esperado}, obtido = {$obtido}" . PHP_EOL;
    }
}

if ($falhou) {
    exit(1);
}

echo "Todos os testes em PHP passaram." . PHP_EOL;
exit(0);