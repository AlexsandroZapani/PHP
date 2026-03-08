<?php
/*
CLASSE RESPONSÁVEL PELA CONEXÃO COM O BANCO

Utilizamos PDO (PHP Data Objects).

PDO é uma interface do PHP que permite acessar diferentes
bancos de dados usando o mesmo padrão de código.

Neste projeto usamos SQLite.
*/

class Database {

    // Variável que armazenará a conexão
    private static $instance = null;

    public static function connect() {

        if (self::$instance === null) {

            self::$instance = new PDO(
                "sqlite:" . __DIR__ . "/../database/estoque.db"
            );

            self::$instance->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }

        return self::$instance;
    }
}
