<?php
/*
ARQUIVO DE ROTAS

Este arquivo decide qual ação da aplicação será executada.
Ele funciona como um "direcionador" das requisições.

Exemplo de URL:

http://localhost:8000/?action=delete&id=5

Aqui usamos $_GET para ler os parâmetros da URL.
*/

require_once __DIR__ . '/app/controllers/ProdutoController.php';

$controller = new ProdutoController();

// Se não existir parâmetro action, usamos "index"
$action = $_GET['action'] ?? 'index';

switch ($action) {

    case 'store':
        $controller->store();
        break;

    case 'delete':
        $controller->delete();
        break;

    case 'edit':
        $controller->edit();
        break;

    case 'update':
        $controller->update();
        break;

    default:
        $controller->index();
        break;
}
