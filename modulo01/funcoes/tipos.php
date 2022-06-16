<?php

declare(strict_types=1);


function welcome(string $nome): string
{
    return "Bem vindo {nome}";
}

function soma(float $n1,float $n2): floatval
{
    return $n1 + $n2;
}

echo soma(5.67,20);
echo welcome('Luany');