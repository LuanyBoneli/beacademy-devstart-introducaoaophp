<?php

$idade=29;
$nome='Luany';

echo isset ($nome) ? $nome : 'nome não definido';
echo $idade >= 18 ? "De maior" : "De menor";

echo "<br>";

echo isset($nome) ? $nome : 'nome não definido';
echo $nome ?? 'nome não definido';

