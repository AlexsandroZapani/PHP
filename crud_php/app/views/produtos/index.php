<!DOCTYPE html>
<html>

<head>
    <title>Controle de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h1>Controle de Estoque</h1>

    <form method="POST" action="?action=store" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="quantidade" class="form-control" placeholder="Quantidade" required>
        </div>
        <div class="col-md-3">
            <input type="number" step="0.01" name="preco" class="form-control" placeholder="Preço" required>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Adicionar</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($produtos)): ?>
                <?php foreach ($produtos as $p): ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nome'] ?></td>
                        <td><?= $p['quantidade'] ?></td>
                        <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                        <td>

                            <a href="?action=edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="?action=delete&id=<?= $p['id'] ?>" class="btn btn-danger btn-sm">
                                Excluir
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>