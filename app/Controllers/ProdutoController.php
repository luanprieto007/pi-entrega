<?php
namespace App\Controllers;

//Importa o model de produto
use App\Models\Produto;

class ProdutoController{

    //Busca os produtos e chama na tela de listar 
    public function listar (){
        //chama a model e a função que busca os dados e armazena na var 
        $listagem_produto = Produto::buscarTodos();

        render("produto/listagem_produto.php", [
            'produto' => $listagem_produto,
            'produtos' => $listagem_produto
        ]);
    }

    public function editar($id)
    {
        if (!$id) {
            header('Location: /produto');
            exit;
        }

        $produto = Produto::buscarPorId($id);

        if (!$produto) {
            header('Location: /produto');
            exit;
        }

        render("produto/cadastro_produto.php", [
            'dados' => $produto
        ]);
    }

    public function excluir($id)
    {
        if ($id) {
            Produto::softDelete($id);
        }
        header('Location: /produto');
        exit;
    }

    public function excluirFisico($id) {
        if ($id) {
            Produto::fisicalDelete($id);
        }
        header('Location: /produto');
        exit;
    }

    public function salvar()
    {
        // Verifica se veio um ID (campo oculto do form)
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        // Limpa os dados, remove tudo que não for texto puro 
        $dados = [
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao' => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'quantidade' => filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT),
            'valor' => filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_FLOAT),
            'categoria' => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        // Cria a Lista de Erros
        $erros = [];

        // Verificação do nome estar vazio e também sobre caracteres minimos.
        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        } else if (strlen($dados['nome']) < 2) {
            $erros[] = 'O campo NOME deve ser mais que 1 caractere!';
        }

        // Se não houver erros, salva
        // Se houver erros, volta para o formulário
        if (!empty($erros)) {
            $_SESSION['erros'] = $erros;
            
            // Guarda os dados na sessão
            $dados['id_produto'] = $id;
            $_SESSION['dados'] = $dados;

            if ($id) {
                header('Location: /produto/editar?id=' . $id);
            } else {
                header('Location: /produto/inserir');
            }
            exit;
        }

        if ($id) {
            // Caso tenha ID - UPDATE
            Produto::atualizar($id, $dados);
        } else {
            // Caso não tenha ID - CREATE
            Produto::salvar($dados);
        }

        header('Location: /produto');
        exit;
    }

}
