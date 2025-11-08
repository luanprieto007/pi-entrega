<?php

// Importa o autoload do Composer para carregar as rotas
require __DIR__ . '/../vendor/autoload.php';

// Função para renderizar as telas com layout (COM TEMPLATE)
function render($view, $data = []) {
    extract($data);
    ob_start();

    // Inclui a tela específica
    require __DIR__ . '/../app/View/' . $view;
    $content = ob_get_clean();

    // Inclui o layout base, que usará a variável $content
    require __DIR__ . '/../app/View/layout/base.php';
}

// Função para renderizar as telas SEM layout (SEM TEMPLATE)
function render_semtemplate($view, $data = []) {
    extract($data);
    ob_start();

    // Inclui a tela específica
    require __DIR__ . '/../app/View/' . $view;
}

// Obtém a URL do navegador
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ROTAS

// HOME
if ($url == "/" || $url == "/index") {
    render('home.php');

// USUÁRIOS
} else if ($url == "/usuario") {
    render('listagem_usuario.php');
} else if ($url == "/usuario/inserir") {
    render('cadastro_usuario.php');

// PRODUTOS
} else if ($url == "/produto") {
    render('listagem_produto.php');
} else if ($url == "/produto/inserir") {
    render('cadastro_produto.php');

// DASHBOARD
} else if ($url == "/dashboard") {
    render('dashboard.php');

// LOGIN
} else if ($url == "/login") {
    render('login.php');

// 404 - Página não encontrada
} else {
    echo "<h1>Página não encontrada (404)</h1>";
}
