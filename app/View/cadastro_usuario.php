  <!-- Título -->
        <h1 class="page-title">CADASTRO DE USUÁRIO</h1>

        <main class="dashboard-container">
            <div class="form-container">
             
                <form action="./listagem-usuarios.html" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label fw-semibold">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control"
                                placeholder="Digite o nome completo" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-semibold">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Digite o e-mail" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3 mb-3">
                            <label for="celular" class="form-label fw-semibold">Celular:</label>
                            <input type="tel" id="celular" name="celular" class="form-control"
                                placeholder="(11) 99999-9999">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="dataNascimento" class="form-label fw-semibold">Data de Nascimento:</label>
                            <input type="date" id="dataNascimento" name="dataNascimento" class="form-control"
                                placeholder="dd/mm/aaaa">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cpf" class="form-label fw-semibold">CPF:</label>
                            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="genero" class="form-label fw-semibold">Gênero:</label>
                            <select id="genero" name="genero" class="form-select" required>
                                <option value="usuario">Masculino</option>
                                <option value="administrador">Feminino</option>
                                <option value="gerente">Prefiro não informar</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <label for="cep" class="form-label fw-semibold">CEP:</label>
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="00000-000">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="endereco" class="form-label fw-semibold">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control"
                                placeholder="Rua, Avenida, etc">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="numero" class="form-label fw-semibold">Número:</label>
                            <input type="text" id="numero" name="numero" class="form-control" placeholder="Número">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <label for="complemento" class="form-label fw-semibold">Complemento:</label>
                            <input type="text" id="complemento" name="complemento" class="form-control"
                                placeholder="Apto, Bloco, etc">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="cidade" class="form-label fw-semibold">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="estado" class="form-label fw-semibold">Estado:</label>
                            <select id="estado" name="estado" class="form-select">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <label for="senha" class="form-label fw-semibold">Senha:</label>
                            <input type="text" id="senha" name="senha" class="form-control"
                                placeholder="Digite aqui" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="confirmasenha" class="form-label fw-semibold">Confirmar senha:</label>
                            <input type="text" id="confirmasenha" name="confirmasenha" class="form-control"
                                placeholder="Digite aqui" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="nivelAcesso" class="form-label fw-semibold">Nível de Acesso:</label>
                            <select id="nivelAcesso" name="nivelAcesso" class="form-select" required>
                                <option value="usuario">Usuário</option>
                                <option value="administrador">Administrador</option>
                                <option value="gerente">Gerente</option>
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