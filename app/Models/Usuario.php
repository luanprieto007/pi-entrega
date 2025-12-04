<?php
namespace App\Models;

use PDO;
use App\Core\Database;  

class Usuario
{
    // Retorna todos os usuários não deletados (soft delete)
    public static function buscarTodos()
    {
        // Inicia a conexão com o BD
        $pdo = Database::conectar();

        $sql = "SELECT * FROM usuarios WHERE deleted_at IS NULL ORDER BY id_usuario DESC";
        
        // Retorna o resultado do Script SQL
        return $pdo->query($sql)->fetchAll();
    }

    // Retorna um usuário pelo ID
    public static function buscarPorId($id)
    {
        // Inicia a conexão com o BD
        $pdo = Database::conectar();

        $sql = "SELECT * FROM usuarios WHERE deleted_at IS NULL AND id_usuario = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Insere um novo usuário no banco
    public static function salvar($dados) {
        try {
        $pdo = Database::conectar();

        // Criptografa a senha do usuário antes de salvar
        $senha_hash = password_hash($dados['senha'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO usuarios 
            (nome, cpf, data_nascimento, celular, rua, numero, complemento,
             bairro, cidade, cep, genero, estado, email, nivel_acesso, senha)
            VALUES 
            (:nome, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento,
             :bairro, :cidade, :cep, :genero, :estado, :email, :nivel_acesso, :senha)";

        // Prepara o SQL para ser inserido no BD limpando códigos maliciosos
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
        $stmt->bindParam(':data_nascimento', $dados['data_nascimento'], PDO::PARAM_STR);
        $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
        $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
        $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
        $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
        $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
        $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
        $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
        $stmt->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
        $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha_hash, PDO::PARAM_STR);

        $stmt->execute();

        // Retorna o ID do registro no BD
        return (int) $pdo->lastInsertId();
        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            exit;
        }
    }

    // Atualiza um usuário existente
    public static function atualizar($id, $dados)
    {
         try {
            $pdo = Database::conectar();

            $senha_hash = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "UPDATE produtos SET 
                    nome = :nome,
                    descricao = :descricao,
                    quantidade = :quantidade,
                    valor = :valor,
                    categoria = :categoria
                    WHERE id_produto = :id_produto";

            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento'], PDO::PARAM_STR);
            $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
            $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
            $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
            $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
            $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
            $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
            $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
            $stmt->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
            $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha_hash, PDO::PARAM_STR);

            $stmt->bindParam(":id", $dados['id_usuario'], PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao alterar: " . $e->getMessage();
            exit;
        }   
    }

    public static function softDelete($id){
        $con = self::getDB();
        $sql = "UPDATE produtos SET deleted_at = NOW() WHERE id_produto = :id_produto";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id_produto", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public static function fisicalDelete($id){
        $con = self::getDB();
        $sql = "DELETE FROM produtos WHERE id_produto = :id_produto";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id_produto", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}


