<?php

$bandas =[
    'ExaltaSamba',
    'Aviões do Forró',
    'CPM 22',
    'Barão Vermelho',
    'Titãs',
];

echo '<ul>';

foreach ($bandas as $cadaBanda){
    echo "<li> {$cadaBanda} </li>";
}
echo '</ul>';