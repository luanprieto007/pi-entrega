 <!-- Título -->
        <h1 class="page-title">CADASTRO DE PRODUTO</h1>

        <main class="dashboard-container">
            <div class="form-container">
             
                <form action="./listagem-produto.html" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <label for="nome" class="form-label fw-semibold">Nome do produto:</label>
                            <input type="text" id="nome" name="nome" class="form-control"
                                placeholder="Digite o nome completo" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <label for="nome" class="form-label fw-semibold">Descrição:</label>
                            <input type="text" id="nome" name="nome" class="form-control"
                                placeholder="Digite aqui" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <label for="quantidade" class="form-label fw-semibold">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" class="form-control"
                                placeholder="1">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="valor" class="form-label fw-semibold">Cidade:</label>
                            <input type="number" id="valor" name="valor" class="form-control" placeholder="R$">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="categoria" class="form-label fw-semibold">Categoria:</label>
                            <select id="categoria" name="categoria" class="form-select">
                                <option value="camisa">Camisa</option>
                                <option value="boné">Boné</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-4">
                        <a href="listagem-usuarios.html"
                            class="btn btn-link text-primary">Voltar</a>
                        <button type="reset" class="btn btn-secondary">Limpar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>

            </div>
        </main>
    </div>