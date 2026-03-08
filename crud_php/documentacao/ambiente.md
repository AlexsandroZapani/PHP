
# Preparando o Ambiente

Este projeto foi criado para ensinar programação web com **PHP e MVC**.

## O que é PHP

PHP é uma linguagem de programação usada para criar aplicações web.
Ela roda no **servidor** e gera páginas HTML que o navegador exibe.

## Verificar se o PHP está instalado

No terminal:

```bash
php -v
```

## Instalar PHP (macOS)

Se não tiver:

```bash
brew install php
```

## Banco de dados usado

Utilizamos **SQLite**.

SQLite é um banco baseado em arquivo.

## Criar o banco

Entre na pasta:

```bash
cd database
```

Abra o SQLite:

```bash
sqlite3 estoque.db
```

Crie a tabela:

```sql
CREATE TABLE produtos (
id INTEGER PRIMARY KEY AUTOINCREMENT,
nome TEXT NOT NULL,
quantidade INTEGER NOT NULL,
preco REAL NOT NULL
);
```
