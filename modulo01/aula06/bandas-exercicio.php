<?php

$bandas = [
    ['Red Hot',5],
    ['Offspring',2],
    ['Linkin Park',4],
];

echo $bandas[0][0];
echo '<table>';
echo '<tr>
        <th>Banda</th>
        <th>Musicas Conhecidas</th>
    </tr>';

foreach ($bandas as $cadaBanda) {
    echo "<tr><td>{$cadaBanda[0]}</td><td>{$cadaBanda[1]}</td></tr>";
}

echo '</table>';
?>