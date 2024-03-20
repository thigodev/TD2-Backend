<?php

function calcularLed($numero)
{

  $ledsPorDigitos = array(
    '0' => 6,
    '1' => 2,
    '2' => 5,
    '3' => 5,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 3,
    '8' => 7,
    '9' => 6
  );

  $ledsTotal = 0;

  $numero_str  = strval($numero);

  for ($i = 0; $i < strlen($numero_str); $i++) {
    $digito = $numero_str[$i];
    $ledsTotal += $ledsPorDigitos[$digito];
  }
  return $ledsTotal;
}

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
  $numero = intval(readline());

  $ledsNecessarios = calcularLed($numero);

  echo $ledsNecessarios . " leds\n";
}