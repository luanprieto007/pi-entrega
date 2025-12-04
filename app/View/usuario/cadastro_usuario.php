<!-- Título -->
<h1 class="page-title">CADASTRO DE USUÁRIO</h1>

<main class="dashboard-container">
    <div class="form-container">

        <!-- MUDA APENAS A ACTION PARA A ROTA DO CONTROLLER -->
        <form action="/usuario/salvar" method="POST">

            <!-- Campo oculto para edição -->
            <?php if (!empty($dados['id_usuario'])): ?>
                <input type="hidden" name="id" value="<?= $dados['id_usuario'] ?>">
            <?php endif; ?>

            <!-- NOME -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label for="nome" class="form-label fw-semibold">Nome completo:</label>
                    <input type="text" id="nome" name="nome" class="form-control"
                        value="<?= $dados['nome'] ?? '' ?>" placeholder="Digite o nome completo" required>
                </div>
            </div>

            <!-- CPF -->
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">CPF:</label>
                    <input type="text" name="cpf" class="form-control"
                        value="<?= $dados['cpf'] ?? '' ?>" placeholder="000.000.000-00" required>
                </div>

                <!-- DATA NASCIMENTO -->
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Data de nascimento:</label>
                    <input type="date" name="data_nascimento" class="form-control"
                        value="<?= $dados['data_nascimento'] ?? '' ?>">
                </div>
            </div>

            <!-- CELULAR -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Celular:</label>
                    <input type="text" name="celular" class="form-control"
                        value="<?= $dados['celular'] ?? '' ?>" placeholder="(00) 00000-0000">
                </div>
            </div>

            <!-- ENDEREÇO -->
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Rua:</label>
                    <input type="text" name="rua" class="form-control"
                        value="<?= $dados['rua'] ?? '' ?>">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold">Número:</label>
                    <input type="text" name="numero" class="form-control"
                        value="<?= $dados['numero'] ?? '' ?>">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold">Complemento:</label>
                    <input type="text" name="complemento" class="form-control"
                        value="<?= $dados['complemento'] ?? '' ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-semibold">Bairro:</label>
                    <input type="text" name="bairro" class="form-control"
                        value="<?= $dados['bairro'] ?? '' ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label fw-semibold">Cidade:</label>
                    <input type="text" name="cidade" class="form-control"
                        value="<?= $dados['cidade'] ?? '' ?>">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label fw-semibold">CEP:</label>
                    <input type="text" name="cep" class="form-control"
                        value="<?= $dados['cep'] ?? '' ?>">
                </div>
            </div>

            <!-- ESTADO -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Estado:</label>
                    <input type="text" name="estado" class="form-control"
                        value="<?= $dados['estado'] ?? '' ?>">
                </div>
            </div>

            <!-- EMAIL -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Email:</label>
                    <input type="email" name="email" class="form-control"
                        value="<?= $dados['email'] ?? '' ?>" placeholder="email@exemplo.com">
                </div>
            </div>

            <!-- NÍVEL DE ACESSO -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Nível de acesso:</label>
                    <select name="nivel_acesso" class="form-select">
                        <option value="admin" <?= (!empty($dados['nivel_acesso']) && $dados['nivel_acesso'] == "admin") ? "selected" : "" ?>>Administrador</option>
                        <option value="user" <?= (!empty($dados['nivel_acesso']) && $dados['nivel_acesso'] == "user") ? "selected" : "" ?>>Funcionário</option>
                    </select>
                </div>
            </div>

            <!-- GÊNERO -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Gênero:</label>
                    <select name="genero" class="form-select">
                        <option value="feminino" <?= (!empty($dados['genero']) && $dados['genero'] == "feminino") ? "selected" : "" ?>>Feminino</option>
                        <option value="masculino" <?= (!empty($dados['genero']) && $dados['genero'] == "masculino") ? "selected" : "" ?>>Masculino</option>
                        <option value="outro" <?= (!empty($dados['genero']) && $dados['genero'] == "outro") ? "selected" : "" ?>>Outro</option>
                    </select>
                </div>
            </div>

            <!-- SENHA -->
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Senha:</label>
                    <input type="password" name="senha" class="form-control">
                </div>
            </div>

               <div class="d-flex justify-content-end gap-3 mt-4">
                <a href="/dashboard" class="btn btn-link text-primary">Voltar</a>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>

    </div>
</main>
</div>
