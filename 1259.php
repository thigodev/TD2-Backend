<?php
$quantidade = intval(trim(fgets(STDIN)));

$pares = [];
$impares = [];

for ($i = 0; $i < $quantidade; $i++) {
    $num = intval(trim(fgets(STDIN)));
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

sort($pares);
rsort($impares);

foreach ($pares as $par) {
    echo $par . "\n";
}
foreach ($impares as $impar) {
    echo $impar . "\n";
}