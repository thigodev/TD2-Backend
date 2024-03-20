<?php

$N = intval(fgets(STDIN));


function criptografar($mensagem)
{
    $n = strlen($mensagem);

    for ($i = 0; $i < $n; $i++) {
        if (ctype_alpha($mensagem[$i])) {
            $mensagem[$i] = chr(ord($mensagem[$i]) + 3);
        }
    }

    $mensagem = strrev($mensagem);

    $metade = (int)($n / 2);
    for ($i = $metade; $i < $n; $i++) {
        $mensagem[$i] = chr(ord($mensagem[$i]) - 1);
    }
    return $mensagem;
}
for ($i = 0; $i < $N; $i++) {
    $mensagem = rtrim(fgets(STDIN));
    echo criptografar($mensagem) . "\n";
}