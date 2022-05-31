<?php

class ProdutoDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_loja";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }

    public function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO produto (nome, descricao, preco) VALUES (?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->preco);

        $stmt->execute();
    }

    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, descricao=?, preco=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->preco);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT id, nome, descricao, preco FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT id, nome, descricao, preco FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}