<?php
/*
CONTROLLER: ProdutoController

No padrão MVC o Controller controla o fluxo da aplicação.
Ele recebe a requisição do usuário, chama o Model e envia
os dados para a View.
*/

require_once __DIR__ . '/../models/Produto.php';

class ProdutoController {

    public function index() {

        $produtos = Produto::all();

        require __DIR__ . '/../views/produtos/index.php';
    }

    public function store() {

        Produto::create(
            $_POST['nome'],
            $_POST['quantidade'],
            $_POST['preco']
        );

        header("Location: /");
    }

    public function edit() {

        $produto = Produto::find($_GET['id']);

        require __DIR__ . '/../views/produtos/edit.php';
    }

    public function update() {

        Produto::update(
            $_POST['id'],
            $_POST['nome'],
            $_POST['quantidade'],
            $_POST['preco']
        );

        header("Location: /");
    }

    public function delete() {

        Produto::delete($_GET['id']);

        header("Location: /");
    }
}
