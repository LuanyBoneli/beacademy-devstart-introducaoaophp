<?php

$a1=[
  'nome' =>  'Francisco',
    'email' => 'francisco@email.com',
    'telefone' => '88 9 8787-6563',
    'notas'=> [
        9,
        9,
        10,
        7,
    ]
];

$a2=[
    'nome' =>'Maria',
   'email'=> 'maria@email.com',
    'telefone' => '85 9 8685-4922',
    'notas' => [
        9,
        8,
        6,
        5,
    ]
];

$a3=[
    'nome' =>'Marina',
   'email'=> 'marina@email.com',
    'telefone' => '85 9 8685-0002',
    'notas' => [
        9,
        7.8,
        6,
        5,
    ]
];

$a4=[
    'nome' =>'Alice',
   'email'=> 'alice2@email.com',
    'telefone' => '85 9 8888-0101',
    'notas' => [
        9,
        9,
        7,
        10,
    ]
];

$alunos=[
    $a1,
    $a2,
    $a3,
    $a4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class= "container">

<table class ="table table-hover table-striped mt-5">
    <h1 class= "mt-5"> Alunos </h1>
    <hr> 
    <thead class ="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
</tr>
</thead>

<tbody>
    <?php
    foreach($alunos as $cadaAluno){
        echo '<tr>';
        echo '<td>' . $cadaAluno['nome'] . '</td>';
        echo '<td>' . $cadaAluno['email'] . '</td>';
        echo '<td>' . $cadaAluno['telefone'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
</div>