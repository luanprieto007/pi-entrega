<!-- Título -->
<h1 class="page-title">PRODUTOS</h1>

<main class="dashboard-container">
    <div class="list-container">
        <div class="list-header">
            <a href="/produto/inserir" class="btn btn-primary">ADICIONAR</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CATEGORIA</th>
                        <th>QUANTIDADE</th>
                        <th>VALOR</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produto as $p): ?>
                    <tr>
                        <td><?= $p['id_produto'] ?></td>
                        <td><?= $p['nome'] ?></td>
                        <td><?= $p['categoria'] ?></td>
                        <td><?= $p['quantidade'] ?></td>
                        <td>R$ <?= number_format($p['valor'], 2, ',', '.') ?></td>
                        <td>
                            <div class="table-actions">
                                <a href="/produto/editar?id=<?= $p['id_produto'] ?>" class="btn btn-warning">Editar</a>
                                <a href="/produto/excluir?id=<?= $p['id_produto'] ?>" class="btn btn-danger" onclick="return confirm('Confirma exclusão?')">Excluir</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
</div>
