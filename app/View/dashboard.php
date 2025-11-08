 <!-- Título -->
        <h1 class="page-title">DASHBOARD</h1>

        <main class="flex-grow-1">

            <div class="container align-items-center">
                <div class="row g-4">
                    <!-- Usuários -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-people-fill" style="font-size: 2.5rem; color: #e74c3c;"></i>
                                </div>
                                <h5 class="card-title fw-bold">Usuários</h5>
                                <p class="card-text text-muted">Gerenciar usuários do sistema</p>
                                <div class="d-grid gap-2">
                                    <a href="./listagem-usuarios.html" class="btn btn-danger btn-sm">Ver Usuários</a>
                                    <a href="./cadastro-usuario.html" class="btn btn-outline-danger btn-sm">Novo
                                        Usuário</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Produtos -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-box-fill" style="font-size: 2.5rem; color: #27ae60;"></i>
                                </div>
                                <h5 class="card-title fw-bold">Produtos</h5>
                                <p class="card-text text-muted">Gerenciar catálogo de produtos</p>
                                <div class="d-grid gap-2">
                                    <a href="listagem-produtos.html" class="btn btn-success btn-sm">Ver Produtos</a>
                                    <a href="cadastro-produto.html" class="btn btn-outline-success btn-sm">Novo
                                        Produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Estatísticas -->
            <div class="bg-light py-5">
                <div class="container-fluid">
                    <h2 class="fw-bold mb-4">Estatísticas Rápidas</h2>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm text-center">
                                <h3 class="fw-bold text-danger mb-2">0</h3>
                                <p class="text-muted mb-0">Usuários Cadastrados</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm text-center">
                                <h3 class="fw-bold text-success mb-2">0</h3>
                                <p class="text-muted mb-0">Produtos em Estoque</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm text-center">
                                <h3 class="fw-bold text-warning mb-2">0</h3>
                                <p class="text-muted mb-0">Pedidos Pendentes</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm text-center">
                                <h3 class="fw-bold text-info mb-2">R$ 0,00</h3>
                                <p class="text-muted mb-0">Receita Total</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
