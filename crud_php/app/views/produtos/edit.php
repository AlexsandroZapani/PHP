<!DOCTYPE html>
<html>

<head>
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h1>Editar Produto</h1>

    <form method="POST" action="?action=update">

        <input type="hidden" name="id" value="<?= $produto['id'] ?>">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= $produto['nome'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="<?= $produto['quantidade'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="<?= $produto['preco'] ?>"
                required>
        </div>

        <button class="btn btn-success">Salvar</button>
        <a href="/" class="btn btn-secondary">Cancelar</a>

    </form>

</body>

</html>