<?php

$url= $_SERVER['REQUEST_URI'];

if($url=== '/'){
    echo '<h1>Pagina Inicial</h1>';
} elseif ($url=== '/login'){
    echo '<h1>Página de Login</h1>';
} elseif ($url=== '/cadastro'){
    echo '<h1>Página de Cadastro</h1>';
} else {
    echo '<h1>Página não encontrada</h1>';
}

echo match ($url){
    '/'=> '<h1>Pagina Inicial</h1>',
    '/login'=> '<h1>Página de Login</h1>',
    '/cadastro'=> '<h1>Página de Cadastro</h1>',
    default=> '<h1>Página não encontrada</h1>'
};