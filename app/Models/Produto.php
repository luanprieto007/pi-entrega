<?php
namespace App\Models;

use PDO;
use App\Core\Database;

//mesmo nome do arquivo
class Produto {

    // helper para pegar conexão PDO sem mudar a sua Database
    private static function getDB()
    {
        if (method_exists('App\Core\Database', 'getInstance')) {
            return Database::getInstance();
        } elseif (method_exists('App\Core\Database', 'conectar')) {
            return Database::conectar();
        } elseif (method_exists('App\Core\Database', 'getConnection')) {
            return Database::getConnection();
        } else {
            return Database::getInstance();
        }
    }

    //Aqui declaramos uma função para cada operação do crud

    public static function buscarTodos(){
        $con = self::getDB();
        $sql = "SELECT * FROM produtos WHERE deleted_at IS NULL";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id){
        $con = self::getDB();
        $sql = "SELECT * FROM produtos WHERE id_produto = :id_produto LIMIT 1";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id_produto", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function salvar($dados){
        $con = self::getDB();
        $sql = "INSERT INTO produtos 
                (nome, descricao, quantidade, valor, categoria) 
                VALUES (:nome, :descricao, :quantidade, :valor, :categoria)";

        $stmt = $con->prepare($sql);
        $stmt->bindValue(":nome", $dados['nome']);
        $stmt->bindValue(":descricao", $dados['descricao']);
        $stmt->bindValue(":quantidade", $dados['quantidade'], PDO::PARAM_INT);
        $stmt->bindValue(":valor", $dados['valor']);
        $stmt->bindValue(":categoria", $dados['categoria']);

        return $stmt->execute();
    }

    public static function atualizar($id, $dados){
        $con = self::getDB();
        $sql = "UPDATE produtos SET 
                nome = :nome,
                descricao = :descricao,
                quantidade = :quantidade,
                valor = :valor,
                categoria = :categoria
                WHERE id_produto = :id_produto";

        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id_produto", $id, PDO::PARAM_INT);
        $stmt->bindValue(":nome", $dados['nome']);
        $stmt->bindValue(":descricao", $dados['descricao']);
        $stmt->bindValue(":quantidade", $dados['quantidade'], PDO::PARAM_INT);
        $stmt->bindValue(":valor", $dados['valor']);
        $stmt->bindValue(":categoria", $dados['categoria']);

        return $stmt->execute();
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
