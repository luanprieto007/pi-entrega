<!-- Título -->
<h1 class="page-title">CADASTRO DE PRODUTO</h1>

<main class="dashboard-container">
    <div class="form-container">

        <?php
        $d = $_SESSION['dados'] ?? ($dados ?? []);
        $erros = $_SESSION['erros'] ?? [];
        unset($_SESSION['erros'], $_SESSION['dados']);
        ?>

        <?php if (!empty($erros)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($erros as $e): ?>
                        <li><?= $e ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="/produto/salvar" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= htmlspecialchars($d['id_produto'] ?? '') ?>">

            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label for="nome" class="form-label fw-semibold">Nome do produto:</label>
                    <input type="text" id="nome" name="nome" class="form-control"
                        placeholder="Digite o nome completo" required value="<?= htmlspecialchars($d['nome'] ?? '') ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label for="descricao" class="form-label fw-semibold">Descrição:</label>
                    <textarea id="descricao" name="descricao" class="form-control" placeholder="Digite aqui"><?= htmlspecialchars($d['descricao'] ?? '') ?></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 mb-3">
                    <label for="quantidade" class="form-label fw-semibold">Quantidade:</label>
                    <input type="number" id="quantidade" name="quantidade" class="form-control"
                        placeholder="1" value="<?= htmlspecialchars($d['quantidade'] ?? '') ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="valor" class="form-label fw-semibold">Valor:</label>
                    <input type="number" step="0.01" id="valor" name="valor" class="form-control"
                        placeholder="R$" value="<?= htmlspecialchars($d['valor'] ?? '') ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="categoria" class="form-label fw-semibold">Categoria:</label>
                    <select id="categoria" name="categoria" class="form-select">
                        <option value="camisa" <?= (isset($d['categoria']) && $d['categoria']=='camisa')? 'selected':'' ?>>Camisa</option>
                        <option value="boné" <?= (isset($d['categoria']) && $d['categoria']=='boné')? 'selected':'' ?>>Boné</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-3 mt-4">
                <a href="/produto" class="btn btn-link text-primary">Voltar</a>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>

    </div>
</main>
</div>
