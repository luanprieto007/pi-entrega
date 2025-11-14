<!-- Título -->
        <h1 class="page-title">USUÁRIOS</h1>

        <main class="dashboard-container">
            <div class="list-container">
                <div class="list-header">
                    <a href="/usuario/inserir" class="btn btn-primary">ADICIONAR</a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>CELULAR</th>
                                <th>NÍVEL</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($usuarios as $u): ?>
                            <tr>
                                <td><?= $u['id_usuario'] ?></td>
                                <td><?= $u['nome'] ?></td>
                                <td><?= $u['email'] ?></td>
                                <td><?= $u['celular'] ?></td>
                                <td><?= $u['nivel_acesso'] ?></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="cadastro-usuario.html" class="btn btn-warning">Editar</a>
                                        <button class="btn btn-danger">Excluir</button>
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