<?php
function isOdd($number)
{
    return $number % 2 !== 0;
}

$x = readline("");
$y = readline("");

$soma = 0;

if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

for ($i = $x + 1; $i < $y; $i++) {
    if (isOdd($i)) {
        $soma += $i;
    }
}
echo $soma . PHP_EOL;