<?php
/*
MODEL: Produto

No padrão MVC o Model é responsável pelos dados
e pela comunicação com o banco de dados.
*/

require_once __DIR__ . '/../../config/database.php';

class Produto {

    // Retorna todos os produtos
    public static function all() {

        $db = Database::connect();

        $stmt = $db->query(
            "SELECT * FROM produtos ORDER BY id DESC"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Cria um novo produto
    public static function create($nome, $quantidade, $preco) {

        $db = Database::connect();

        $stmt = $db->prepare(
            "INSERT INTO produtos (nome, quantidade, preco)
             VALUES (?, ?, ?)"
        );

        return $stmt->execute([$nome, $quantidade, $preco]);
    }

    // Busca produto por ID
    public static function find($id) {

        $db = Database::connect();

        $stmt = $db->prepare(
            "SELECT * FROM produtos WHERE id = ?"
        );

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Atualiza produto
    public static function update($id, $nome, $quantidade, $preco) {

        $db = Database::connect();

        $stmt = $db->prepare(
            "UPDATE produtos
             SET nome = ?, quantidade = ?, preco = ?
             WHERE id = ?"
        );

        return $stmt->execute([$nome,$quantidade,$preco,$id]);
    }

    // Remove produto
    public static function delete($id) {

        $db = Database::connect();

        $stmt = $db->prepare(
            "DELETE FROM produtos WHERE id = ?"
        );

        return $stmt->execute([$id]);
    }
}
